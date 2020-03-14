<template>
    <layout >
        <div class="content-block" id="users">
            <div class="block-header">
                <div class="block-title">Users</div>
            </div>
            <div class="block-body">
                <DataTableUsers />
            </div>
        </div>
    </layout>
</template>

<script>
    import Layout from '../../Layouts/Admin/Layout';
    import DataTableUsers from '../../../Components/Admin/DataTableUsers';
    export default {
        components: {
            Layout,
            DataTableUsers
        },
        props: {
            users: Array
        }
    }
</script>
