<template>
    <layout >
        <pre>
            {{users}}
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
            users: Array
        }
    }
</script>
