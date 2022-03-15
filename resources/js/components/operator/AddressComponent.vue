<template>
  <div class="col-span-6">
    <label for="" class="block text-sm font-medium text-gray-700">
      {{ address.addresslabelJs }}
      <span v-if="address.hissuJs" class="mt-2 text-sm text-red-500">必須</span>
    </label>
    <div>
      <label for="" class="block mt-4 text-sm font-medium text-gray-700"> 郵便番号 </label>
      <div class="flex mt-1">
        <input
          :id="address.zip1NameJs"
          v-model="address.zip1Js"
          type="text"
          :name="address.zip1NameJs"
          class="w-24 focus:ring-indigo-500 focus:border-indigo-500 block rounded sm:text-sm border-gray-300"
          maxlength="3"
        />
        <span class="inline-block align-middle px-3">-</span>
        <input
          :id="address.zip2NameJs"
          v-model="address.zip2Js"
          type="text"
          :name="address.zip2NameJs"
          class="w-24 focus:ring-indigo-500 focus:border-indigo-500 block rounded sm:text-sm border-gray-300"
          maxlength="4"
        />
        <input
          id="zip-search"
          class="border-gray-300 bg-slate-50 hover:text-blue-300 py-2 px-4 mx-5 rounded sm:text-sm"
          type="button"
          value="所在地入力"
          @click="getAddressByZipcode(address.zip1Js, address.zip2Js)"
        />
        <p class="mt-2 text-sm text-red-500">{{ errorArray.zipcode }}</p>
      </div>
    </div>
    <div class="mt-3 flex">
      <select
        :id="address.prefNameJs"
        v-model="address.prefJs"
        :name="address.prefNameJs"
        class="w-28 focus:ring-indigo-500 focus:border-indigo-500 block rounded sm:text-sm border-gray-300"
      >
        <option value="都道府県を選択">都道府県を選択</option>
        <option v-for="prefoption in prefArray" :key="prefoption.prefcode" :value="prefoption.prefcode">
          {{ prefoption.prefname }}
        </option>
      </select>
    </div>
    <label for="" class="block mt-3 text-sm font-medium text-gray-700"> 市区町村名 (例：千代田区神田神保町) </label>
    <div class="mt-1 flex rounded-md shadow-sm">
      <input
        :id="address.add1NameJs"
        v-model="address.add1Js"
        type="text"
        :name="address.add1NameJs"
        class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded sm:text-sm border-gray-300"
      />
    </div>
    <span class="mt-2 text-sm text-red-500">(上限200文字)</span>
    <label :for="address.add2NameJs" class="block mt-3 text-sm font-medium text-gray-700">
      番地・ビル名 (例：1-3-5)
    </label>
    <div class="mt-1 flex rounded-md shadow-sm">
      <input
        :id="address.add2NameJs"
        v-model="address.add2Js"
        type="text"
        :name="address.add2NameJs"
        class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded sm:text-sm border-gray-300"
      />
    </div>
    <span class="mt-2 text-sm text-red-500">(上限200文字)</span>
  </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import axios from 'axios';
import jsonpAdapter from 'axios-jsonp';

const props = defineProps({
  hissu: {
    type: Boolean,
    default: false
  },
  addresslabel: {
    type: String,
    default: () => ''
  },
  zip1: {
    type: String,
    default: () => ''
  },
  zip1name: {
    type: String,
    default: () => ''
  },
  zip2: {
    type: String,
    default: () => ''
  },
  zip2name: {
    type: String,
    default: () => ''
  },
  pref: {
    type: Number,
    default: () => null
  },
  prefname: {
    type: String,
    default: () => ''
  },
  add1: {
    type: String,
    default: () => ''
  },
  add1name: {
    type: String,
    default: () => ''
  },
  add2: {
    type: String,
    default: () => ''
  },
  add2name: {
    type: String,
    default: () => ''
  }
});

const address = ref({
  hissuJs: props.hissu,
  addresslabelJs: props.addresslabel,
  zip1Js: props.zip1,
  zip1NameJs: props.zip1name,
  zip2Js: props.zip2,
  zip2NameJs: props.zip2name,
  prefJs: props.pref,
  prefNameJs: props.prefname,
  add1Js: props.add1,
  add1NameJs: props.add1name,
  add2Js: props.add2,
  add2NameJs: props.add2name
});

interface prefData {
  prefcode: number;
  prefname: string;
}
const prefArray = ref<Array<prefData>>();
const errorArray = ref({ zipcode: '' });
function getAddressByZipcode(val1: string, val2: string) {
  const zipcode = val1 + val2;
  const zipstring = String(zipcode);

  if (!zipstring.match(/^[0-9]+$/) || zipstring.length !== 7) {
    errorArray.value.zipcode = '郵便番号を正しく入力して下さい。';
  } else {
    axios
      .get('https://zipcloud.ibsnet.co.jp/api/search?zipcode=' + zipcode, { adapter: jsonpAdapter })
      .then((response) => {
        console.log(response);
        if (response.data.results) {
          address.value.prefJs = response.data.results[0].prefcode;
          address.value.add1Js = response.data.results[0].address2 + response.data.results[0].address3;
        } else {
          errorArray.value.zipcode = '該当する住所が見つかりませんでした。';
        }
      })
      .catch((error) => {
        console.log(error);
      });
  }
}

function getPrefArray() {
  axios.get('/operator/pref').then((response) => {
    prefArray.value = response.data.prefArray;
  });
}
getPrefArray();
</script>
