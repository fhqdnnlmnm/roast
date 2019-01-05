<style>

</style>

<template>
  <div id='cafes'>
    <div class="grid-x">
      <div class="large-9 medium-9 small-12 cell">
        <cafe-map></cafe-map>
      </div>
    </div>
  </div>
</template>

<script>
import CafeMap from '../components/cafes/CafeMap.vue';
  export default {
    components:{
      CafeMap
    }
  }
</script>