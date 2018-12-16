<style>

</style>

<template>
  <div id='cafes'>
    <div class="grid-x">
      <div class="large-9 medium-9 small-12 cell">
        <cafe-map></cafe-map>
      </div>
    </div>
    <ul>
          <li v-for="cafe in cafes" :key=cafe.id>{{ cafe.address }}</li>
      </ul>

  </div>
</template>

<script>
import CafeMap from '../components/cafes/CafeMap.vue';
  export default {
    components:{
      CafeMap
    },
    mounted(){
      this.buildMarkers();
    },
    data(){
      return{
        markers:[],
      }
    },
    computed:{
      cafes(){
        return this.$store.getters.getCafes;
      }
    },
    methods:{
      buildMarkers(){
        this.markers=[];
        for(var i=0;i<this.cafes.length;i++){
          var marker=new AMap.Marker({
            position: AMap.LngLat(parseFloat(this.cafes[i].latitude), parseFloat(this.cafes[i].longitude)),
            title: this.cafes[i].name
          });
          this.markers.push(marker);
        }
        // this.map.add(this.markers);
      }
    }
  }
</script>