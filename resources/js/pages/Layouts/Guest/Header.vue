<template>
    <header>
        <div class="header-bar" >
            <div class="header-nav">
                <div class="header-menu" v-click-outside="sidebarClose">
                    <i class="fas fa-bars" id="menu-icon"  v-on:click="sidebarToggle"></i>
                    <div class="menu header" id="sidebar" v-bind:class="{toggled: sidebarToggled}" >
                        <ul class="menu menu-vertical menu-sidebar">
                            <li class="menu-item">
                                <inertia-link :href="$page.paths.url">
                                    <div class="item-title">
                                        <span style="display: block; float: left;">Home</span>
                                    </div>
                                </inertia-link>
                            </li>
                            <li class="menu-item">
                                <inertia-link :href="$page.paths.url+'/about'">
                                    <div class="item-title">
                                        <span style="display: block; float: left;">About</span>
                                    </div>
                                </inertia-link>
                            </li>
                            <li class="menu-item" v-if="$page.user">
                                <a class="dropdown-item" v-on:click.prevent="logout">
                                     <div class="item-title">
                                         <span style="display: block; float: left;">logout</span>
                                     </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-logo">
                    <inertia-link :href="$page.paths.url">
                        LEVELS OUT
                    </inertia-link>
                </div>
                <div class="header-options">
                    <i class="fas fa-cog"></i>
                </div>
            </div>
        </div>
    </header>
</template>
<script>
  export default {
      methods: {
          logout() {
              this.$inertia.post(url()+'/logout')
          },
          sidebarToggle() {
              this.sidebarToggled = this.sidebarToggled ? false : true;
          },
          sidebarClose() {
              if(this.sidebarToggled) {
                  this.sidebarToggled = false;
              }
          }
      },
      data() {
          return {
              sidebarToggled: false

          }
      }
  }
</script>
