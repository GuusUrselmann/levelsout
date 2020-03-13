<template>
    <layout>
        <div class="page-container register background-cover" :style="{backgroundImage: 'url('+$page.paths.asset+'images/backgroundLogin.jpg)'}">
            <div class="container-inner">
                <div class="app-logo-full">
                    <div class="logo-title">
                        LEVELS OUT
                    </div>
                    <div class="logo-description">
                        Lorem ipsum dolor sit amet, tempor aliquam at mauris placerat libero, justo penatibus eu lorem.
                    </div>
                </div>
                <div class="signup-container">
                    <div class="app-logo">
                        <div class="logo-inner">
                            levels<br/>out
                        </div>
                    </div>
                    <div class="signup-title">
                        Sign up
                    </div>
                    <div class="signup-description">
                        It would only take a few steps
                    </div>
                    <div class="app-signup">
                        <div class="signup-inner">
                            <form @submit.prevent="submit" class="form signup">
                                <div class="form-row">
                                    <div class="form-input signup-name">
                                        <input id="name" type="text" placeholder="name" class="form-control" v-model="formregister.name" required autofocus>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-input signup-email">
                                        <input id="email" type="email" placeholder="email" class="form-control" v-model="formregister.email" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-input signup-password">
                                        <input id="password" type="password" placeholder="password" class="form-control" v-model="formregister.password" required>
                                    </div>
                                </div>
                                <div class="form-row lessspace">
                                    <div class="form-input signup-password-confirm">
                                        <input id="password-confirm" type="password" placeholder="confirm password" class="form-control" v-model="formregister.password_confirmation" required>
                                    </div>
                                </div>
                                <div class="form-row lessspace">
                                    <div class="form-input signup-remember">
                                        <input class="form-check-input" type="checkbox" v-model="formregister.remember" id="remember">
                                        <span>remember me</span>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-input signup-submit">
                                        <button type="submit" class="btn btn-primary">
                                            Create my account
                                        </button>
                                    </div>
                                </div>
                                <div class="alt-buttons">
                                    Already have an account?
                                    <inertia-link class="login-button" :href="$page.paths.url+'/login'">Login</inertia-link>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </layout>
</template>
<script>
    import Layout from '../../Layouts/Guest/Layout';
    export default {
        components: {
            Layout
        },
        data() {
            return {
                formregister: {
                    name: null,
                    email: null,
                    password: null,
                    password_confirmation: null,
                    remember: null,
                },
            }
        },
        methods: {
            submit() {
                this.$inertia.post('http://localhost/levelsout/public/register', this.formregister)
            },
        },
    }
</script>
