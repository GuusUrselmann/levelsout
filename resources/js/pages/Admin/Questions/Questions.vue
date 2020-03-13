<template>
    <layout >
        <pre>
            {{questions}}
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
            questions: Array
        }
    }
</script>
