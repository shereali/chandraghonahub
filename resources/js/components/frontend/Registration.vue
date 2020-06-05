<template>
    <section class="registration-page" style="background-image: url('public/frontend/img/registration-bg.png') ">
        <div class="container-fluid">
            <navbar></navbar>
            <div class="row justify-content-center p-5">
                <div class="col-md-6">
                    <div class="title text-center">
                        <h2>Registration</h2>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div v-if="message" class="alert alert-success">
                            <span>{{ message }} </span>
                            </div>
                            <div class="card-title">
                                <h1>Get registered</h1>
                            </div>
                            <form @submit.prevent="formSubmit" action="">
                                <div class="personal-information heading">
                                    <h2>Personal Information</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Full Name<sup class="text-danger">*</sup></label>
                                            <input v-model="formData.name" type="text" class="form-control">
                                            <div v-if="errors.name" class="text-danger">
                                                {{ errors.name[0] }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Age<sup class="text-danger">*</sup></label>
                                            <input v-model="formData.age" type="text" class="form-control">
                                            <div v-if="errors.age" class="text-danger">
                                                {{ errors.age[0] }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Mobile Number<sup class="text-danger">*</sup></label>
                                            <input v-model="formData.mobile_number" type="text" class="form-control">
                                            <div v-if="errors.mobile_number" class="text-danger">
                                                {{ errors.mobile_number[0] }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Email Address<sup class="text-danger">*</sup></label>
                                            <input v-model="formData.email" type="text" class="form-control">
                                            <div v-if="errors.email" class="text-danger">
                                                {{ errors.email[0] }}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input id="password" type="password" class="form-control"
                                                v-model="formData.password" required autocomplete="new-password">
                                            <div v-if="errors.password" class="text-danger">
                                                {{ errors.password[0] }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Confirm Password</label>
                                            <input id="password-confirm" type="password" class="form-control"
                                                v-model="formData.password_confirmation" required
                                                autocomplete="new-password">

                                        </div>

                                    </div> -->
                                    <div class="col-md-6">
                                        <label for="">Gender<sup class="text-danger">*</sup></label>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input id="male" v-model="formData.gender" :value="1" name="gender" type="radio" class="">
                                                    <label for="male">Male</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <input id="female" v-model="formData.gender" :value="2" name="gender" type="radio" class="">
                                                <label for="female">Female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Image<sup class="text-danger">*</sup></label>
                                        <div v-if="!image">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <!-- <span class="input-group-text" id="inputGroupFileAddon01">Upload</span> -->
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" ref="file" @change="onFileChange"
                                                           class="custom-file-input" id="inputGroupFile01"
                                                           aria-describedby="inputGroupFileAddon01">
                                                    <label class="custom-file-label" for="inputGroupFile01">Upload Your
                                                        Photo</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div v-else>
                                            <img width="150" :src="image" />
                                            <button class="btn btn-sm btn-danger" @click="removeImage">Remove image <i
                                                class="fa fa-times"></i></button>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div v-if="errors.gender" class="text-danger">
                                                {{ errors.gender[0] }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div v-if="errors.photo" class="text-danger">
                                            {{ errors.photo[0] }}
                                        </div>
                                    </div>
                                </div>
                                <div class="educational-infromation heading">
                                    <h2>Education Information</h2>
                                </div>
                                <div class="institute">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="title">
                                                <h4>Institute</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <input id="ins_1" v-model="formData.institute_1" :value="1" type="checkbox" class="">
                                            <label for="ins_1">K.P.M High School & College</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input id="ins_2" v-model="formData.institute_2" :value="2" type="checkbox" class="">
                                            <label for="ins_2">K.R.C High School</label>
                                        </div>
                                        <div class="col-md-4">

                                        </div>
                                        <div class="col-md-4">
                                            <input id="ins_3" v-model="formData.institute_3" :value="3" type="checkbox" class="">
                                            <label for="ins_3">Karnaphuli Sheshu Beddaloy</label>


                                        </div>
                                        <div class="col-md-4">
                                            <input id="ins_4" v-model="formData.institute_4" :value="4" type="checkbox" class="">
                                            <label for="ins_4">Karnaphuli College</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input id="ins_5" v-model="formData.institute_5" :value="5" type="checkbox" class="">
                                            <label for="ins_5">Chittagong University</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Department<sup class="text-danger">*</sup></label>
                                            <input v-model="formData.department" type="text" class="form-control">
                                            <div v-if="errors.department" class="text-danger">
                                                {{ errors.department[0] }}
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Batch</label>
                                            <input v-model="formData.batch" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Passing Year</label>
                                            <input v-model="formData.passing_year" type="text" class="form-control">
                                            <div v-if="errors.passing_year" class="text-danger">
                                                {{ errors.passing_year[0] }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>
                                <div class="professional-information heading">
                                    <h2>Professional Information</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Designation</label>
                                            <input v-model="formData.designation" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Country</label>
                                            <!-- <input v-model="formData.country" type="text" class="form-control"> -->
                                            <select v-model="formData.country_id" id="" @change="getCityList($event)"
                                                    class="form-control">
                                                <option v-for="(country, countryIndex) in countries" :key="countryIndex"
                                                        :value="country.id">{{ country.country_name}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">City</label>
                                            <select v-model="formData.city_id" class="form-control">
                                                <option v-for="(city, cityIndex) in cities" :key="cityIndex"
                                                        :value="city.id">{{ city.city_name }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6"></div>
                                </div>
                                <div class="address heading">
                                    <h2>Address</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Present Address</label>
                                            <input v-model="formData.present_address" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Permanent Address</label>
                                            <input v-model="formData.permanent_address" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Chandraghona Living Area<sup class="text-danger">*</sup></label>
                                            <input v-model="formData.chandraghona_living_area" type="text"
                                                   class="form-control">
                                            <div v-if="errors.chandraghona_living_area" class="text-danger">
                                                {{ errors.chandraghona_living_area[0] }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="submit-btn">
                                            <button @click.prevent="storeData()" type="submit"
                                                    class="form-control">Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
    export default {
        data() {
            return {
                url: document.querySelector("meta[name='site-url']").getAttribute("content"),
                formData: {},
                countries: [],
                cities: [],
                image: '',
                message: '',
                errors: ''
            }
        },
        created() {

            this.getCountryList()

        },
        methods: {
            getCountryList() {
                axios.get(this.url + '/api/country-list')
                    .then(response => {
                        // console.log(response.data.country_list.name);
                        this.countries = response.data.country_list
                        // console.log(this.countries);


                    })
            },
            getCityList() {
                console.log(event.target.value)
                let country_id = event.target.value;

                axios.get(this.url + '/api/city-list/' + country_id)
                    .then(response => {
                        // console.log(response.data.city_list.name);
                        this.cities = response.data.city_list;


                    })
            },

            // handleFileUpload(){
            //     this.file = this.$refs.file.files[0].name;
            //     this.formData.photo = this.file


            // },

            onFileChange(e) {
                var files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);

            },

            createImage(file) {
                var image = new Image();
                var reader = new FileReader();
                var vm = this;

                reader.onload = (e) => {
                    vm.image = e.target.result;
                    this.formData.photo = vm.image;

                };
                reader.readAsDataURL(file);
            },

            removeImage: function (e) {
                this.image = '';
                this.formData.photo = ''
            },

            storeData() {
                axios.post(this.url + '/api/registration',
                        this.formData).then(response => {
                        console.log(response);
                        if (response.data.success == true) {
                            this.message = response.data.message
                            this.resetData();
                            this.formSubmit();
                        }

                    })
                    .catch(error => {
                        if (error.response.status == 422) {
                            this.errors = error.response.data.errors;
                        }
                    })
                //    .finally(() => this.formSubmit())
            },

            formSubmit(event) {
                event.target.reset();
            },
            resetData(){
                this.formData = {};
                this.countries= [];
                this.cities= [];
            }
        },
        mounted() {
            console.log(window.location.hostname);

        }
    }

</script>
