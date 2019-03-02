<template>
  <div class="col-md-4">
         <div class="product-card">
             <img
                 :src="product.imageurl"
                 :alt="product.name"
                 :class="'shake-slow'"
               />
             <div class="caption">
                 <h3 v-text="product.name"></h3>
                 <p>{{product.description.substring(0,150) + "..."}}</p>
                 <div class='cta'>
                     <span class="price">{{formatPrice(product.price)}} </span><br>
                     <a :href="`/products/${product.slug}`" class="btn btn-primary pull-right" role="button">See More</a>
                 </div>
             </div>
         </div>
     </div>
</template>

<script>
    export default {
         props: ['product'],

         methods: {
             formatPrice(value) {
               var pounds = value / 100;
               return "£" + pounds.toLocaleString("en-UK", {sytle:"currency", currency:"GBP",  minimumFractionDigits: 2});
             },

         }
     }

</script>
