<template>
    <div class="profile-container">
        <div class="app-logo">
            <div class="logo-inner">
                levels<br/>out
            </div>
        </div>
        <div class="profile-title">
            Welcome {{$page.user.name}}
        </div>
        <div class="app-profile">
            <div class="profile-inner">
                <div class="profile-info">
                    <div class="info-app">
                        <a :href="$page.paths.url+'/app'" class="button button-orange app-button">
                            <div class="button-inner">
                                MY ACCOUNT
                            </div>
                        </a>
                    </div>
                    <div class="info-level">
                        <div class="level-inner">
                            <div class="level-userlevel">
                                LVL {{$page.user.level}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
    }
</script>
