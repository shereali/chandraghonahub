<template>
    <header>
        <div class="header-wrapper" style="background-repeat: no-repeat; background-size: 100% 100%; background-image:url('public/img/background.png')">
            <navbar></navbar>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-title">
                            <h1>“Let’s Have Peace and Unity, Give equal Opportunity”</h1>
                            <p>Stay  with <span>Chandraghonah</span></p>
                        </div>
                        <div class="search-wrapper">
                            <form v-on:submit.prevent>
                                <input v-on:keyup="searchit" ref="search_input" v-model="items['search']" type="text" placeholder="Search your mate..." name="search">
                                <button class="search-btn"  @click="getItemList($event)">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </header>
</template>

<script>
    export default {
        data() {
            return {
                url: document.querySelector("meta[name='site-url']").getAttribute("content"),
                // users: {
                //     userInfo: {}
                // },
                items: {
                    search: ''
                }
            }
        },
        methods:{
            // searchit: _.debounce(() => {
            //     Fire.$emit('searching');
            // },2000),
            searchit(){

            },
            getItemList(event){
                axios.post(this.url + '/api/find-users', this.items)
                    .then(response => {
                        // this.users = response.data

                        this.$emit('clicked', response.data)

                    })
            }
        },
        mounted() {

        },
    }
</script>

<style scoped>

</style>
