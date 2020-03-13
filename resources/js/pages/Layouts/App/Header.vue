<template>
    <header>
        <div class="header-bar" >
            <div class="header-nav">
                <div class="header-menu" v-click-outside="sidebarClose">
                    <i class="fas fa-bars" id="menu-icon"  v-on:click="sidebarToggle"></i>
                    <div class="menu header" id="sidebar" v-bind:class="{toggled: sidebarToggled}" >
                        <ul class="menu menu-vertical menu-sidebar">
                            <li class="menu-item" v-if="isAdmin($page.user)">
                                <a class="dropdown-item" :href="$page.paths.url+'/admin'">
                                     <div class="item-title">
                                         <span style="display: block; float: left;">admin</span>
                                     </div>
                                </a>
                            </li>
                            <li class="menu-item" v-if="$page.user">
                                <a class="dropdown-item button button-orange" v-on:click.prevent="logout">
                                     <div class="item-title">
                                         <span style="display: block; float: left;">logout</span>
                                     </div>
                                </a>
                                <form id="logout-form" :action="$page.paths.url+'/logout'" method="POST" style="display: none;">
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-logo">
                    <a :href="$page.paths.url">
                        LEVELS OUT
                    </a>
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
              document.getElementById('logout-form').submit();
          },
          sidebarToggle() {
              this.sidebarToggled = this.sidebarToggled ? false : true;
          },
          sidebarClose() {
              if(this.sidebarToggled) {
                  this.sidebarToggled = false;
              }
          },
          isAdmin(user) {
              if(user.userlevel == 'admin' || user.userlevel == 'owner') {
                  return true;
              }
              return false;
          }
      },
      data() {
          return {
              sidebarToggled: false

          }
      }
  }
</script>
