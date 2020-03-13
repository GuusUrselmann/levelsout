<template>
    <div class="datatable">
        <div class="datatable-header">
        </div>
        <div class="datatable-body">
            <div class="datatable-content">
                <div class="table-field">
                    <table cellpadding="0" cellspacing="0">
                        <tr v-for="(dataModel, index) in tabledata.dataModels">
                            {{dataModel}}
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="datatable-footer">
        </div>
    </div>
</template>
<script>
    export default {
        props: {
            tabledata: Object
        }
    }
</script>
