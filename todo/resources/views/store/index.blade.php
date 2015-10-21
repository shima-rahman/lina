 @extends('Layout\main')

 @section('promo')
  <section id="promo">
                 <div id="promo-details">
                     <h1>Today's Deals</h1>
                     <p>Checkout this section of<br />
                      products at a discounted price.</p>
                     <a href="#" class="default-btn">Shop Now</a>
                 </div><!-- end promo-details -->
                 <img src="img/promo.png" alt="Promotional Ad">
             </section><!-- promo -->
  @endsection
  @section('content')

                         <h2>New Product</h2>
                         <hr>
                         @foreach($products as $product)
                         <div id="products">
                             <div class="product">
                                 <a href="store\{{$product->id}}"><img src="{{asset('img/product.gif')}}" width="240" height="127" class="feature"/></a>

                                 <h3><a href="store\{{$product->id}}">{{$product->title}}</a></h3>

                                 <p>{{$product->description}}</p>

                                 <h5>Availability: <span class="instock">{{$product->availability}}</span></h5>

                                 <p>
                                     <a href="#" class="cart-btn">
                                         <span class="price">{{$product->price}}</span>
                                          <img src="img/white-cart.gif" alt="Add to Cart">
                                           ADD TO CART
                                     </a>
                                 </p>
                                 </div>
                                 </div>
                       @endforeach
  @endsection