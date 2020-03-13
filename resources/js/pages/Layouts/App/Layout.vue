<template>
    <div class="page-wrapper">
        <Header />
        <main>
            <div class="page-content" id="pageContent">
                <div class="page-sections" id="root">
                    <slot />
                </div>
                <footer>
                    <div class="footer-bar">
                        <div class="footer-copyright">
                            LevelsOut copyright {{$page.data.year}}
                        </div>
                    </div>
                </footer>
            </div>
        </main>
    </div>
</template>
<script>
    import Header from './Header';
    export default {
        components: {
            Header
        }
    }
</script>
