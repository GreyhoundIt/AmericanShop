<template>
   <div class="col-md-4">
       <div class="product-card">
           <img src="{{ $product->imageurl }}" alt="{{ $product->name }}" class="shake-slow">
           <div class="caption">
               <h3>{{ $product->name}}</h3>
               <p>{{ str_limit($product->description, $limit = 150, $end = '...') }}</p>
               <div class='cta'>
                   <span class="price">{{ $product->presentPrice() }}</span><br>
                   <a href="{{ route('products.show' , $product->id)}}" class="btn btn-primary pull-right" role="button">See More</a>
                   <!-- Check if user is logged in and is an Admin -->
               </div>
           </div>
       </div>
   </div>
</template>

<script>
    export default {
       data() {
            return {
                 body: 'Temporary Message'
            }
        }
    }
</script>
