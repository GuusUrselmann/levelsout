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
                <Login />
            </div>
        </div>
    </layout>
</template>

<script>
    import Layout from '../../Layouts/Guest/Layout';
    import Login from '../../../Components/Guest/Login';
    export default {
        components: {
            Layout,
            Login
        },
    }
</script>
