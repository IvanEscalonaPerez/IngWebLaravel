import Vue from "vue";
import vuetify from "./plugins/vuetify";
import router from "./router/router";
import App from "./App.vue";
import ApiService from "./plugins/api";

const app = new Vue({
    router,
    vuetify,
    components: { App },
    render: h => h(App)
}).$mount("#app");