<template>
    <div class="login-container">
        <div class="app-logo">
            <div class="logo-inner">
                levels<br/>out
            </div>
        </div>
        <div class="login-title">
            Login
        </div>
        <div class="app-login">
            <div class="login-inner">
                <form @submit.prevent="submit" class="form login">
                    <div class="form-row">
                        <div class="form-input login-email">
                            <input id="email" type="email" placeholder="email" class="form-control" v-model="formlogin.email" value="" required autofocus>
                        </div>
                    </div>
                    <div class="form-row lessspace">
                        <div class="form-input login-password">
                            <input id="password" type="password" placeholder="password"  class="form-control" v-model="formlogin.password" required>
                        </div>
                    </div>
                    <div class="form-row lessspace">
                        <div class="form-input login-remember">
                            <input class="form-check-input" type="checkbox" v-model="formlogin.remember" id="remember">
                            <span>remember me</span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-input login-submit">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>
                        </div>
                    </div>
                </form>
                <div class="login-alt">
                    <div class="alt-buttons">
                        <inertia-link class="forgot-forgot-button" :href="$page.paths.url+'password/reset'">forgot password?</inertia-link>
                        <inertia-link class="forgot-create-button" :href="$page.paths.url+'/register'">create an account</inertia-link>
                    </div>
                    <span>- or -</span>
                </div>
                <div class="login-social">
                    <div class="social-message">
                        login via Twitter
                    </div>
                    <div class="social-icons">
                        <!-- <div class="social-button twitter">
                            <a href="{{url('/auth/twitter')}}">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                        <br><br><br>
                        <div class="social-button facebook">
                            <a href="{{url('/auth/facebook')}}">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                formlogin: {
                    email: null,
                    password: null,
                    remember: null,
                },
            }
        },
        methods: {
            submit() {
                this.$inertia.post(url()+'/login', this.formlogin)
            },
        },
    }
</script>
