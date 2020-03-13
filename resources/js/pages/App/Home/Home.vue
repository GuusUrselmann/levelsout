<template>
    <layout >
        <div class="block profile">
            <div class="profile-info">
                <div class="info-image">
                    <div class="image-inner background-cover"  :style="'background-image: url('+$page.paths.asset+'images/oshi.jpg)'">
                    </div>
                </div>
                <div class="info">
                    <div class="info-name">
                        {{$page.user.name}}
                    </div>
                    <div class="info-description">
                        {{$page.user.description}}
                    </div>
                </div>
            </div>
            <div class="profile-levels">
                <div class="level-container" v-for="(level, index) in levels" :key="level.id">
                    <div class="level-top">
                        {{index==0?'LEVEL ':''}}{{level.level}}
                    </div>
                    <div class="level-bar" v-bind:class="{complete: $page.user.level>level.level}">
                    </div>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
    import Layout from '../../Layouts/App/Layout';
    export default {
        components: {
            Layout
        },
        props: {
          levels: Array,
        },
    }
</script>
