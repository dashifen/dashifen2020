import Vue from "vue";
import MainMenu from "./components/main-menu.vue";

Vue.config.productionTip = false;

export default {
  initialize() {
    console.log("vue-ing");

    new Vue({
      el: "#vue-root",
      components: {MainMenu}
    });
  }
}
