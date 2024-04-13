@extends('frontEnd.master')
@section('contents')
    <!--banner area start-->
    <section class="banner_section banner_black black_eight">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-4">
                    <div class="single_banner" data-bgimg="{{asset('frontEnd')}}/assets/img/bg/stray.jpg">
                        <div class="banner_content">
                            <p>Exclusive Offer -20% Off</p>
                            <h2>Stray</h2>
                            <a href="shop.html">Discover Now</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_banner banner_two" data-bgimg="{{asset('frontEnd')}}/assets/img/bg/h.jpg">
                        <div class="banner_content">
                            <p>Exclusive Offer -20% Off</p>
                            <h2>Horizon</h2>
                            <a href="shop.html">Discover Now</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single_banner bottom " data-bgimg="{{asset('frontEnd')}}/assets/img/bg/cod.jpg">
                        <div class="banner_content">
                            <p>Exclusive Offer -20% Off</p>
                            <h2>Call of Duty</h2>
                            <a href="shop.html">Discover Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--banner area end-->
    <!--product section area start-->
    <section class="product_section p_section1 product_black_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_area">
                        <div class="product_tab_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="true">Featured</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#arrivals" role="tab" aria-controls="arrivals" aria-selected="false">Coming Soon</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#onsale" role="tab" aria-controls="onsale" aria-selected="false">On sale</a>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="featured" role="tabpanel">
                                <div class="product_container">
                                    <div class="custom-row product_column3">
                                        @foreach($featurePro as $item)
                                            <div class="custom-col-5">
                                                <div class="single_product">
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img src="{{asset($item->image)}}" alt=""></a>
                                                        {{--<a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product22.jpg" alt=""></a>--}}
                                                        <div class="quick_button">
                                                            <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="more">view more</a>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="tag_cate">
                                                            <a href="#">{{ $item->category_name }}</a>
                                                            <a href="#">{{ $item->subsidiary_name }}</a>
                                                        </div>
                                                        <h3><a href="product-details.html">{{ $item->product_name }}</a></h3>
                                                        <div class="price_box">
                                                            <span class="old_price">{{ $item->product_price }}</span>
                                                            <span class="current_price">{{ $item->discounted_price }}</span>
                                                        </div>
                                                        <div class="product_hover">
                                                            <div class="product_ratings">
                                                                <ul>
                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="product_desc">
                                                                <p>{{ $item->description }}</p>
                                                            </div>
                                                            <div class="action_links">
                                                                <ul>
                                                                    <li><a href="wishlist.html" data-placement="top" title="Add to Wishlist" data-toggle="tooltip"><span class="icon icon-Heart"></span></a></li>
                                                                    <li class="add_to_cart cu-cart">
                                                                        <form action="{{ route('add-cart') }}" method="post">
                                                                            @csrf
                                                                            <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                                            <input type="submit" class="btn btn-outline-primary" value="add to cart">
                                                                        </form>
                                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="arrivals" role="tabpanel">
                                <div class="product_container">
                                    <div class="custom-row product_column3">
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product39.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product38.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" data-placement="top" title="Add to Wishlist" data-toggle="tooltip"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product37.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product36.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Dummy animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product35.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product34.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product34.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product33.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Men,</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product32.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product31.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$75.00</span>
                                                        <span class="current_price">$70.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">Pre-register</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product30.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product29.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Natural Lorem Ipsum</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="Pre-register">Pre-register</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product28.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product27.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="Pre-register">Pre-register</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product26.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product25.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$70.00</span>
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="Pre-register">Pre-register</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product24.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product23.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">men</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="Pre-register">Pre-register</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product25.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product26.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">men</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Natural Contrary</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$55.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="Pre-register">Pre-register</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product27.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product28.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Donec eu furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="Pre-register">Pre-register</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product29.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product30.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Duis pulvinar</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$70.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="Pre-register">Pre-register</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="onsale" role="tabpanel">
                                <div class="product_container">
                                    <div class="custom-row product_column3">
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product30.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product31.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$60.00</span>
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" data-placement="top" title="Add to Wishlist" data-toggle="tooltip"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="Pre-register">Pre-register</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product32.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product33.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Dummy animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$45.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product34.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product35.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product36.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product37.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Men,</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$62.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product38.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product39.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$80.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product30.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product29.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Natural Lorem Ipsum</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product28.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product27.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product26.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product25.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product24.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product23.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">men</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$85.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product35.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product36.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">men</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Natural Contrary</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product37.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product27.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Donec eu furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$70.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product31.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEnd')}}/assets/img/product/product32.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="product-details.html">Duis pulvinar</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--product section area end-->
    <!--banner fullwidth start-->
    <section class="banner_fullwidth black_fullwidth">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="banner_text">
                        <p>Sale Off 20% All Products</p>
                        <h2>New Trending Collection</h2>
                        <span>We Believe That Good Design is Always in Season</span>
                        <a href="shop.html">shopping Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner area end-->
    <!--blog section area start-->
    <section class="blog_section blog_black">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Monsta News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog_wrapper blog_column3 owl-carousel">
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{asset('frontEnd')}}/assets/img/blog/blog4.jpg" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-details.html">Blog image post</a></h3>
                                <div class="author_name">
                                    <p>
                                        <span>by</span>
                                        <span class="themes">admin</span>
                                        / 30 Oct 2018
                                    </p>

                                </div>

                                <div class="post_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                </div>
                                <div class="read_more">
                                    <a href="blog-details.html">Continue reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{asset('frontEnd')}}/assets/img/blog/blog2.jpg" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-details.html">Post with Gallery</a></h3>
                                <div class="author_name">
                                    <p>
                                        <span>by</span>
                                        <span class="themes">admin</span>
                                        / 30 Oct 2018
                                    </p>

                                </div>
                                <div class="post_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                </div>
                                <div class="read_more">
                                    <a href="blog-details.html">Continue reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{asset('frontEnd')}}/assets/img/blog/blog5.jpg" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-details.html">Post with Video</a></h3>
                                <div class="author_name">
                                    <p>
                                        <span>by</span>
                                        <span class="themes">admin</span>
                                        / 30 Oct 2018
                                    </p>

                                </div>
                                <div class="post_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                </div>
                                <div class="read_more">
                                    <a href="blog-details.html">Continue reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{asset('frontEnd')}}/assets/img/blog/blog3.jpg" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-details.html">Maecenas ultricies</a></h3>
                                <div class="author_name">
                                    <p>
                                        <span>by</span>
                                        <span class="themes">admin</span>
                                        / 30 Oct 2018
                                    </p>

                                </div>
                                <div class="post_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                </div>
                                <div class="read_more">
                                    <a href="blog-details.html">Continue reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog section area end-->
    <!--indtagram area start-->
    <div class="instagram_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="instagram_wrapper_new">
                        <div id="instagramFeed"></div>
                        <div class="instagram_btn">
                            <a href="#"><i class="fa fa-instagram"></i> Follow on Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--indtagram area end-->
@endsection
