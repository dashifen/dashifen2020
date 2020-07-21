<template>
    <header class="menu" :class="menuClass">
        <button :title="iconLabel" @click="isMenuOpen = !isMenuOpen" class="menu__toggle" aria-labelledby="menu-toggle-label">
            <span id="menu-toggle-label" aria-live="polite" class="visually-hidden">{{ iconLabel }}</span>
            <font-awesome-icon fixed-width :icon="['fas', 'angle-double-right']"></font-awesome-icon>
        </button>
        <nav>
            <ul class="menu__items" aria-label="Main Menu">
                <li class="menu__item"><a href="#">About</a></li>
                <li class="menu__item"><a href="#">Technology</a></li>
                <li class="menu__item"><a href="#">Spirituality</a></li>
                <li class="menu__item"><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
</template>

<script>
  import {library} from "@fortawesome/fontawesome-svg-core";
  import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";
  import {faAngleDoubleRight} from "@fortawesome/pro-solid-svg-icons";

  library.add(faAngleDoubleRight);

  export default {
    name: "main-menu",
    components: {FontAwesomeIcon},

    data () {
      return {
        isMenuOpen: false
      };
    },

    computed: {
      iconLabel () {
        return this.isMenuOpen ? 'Close Menu' : 'Open Menu';
      },

      menuClass () {
        return this.isMenuOpen ? 'menu--state-open' : 'menu--state-closed';
      }
    }
  };
</script>

<style lang="scss" scoped>
    @import "assets/styles/framework/variables.scss";

    .menu__toggle {
        background-color: transparent;
        border-style: none;
        outline: transparent;
        transition: transform 500ms ease-in-out;
    }

    .menu--state-open .menu__toggle {
        transform: rotate(180deg);
    }




</style>

