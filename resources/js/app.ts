require('./bootstrap');

import { createApp } from 'vue';
import ExampleComponent from './components/Sample.vue';
import TopPage from './pages/customer/TopPage.vue';

const app = createApp({});

app.component('SampleComponent', ExampleComponent);
app.component('TopPage', TopPage);
app.mount('#app');
