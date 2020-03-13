
<template>
    <div class="page-wrapper">
        <header>
            <div class="header-bar">
                <div class="nav-global">
                    <ul class="menu-vertical menu-global">
                        <li class="menu-item">
                            <inertia-link :href="$page.paths.url + '/admin/dashboard'">
                                <div class="item-title">
                                    Platform <i class="fas fa-caret-down"></i>
                                </div>
                            </inertia-link>
                            <ul class="submenu">
                                <li class="menu-item">
                                    <a :href="$page.paths.url">
                                        <div class="item-title">
                                            Home
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <ul class="submenu">
                                <li class="menu-item">
                                    <a :href="$page.paths.url+'/app'">
                                        <div class="item-title">
                                            App
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <ul class="submenu">
                                <li class="menu-item">
                                    <a v-on:click.prevent="logout">
                                        <div class="item-title">
                                            Logout
                                        </div>
                                    </a>
                                    <form id="logout-form" :action="$page.paths.url+'/logout'" method="POST" style="display: none;">
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="user-welcome">
                    Welcome, {{$page.user.name}}
                </div>
            </div>
        </header>
        <main>
            <sidebar />
            <div class="page-content" id="pageContent">
                <div class="page-sections" id="root">
                    <slot />
                </div>
                <footer>
                    <div class="footer-content">
                    </div>
                    <div class="footer-copyright">
                    </div>
                </footer>
            </div>
        </main>
    </div>
</template>

<script>
    import Sidebar from './Sidebar';
    export default {
        methods: {
            logout() {
                document.getElementById('logout-form').submit();
            },
        },
        components: {
            Sidebar
        }
    }
</script>
