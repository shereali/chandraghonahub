<template>
<div>

<div class="container-fluid">
    
   <center>
       <div class="container">
           <div class="row">
               <div class="col-md-12">
                   <div class="image-item" :style="mt5">
                       <ul>
                           
                               <li><a href=""><img :src="'public/frontend/gallery/1.jpg'" alt=""></a></li>
                               <li><a href=""><img :src="'public/frontend/gallery/2.jpg'" alt=""></a></li>
                               <li><a href=""><img :src="'public/frontend/gallery/3.jpg'" alt=""></a></li>
                               <li><a href=""><img :src="'public/frontend/gallery/4.jpg'" alt=""></a></li>
                               <li><a href=""><img :src="'public/frontend/gallery/5.jpg'" alt=""></a></li>
                               <li><a href=""><img :src="'public/frontend/gallery/6.jpg'" alt=""></a></li>
                               <li><a href=""><img :src="'public/frontend/gallery/7.jpg'" alt=""></a></li>
                               <li><a href=""><img :src="'public/frontend/gallery/8.jpg'" alt=""></a></li>
                               <li><a href=""><img :src="'public/frontend/gallery/9.jpg'" alt=""></a></li>
                               <li><a href=""><img :src="'public/frontend/gallery/10.jpg'" alt=""></a></li>
                               <li><a href=""><img :src="'public/frontend/gallery/11.jpg'" alt=""></a></li>
                               <li><a href=""><img :src="'public/frontend/gallery/12.jpg'" alt=""></a></li>
                               <li><a href=""><img :src="'public/frontend/gallery/13.jpg'" alt=""></a></li>
                               <li><a href=""><img :src="'public/frontend/gallery/14.jpg'" alt=""></a></li>
                          
                       </ul>
                   </div>
               </div>
           </div>
       </div>
   </center>
    
</div>
</div>   
</template>

<script>
export default {
    data(){
        return {
            width:'width:32%',
            mt5:'margin-top:5%',
            list_style:'list-style:none',
            display:'inline-block',
        }
    },
    mounted(){
       
        
    },
    created(){
        
       

        $('.image-item ul li').mouseover(function() {
           $(this).css({'transform' : 'rotate(60deg)'});
        });
    },

    methods:{

      
        
    }
}
</script>

<style>
.image-item ul li{
   display: inline-block;
    width: 31%;
    height: 211px;
    overflow: hidden;
}
</style>