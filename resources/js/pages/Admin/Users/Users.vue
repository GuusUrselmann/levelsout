<template>
    <layout >
        <DataTable :tabledata="tableData" />
    </layout>
</template>

<script>
    import Layout from '../../Layouts/Admin/Layout';
    import DataTable from '../../../Components/Admin/DataTable';
    export default {
        components: {
            Layout,
            DataTable
        },
        props: {
            users: Array
        },
        data () {
            return {
                tableData: {
                    dataModels: [
                        'hi', 'nigger'
                    ]
                }
            }
        },
    }
</script>
