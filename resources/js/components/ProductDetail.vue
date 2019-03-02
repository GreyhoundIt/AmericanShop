<template>
   <div class="row">

          <div class="col-md-6">
              <div class="card">
                  <div class="card-body">
                      <h1 class="card-title">{{product.name}}</h1>
                       <img
                           :src="product.imageurl"
                           :alt="product.name"
                           :class="'card-img-top'"
                        />
                </div>
              </div>
          </div>

          <div class="col-md-4">

              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title">{{ product.name  }}</h5>
                      <p class="card-text"> {{ product.description }}</p>
                      <h6 class="card-text">{{ formatPrice(product.price )}}</h6>
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
