<style>

</style>

<template>
  <div id="app-layout">
    <Navigation></Navigation>
    <router-view></router-view>
    <login-modal></login-modal>
  </div>
</template>

<script>
    import Navigation from '../components/global/Navigation.vue';
    import LoginModal from '../components/global/LoginModal.vue';
    export default {
        data:function(){
            return {

            }
        },
        components:{
            Navigation,
            LoginModal
        },
        created(){
            this.$store.dispatch('loadCafes');
            this.$store.dispatch('loadBrewMethods');
        }
    }
</script>