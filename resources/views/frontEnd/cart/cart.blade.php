@extends('frontEnd.master')
@section('contents')
<div class="shopping_cart_area">
    <div class="container">
        <form action="#">
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="cart_page table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product_thumb">Image</th>
                                    <th class="product_name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product_total">Total</th>
                                    <th class="product_remove">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($carts as $cart)
                                <tr>
                                    <td class="product_thumb"><a href="#"><img src="{{asset('frontEnd')}}/assets/img/s-product/product.jpg" alt=""></a></td>
                                    <td class="product_name"><a href="#">{{ $cart->name }}</a></td>
                                    <td class="product-price">{{ $cart->price }}</td>
                                    <td class="product_quantity">
                                        <form action="{{ route('update-cart') }}" method="post">
                                            @csrf
                                            <input type="number" name="qty" value="{{ $cart->qty }}">
                                            <input type="hidden" name="rowId" value="{{ $cart->rowId }}">
                                            <input type="submit" value="submit">
                                        </form>
                                    </td>
                                    <td class="product_total">{{ $cart->price*$cart->qty }}</td>
                                    <td class="product_remove"><a href="{{ route('delete-cart',['id'=>$cart->rowId]) }}"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area start-->
            <div class="coupon_area">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code left">
                            <h3>Coupon</h3>
                            <div class="coupon_inner">
                                <p>Enter your coupon code if you have one.</p>
                                <input placeholder="Coupon code" type="text">
                                <button type="submit">Apply coupon</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Subtotal</p>
                                    <p class="cart_amount">£215.00</p>
                                </div>
                                <div class="cart_subtotal ">
                                    <p>Shipping</p>
                                    <p class="cart_amount"><span>Flat Rate:</span> £255.00</p>
                                </div>
                                <a href="#">Calculate shipping</a>

                                <div class="cart_subtotal">
                                    <p>Total</p>
                                    <p class="cart_amount">£215.00</p>
                                </div>
                                <div class="checkout_btn">
                                    <a href="#">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area end-->
        </form>
    </div>
</div>
@endsection
