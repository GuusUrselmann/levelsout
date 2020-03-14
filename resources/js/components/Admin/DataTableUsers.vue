<template>
    <div class="datatable">
        <div class="datatable-header">
            <div class="table-search">
                <input type="text" placeholder="search..." />
                <div class="search-button">
                    <i class="fas fa-search"></i>
                </div>
            </div>
            <div class="table-amount" v-click-outside="amountClose">
                <div class="amount-select">
                    <div class="select-text" v-on:click="amountToggle">
                        {{table.amount}} <i class="fas fa-sort-down" v-if="!amountToggled"></i><i class="fas fa-sort-up" v-else></i>
                    </div>
                    <div class="select-dropdown" v-bind:class="{toggled: amountToggled}">
                        <div class="select-select" v-on:click="tableSetAmount(10)">10</div>
                        <div class="select-select" v-on:click="tableSetAmount(25)">25</div>
                        <div class="select-select" v-on:click="tableSetAmount(50)">50</div>
                        <div class="select-select" v-on:click="tableSetAmount(100)">100</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="datatable-body">
            <div class="datatable-content">
                <div class="table-field">
                    <table cellpadding="0" cellspacing="0">
                        <tr class="table-header">
                            <th class="header-item" style="width: 70px;">id</th>
                            <th class="header-item" style="width: 120px;">name</th>
                            <th class="header-item" style="width: 350px;">description</th>
                            <th class="header-item" style="width: 180px;">email</th>
                            <th class="header-item" style="width: 70px;">level</th>
                            <th class="header-item" style="width: 100px;">userlevel</th>
                        </tr>
                        <tr class="table-datarow" v-for="(data, index) in userData">
                            <td class="data-item id">{{data.id}}</td>
                            <td class="data-item name">{{data.name}}</td>
                            <td class="data-item description" :title="data.description">{{data.description}}</td>
                            <td class="data-item email">{{data.email}}</td>
                            <td class="data-item level">{{data.level.level}}</td>
                            <td class="data-item userlevel">{{data.userlevel}}</td>
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
        },
        data() {
            return {
                ajaxUrl: url()+'/api/datatables/users',
                userData: Object,
                amountToggled: false,
                table: {
                    amount: 0,
                    page: 0
                },
                state: {
                    isLoading: false
                }
            }
        },
        methods: {
            tableInit() {
                this.setTableSettings();
                this.getTableData();
            },
            setTableSettings() {
                this.table.amount = 25;
                this.table.page = 1;
            },
            getTableData() {
                this.state.isLoading = true;
                axios.post(this.ajaxUrl, {
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    amount: this.table.amount,
                    page: this.table.page
                })
                .then(response => {
                    this.userData = response.data.data;
                    this.state.isLoading = false;
                })
                .catch(error => {
                    console.log(error);
               });
           },
           tableSetAmount(amount) {
               this.table.amount = amount;
               this.amountClose();
               this.getTableData();
           },
           amountToggle() {
               this.amountToggled = this.amountToggled ? false : true;
           },
           amountClose() {
               if(this.amountToggled) {
                   this.amountToggled = false;
               }
           }
        },
        mounted: function() {
            this.tableInit();
        }
    }
</script>
