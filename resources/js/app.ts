require('./bootstrap');

import { createApp } from 'vue';
import ExampleComponent from './components/Sample.vue';

const app = createApp({});
let num = [1, 2, 3];
num = 'fa';
num = true;
// console.log(num);

app.component('SampleComponent', ExampleComponent);
app.mount('#app');
