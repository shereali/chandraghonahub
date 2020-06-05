<template>
    <div id="wrapper">
        <navbar v-if="!(this.$route.fullPath == '/' || this.$route.fullPath == '/registration')"></navbar>
        <div class="content-wrapper">
            <router-view :key="this.$route.fullPath"></router-view>
        </div>
        <footerBottom></footerBottom>
    </div>
</template>

<script>
    export default{
        mounted() {
            console.log(this.$route);

        }

    }
</script>
