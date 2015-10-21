@extends('Layout.main')
@section('content')
        <div id="shopping-cart">
                            <h1>Shopping Cart & Checkout</h1>

                            <form action="#" method="post">
                                <table border="1">
                                    <tr>
                                        <th>#</th>
                                        <th>Product Name</th>
                                        <th>Unit Price</th>
                                        <th>Quantity</th>
                                        <th>Subtotal</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <img src="img/main-product.png" alt="Product" width="65" height="37" />
                                            Product Name
                                        </td>
                                        <td>$400</td>
                                        <td>
                                            <input type="text" value="1" maxlength="2" class="qty" />
                                            <a href="#">
                                                <img src="img/refresh.gif" alt="Refresh cart" />
                                            </a>
                                        </td>
                                        <td>
                                            $400
                                            <a href="#">
                                                <img src="img/remove.gif" alt="Remove product" />
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <img src="img/main-product.png" alt="Product" width="65" height="37" />
                                            Product Name
                                        </td>
                                        <td>$400</td>
                                        <td>
                                            <input type="text" value="2" maxlength="2" class="qty" />
                                            <a href="#">
                                                <img src="img/refresh.gif" alt="Refresh cart" />
                                            </a>
                                        </td>
                                        <td>
                                            $800
                                            <a href="#">
                                                <img src="img/remove.gif" alt="Remove product" />
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="total">
                                        <td colspan="5">
                                            Subtotal: $1200<br />
                                            <span>TOTAL: $1200</span><br />

                                            <a href="#" class="tertiary-btn">CONTINUE SHOPPING</a>
                                            <input type="submit" value="CHECKOUT WITH PAYPAL" class="secondary-cart-btn">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div><!-- end shopping-cart -->
@endsection
