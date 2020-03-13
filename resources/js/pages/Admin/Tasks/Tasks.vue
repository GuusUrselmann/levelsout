<template>
    <layout >
        <pre>
            {{tasks}}
        </pre>
    </layout>
</template>

<script>
    import Layout from '../../Layouts/Admin/Layout';
    export default {
        components: {
            Layout
        },
        props: {
            tasks: Array
        }
    }
</script>
