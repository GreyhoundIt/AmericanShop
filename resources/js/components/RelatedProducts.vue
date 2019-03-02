<template>
    <div>
       <div class="row pt-5" >
           <h3 class="pl-5">Related Products</h3>
       </div>
        <div class="row pt-5 pb-5" >
           <div class="col-md-3 d-flex align-items-stretch" v-for="product in products">
               <div class="card flex-fill">
                   <a :href="`/products/${product.slug}`">
                       <div class="card-body">
                           <h1 class="card-title">{{product.name}}</h1>
                           <img
                                   :src="product.imageurl"
                                   :alt="product.name"
                                   :class="'center-block product-small-img'"
                           />
                      </div>
                   </a>
               </div>
           </div>
        </div>
    </div>
</template>

<script>
     export default {
         name: "RelatedProducts",
         data() {
             return {
                 products: []
             };
         },
         created() {
             $.getJSON(
                     '/products/related/red_arrow',
                     products => { this.products = products}
             );
         }
     }

</script>
<style scoped>
    a {
        color: #B66E14;
        text-decoration: none;
    }

    a:hover, a:focus {
        color: #ffc300;
        text-decoration: underline;
    }
</style>