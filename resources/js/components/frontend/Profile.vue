<template>
    <!-- Page Container -->
    <div class="container">

        <!-- The Grid -->
        <div class="row mt-5 mb-4">

            <!-- Left Column -->
            <div class="col-md-4">
                <div class="card">
                    <div class="w3-display-container">
                        <img style="width: 100%; height: 300px; object-fit: cover;" :src='url+"/storage/app/public/"+users.userinfo.profile_photo' alt="">
                        <div class="w3-display-bottomleft p-3 w3-text-black">
                            <h2>{{ users.userinfo.name }}</h2>
                        </div>
                    </div>
                    <div class="p-3">
                        <p><i class="fa fa-certificate font-color pr-2 font-18" aria-hidden="true"></i>Batch {{ users.userinfo.batch }}</p>
                        <p><i class="fa fa-briefcase font-color pr-2 font-18"></i>{{ users.userinfo.designation }}</p>
                        <p><i class="fa fa-envelope font-color pr-2 font-18"></i>{{ users.userinfo.email }}</p>
                        <p><i class="fa fa-phone font-color pr-2 font-18"></i>{{ users.userinfo.mobile_number }}</p>
                    </div>
                </div><br>
                <!-- End Left Column -->
            </div>

            <!-- Right Column -->
            <div class="col-md-8">
                <div class="card p-4">
                    <div class="w3-container">
                        <h5 v-for="inst in users.institutes"><i class="fa fa-university font-color pr-2"></i> {{ inst }}</h5>
                        <p>&nbsp;</p>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><i class="fa fa-graduation-cap font-color pr-2" aria-hidden="true"></i>
                            <b>Department: </b> {{ users.userinfo.department }}</h5>
                        <h5 class="w3-opacity"><i class="fa fa-certificate font-color pr-2" aria-hidden="true"></i>
                            <b>Passing year: </b> {{ users.userinfo.passing_year }}</h5>
                        <h5 class="w3-opacity"><i class="fa fa-transgender-alt font-color pr-2"></i> <b>Gender: </b> {{ users.userinfo.gender==1? 'Male' : 'Female'  }}</h5>
                        <p>&nbsp;</p>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><i class="fa fa-map-marker font-color pr-2"></i><b>Chandraghona Living Area</b></h5>
                        <p class="pl-30">{{ users.userinfo.chandraghona_living_area }}</p><br>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><i class="fa fa-map-marker font-color pr-2"></i><b>Present Address</b></h5>
                        <p class="pl-30">{{ users.userinfo.present_address }}</p><br>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><i class="fa fa-map-marker font-color pr-2"></i><b>Permanent Address</b></h5>
                        <p class="pl-30">{{ users.userinfo.permanent_address }}</p>
                    </div>
                </div>
                <!-- End Right Column -->
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Page Container -->
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
                axios.get(this.url + '/api/front-users/'+ this.$route.params.user_id)
                    .then(response => {
                        this.users = response.data
                        console.log(this.users);
                    })
            },
        },
        mounted() {
            console.log(this.$route.fullPath)
        }
    }
</script>

