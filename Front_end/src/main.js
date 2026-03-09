import { createApp } from "vue";
import App from "./App.vue";
import router from "./Router/router";
import "@/assets/scss/main.scss";
import {createPinia} from "pinia";

const app = createApp(App);
const pinia = createPinia();

app.use(router);
app.use(pinia);


app.mount("#app");