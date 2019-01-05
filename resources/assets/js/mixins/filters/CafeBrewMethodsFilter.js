export const CafeBrewMethodsFilter ={
    methods:{
        processCafeBrewMethodsFilter(cafe,brewMethods){
            if(brewMethods.length>0){
                var cafeBrewMethods=[];
                for(var i=0;i< cafe.brewMethods.length;i++){
                    cafeBrewMethods.push(cafe.brewMethods[i].method);
                }

                for(var i=0;i<brewMethods.length;i++){
                    if(cafeBrewMethods.indexOf(brewMethods[i])>-1){
                        return true;
                    }else{
                        return false;
                    }
                }
            }else{
                return true;
            }
        }
    }
}