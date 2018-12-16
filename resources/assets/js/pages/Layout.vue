<style>

</style>

<template>
  <div id="app-layout">
    <Navigation></Navigation>
    <router-view></router-view>
  </div>
</template>

<script>
    import Navigation from '../components/global/Navigation.vue';
    export default {
        data:function(){
            return {

            }
        },
        components:{
            Navigation
        },
        created(){
            this.$store.dispatch('loadCafes');
            this.$store.dispatch('loadBrewMethods');
        }
    }
</script>