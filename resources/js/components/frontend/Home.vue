<template>
    <div class="">
        <header-component v-if="this.$route.fullPath == '/'" @clicked="onClickFromNavbar"></header-component>
        <div class="heading" style="background-repeat: no-repeat; background-image: url('public/img/line.png'); background-position: top; background-size: 100%; background-position: center;">
            <div class="section-title">
                <h1>Our Gems</h1>
            </div>
        </div>
        <div v-for="(user, index) in users.userInfo" :key="index">
            <div class="title-wrapper">
                <div class="title">
                    <h2>{{ index }}</h2>
                </div>
            </div>
            <div class="mate-area">
                <div class="container">
                    <div class="row">
                        <div v-for="item in user" class="col-md-3">
                            <div class="user-wrapper">
                                <div class="img-wrapper">
                                    <router-link :to="{ path:'/profile/'+item.id }">
                                        <img :src='url+"/storage/app/public/"+item.profile_photo' alt="">
                                    </router-link>
                                </div>
                                <div class="details-wrapper">
                                    <h5><router-link :to="{ path:'/profile/'+item.id }"> {{ item.name }} </router-link></h5>
                                    <p>Dept. of {{ item.department }}
                                        <br>
                                        Batch- {{ item.batch }}
                                        <br>
                                        {{ item.designation }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                url: document.querySelector("meta[name='site-url']").getAttribute("content"),
                users: {
                    userInfo: {}
                },
            }
        },
        created() {
            this.getUsers()
        },
        methods:{
            getUsers() {
                axios.get(this.url + '/api/front-users')
                .then(response => {
                    this.users = response.data
                    // console.log(this.countries);
                })
            },
            onClickFromNavbar(value){
                this.users = value
            }
        },
        mounted() {
            console.log(this.$route.fullPath)
        }
    }
</script>
