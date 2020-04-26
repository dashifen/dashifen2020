<template>
    <div class="menu-container">
        <button :title="iconLabel" @click="isMenuOpen = !isMenuOpen" class="toggle" aria-labelledby="menu-toggle-label">
            <span id="menu-toggle-label" aria-live="polite" class="visually-hidden">{{ iconLabel }}</span>
            <font-awesome-icon fixed-width :icon="['fas', icon]"></font-awesome-icon>
        </button>
        <nav class="mobile-menu" :class="menuClass">
        </nav>
    </div>
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
      },

      menuClass () {
        return this.isMenuOpen ? 'menu-open' : 'menu-closed';
      }
    }
  };
</script>

<style lang="scss" scoped>
    @import "assets/styles/framework/variables.scss";

    .mobile-menu {
        background: $gray;
        border-radius: 20px;
        height: 40px;
        width: 40px;
    }

    .toggle {
        background: transparent;
        border-style: none;
        color: #ffffff;
        margin: 9px 0 0 1px;
    }
</style>

