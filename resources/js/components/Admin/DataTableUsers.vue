<template>
    <div class="datatable">
        <div class="datatable-header">
            <div class="table-search">
                <input class="search-input" type="text" placeholder="search..." v-on:keyup="tableSetSearch" />
                <div class="search-button" v-on:click="tableSetSearch">
                    <i class="fas fa-search"></i>
                </div>
                <div class="search-fields" v-click-outside="fieldsClose">
                    <div class="fields-select">
                        <div class="select-text" v-on:click="fieldsToggle">
                            search fields <i class="fas fa-sort-down" v-bind:class="{'fa-rotate-180': fieldsToggled}"></i>
                        </div>
                        <div class="select-dropdown" v-bind:class="{toggled: fieldsToggled}">
                            <div class="select-select field"><label><input type="checkbox" id="id" value="id" v-model="table.searchFields" @change="tableSetFields" checked>id</label></div>
                            <div class="select-select field"><label><input type="checkbox" value="name" v-model="table.searchFields" @change="tableSetFields" checked>name</label></div>
                            <div class="select-select field"><label><input type="checkbox" value="description" v-model="table.searchFields" @change="tableSetFields" checked>description</label></div>
                            <div class="select-select field"><label><input type="checkbox" value="email" v-model="table.searchFields" @change="tableSetFields" checked>email</label></div>
                            <div class="select-select field"><label><input type="checkbox" value="userlevel" v-model="table.searchFields" @change="tableSetFields" checked>userlevel</label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-amount" v-click-outside="amountClose">
                <div class="amount-select">
                    <div class="select-text" v-on:click="amountToggle">
                        {{table.amount}} <i class="fas fa-sort-down" v-bind:class="{'fa-rotate-180': amountToggled}"></i>
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
                        <thead>
                            <tr class="table-header">
                                <th class="header-item" style="width: 70px;">id</th>
                                <th class="header-item" style="width: 120px;">name</th>
                                <th class="header-item" style="width: 350px;">description</th>
                                <th class="header-item" style="width: 180px;">email</th>
                                <th class="header-item" style="width: 70px;">level</th>
                                <th class="header-item" style="width: 100px;">userlevel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-datarow" v-for="(data, index) in userData" v-if="userData.length > 0">
                                <td class="data-item id">{{data.id}}</td>
                                <td class="data-item name">{{data.name}}</td>
                                <td class="data-item description" :title="data.description">{{data.description}}</td>
                                <td class="data-item email">{{data.email}}</td>
                                <td class="data-item level">{{data.level.level}}</td>
                                <td class="data-item userlevel">{{data.userlevel}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-empty" v-if="userData.length <= 0">
                    <div class="empty-message">
                        No users found
                    </div>
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
                fieldsToggled: false,
                table: {
                    amount: 0,
                    page: 0,
                    search: '',
                    searchFields: []
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
                this.table.searchFields = ['id','name','description','email','userlevel'];
            },
            getTableData() {
                this.state.isLoading = true;
                axios.post(this.ajaxUrl, {
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    amount: this.table.amount,
                    page: this.table.page,
                    search: this.table.search,
                    searchfields: this.table.searchFields
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
           tableSetFields() {
               console.log(this.table.searchFields);
               this.getTableData();
           },
           tableSetSearch() {
               this.table.search = $(this.$vnode.elm).find(".search-input").val();
               this.getTableData();
           },
           amountToggle() {
               this.amountToggled = this.amountToggled ? false : true;
           },
           amountClose() {
               if(this.amountToggled) {
                   this.amountToggled = false;
               }
           },
           fieldsToggle() {
               this.fieldsToggled = this.fieldsToggled ? false : true;
           },
           fieldsClose() {
               if(this.fieldsToggled) {
                   this.fieldsToggled = false;
               }
           },
           toggleAllFields() {
               if($(this.$vnode.elm).find(".search-fields .field")) {
                   console.log($(this.$vnode.elm).find(".search-fields .field"));
               }
           }
        },
        mounted: function() {
            this.tableInit();
        }
    }
</script>
