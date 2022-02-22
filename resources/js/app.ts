require('./bootstrap');

import { createApp } from 'vue';
import ExampleComponent from './components/Sample.vue';

const app = createApp({});

app.component('SampleComponent', ExampleComponent);
app.mount('#app');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
