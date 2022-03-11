<template>
  <div>hi</div>
</template>
<script lang="ts">
// import { defineComponent } from 'vue';

export default {
  //   setup() {}
  props: {
    lawzip1: {
      type: String,
      default: () => null
    },
    lawzip2: {
      type: String,
      default: () => null
    },
    lawpref: {
      type: String,
      default: () => ''
    },
    lawaddr1: {
      type: String,
      default: () => ''
    }
  },
  data() {
    return {};
  },
  created() {
    console.log(this.lawzip1);
    console.log(this.lawzip2);
    console.log(this.lawpref);
    console.log(this.lawaddr1);
  },
  methods: {}
};
</script>
