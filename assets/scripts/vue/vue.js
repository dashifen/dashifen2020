import Vue from "vue";
import MobileMenu from "./components/mobile-menu.vue";

Vue.config.productionTip = false;

export default {
  initialize() {
    console.log("vue-ing");

    new Vue({
      el: "#vue-root",
      components: {MobileMenu}
    });
  }
}
