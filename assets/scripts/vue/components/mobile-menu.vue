<template>
    <nav class="mobile-menu">
        <button :title="iconLabel" @click="isMenuOpen = !isMenuOpen" aria-labelledby="menu-toggle-label">
            <span id="menu-toggle-label" aria-live="polite" class="visually-hidden">{{ iconLabel }}</span>
            <font-awesome-icon fixed-width :icon="['fas', icon]"></font-awesome-icon>
        </button>
    </nav>
</template>

<script>
  import {library} from "@fortawesome/fontawesome-svg-core";
  import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";
  import {faBars, faTimes} from "@fortawesome/pro-solid-svg-icons";

  library.add(faTimes, faBars);

  export default {
    name: "menu-toggle",
    components: {FontAwesomeIcon},

    data () {
      return {
        isMenuOpen: false
      };
    },

    computed: {
      icon () {
        return this.isMenuOpen ? 'times' : 'bars';
      },

      iconLabel () {
        return this.isMenuOpen ? 'Close Menu' : 'Open Menu';
      }
    }
  };
</script>

<style scoped>

</style>
