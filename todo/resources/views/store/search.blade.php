@extends('Layout.main')
@section('search-keyword')
    <section id="search-keyword">
                    <h1>Search Results for <span>{{$keyword}}</span></h1>
                </section><!-- end search-keyword -->

                <hr />
@endsection
@section('content')
        <div id="search-results">
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
        </div>
@endsection