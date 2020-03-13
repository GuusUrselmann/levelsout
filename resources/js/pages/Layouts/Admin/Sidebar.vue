<template>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-toggle" id="sidebarToggle">
            <i class="fas fa-arrow-left"></i>
        </div>
        <div class="sidebar-content">
            <div class="sidebar-content" id="smfull">
                <div class="sidebar-logo">
                    <div class="bg-logo" :style="'background-image: url('+$page.paths.asset+'/images/oshi.jpg)'">
                    </div>
                </div>
                <div class="nav-sidebar">
                    <ul class="menu-vertical menu-sidebar">
                        <li class="menu-item">
                            <inertia-link :href="$page.paths.url+'/admin'">
                                <div class="item-title">
                                    <span style="display: block; width: 35px; height: 45px; float: left; text-align: center;"><i class="fas fa-tachometer-alt"></i></span>
                                    <span style="display: block; float: left; padding-left: 10px;">dashboard</span>
                                </div>
                            </inertia-link>
                        </li>
                        <li class="menu-item">
                            <inertia-link :href="$page.paths.url+'/admin/users'">
                                <div class="item-title">
                                    <span style="display: block; width: 35px; height: 45px; float: left; text-align: center;"><i class="fas fa-users"></i></span>
                                    <span style="display: block; float: left; padding-left: 10px;">users</span>
                                </div>
                            </inertia-link>
                            <ul class="submenu">
                                <li class="menu-item">
                                    <inertia-link :href="$page.paths.url+'/admin/users'">
                                        <div class="item-title">
                                            all users
                                        </div>
                                    </inertia-link>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <inertia-link :href="$page.paths.url+'/admin/tasks'">
                                <div class="item-title">
                                    <span style="display: block; width: 35px; height: 45px; float: left; text-align: center;"><i class="fas fa-clipboard"></i></span>
                                    <span style="display: block; float: left; padding-left: 10px;">tasks</span>
                                </div>
                            </inertia-link>
                            <ul class="submenu">
                                <li class="menu-item">
                                    <inertia-link :href="$page.paths.url+'/admin/tasks'">
                                        <div class="item-title">
                                            all tasks
                                        </div>
                                    </inertia-link>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <inertia-link :href="$page.paths.url+'/admin/questions'">
                                <div class="item-title">
                                    <span style="display: block; width: 35px; height: 45px; float: left; text-align: center;"><i class="fas fa-question"></i></span>
                                    <span style="display: block; float: left; padding-left: 10px;">questions</span>
                                </div>
                            </inertia-link>
                            <ul class="submenu">
                                <li class="menu-item">
                                    <inertia-link :href="$page.paths.url+'/admin/questions'">
                                        <div class="item-title">
                                            all questions
                                        </div>
                                    </inertia-link>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
  export default {
  }
</script>
