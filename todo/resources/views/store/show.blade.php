@extends('Layout.main')
 @section('view')


                 <div id="product-image">
                     <img src="{{asset('img/main-product.png')}}" alt="Product">
                 </div><!-- end product-image -->
                 <div id="product-details">
                     <h1>{{$product->title}}</h1>
                    <p>{{$product->description}}</p>

                     <hr />

                     <form action="#" method="post">
                         <label for="qty">Qty:</label>
                         <input type="text" id="qty" name="qty" value="1" maxlength="2">

                         <button type="submit" class="secondary-cart-btn">
                             <img src="{{asset('img/white-cart.gif')}}" alt="Add to Cart" />
                              ADD TO CART
                         </button>
                     </form>
                 </div><!-- end product-details -->
                 <div id="product-info">
                     <p class="price">{{$product->price}}</p>
                     <p>Availability: <span>{{$product->availability}}</span></p>
                     <p>Product Code: <span>{{$product->id}}</span></p>
                 </div><!-- end product-info -->
   @endsection