<template>
    <layout >
        <div class="page-container login background-cover" :style="{backgroundImage: 'url('+$page.paths.asset+'images/backgroundLogin.jpg)'}">
            <div class="container-inner">
                <div class="app-logo-full">
                    <div class="logo-title">
                        LEVELS OUT
                    </div>
                    <div class="logo-description">
                        Lorem ipsum dolor sit amet, tempor aliquam at mauris placerat libero, justo penatibus eu lorem.
                    </div>
                </div>
                <Login v-if="!$page.user"/>
                <Profile v-else />
            </div>
        </div>
    </layout>
</template>

<script>
    import Layout from '../../Layouts/Guest/Layout';
    import Login from '../../../Components/Guest/Login';
    import Profile from '../../../Components/Guest/Profile';
    export default {
        components: {
            Layout,
            Login,
            Profile
        },
    }
</script>
