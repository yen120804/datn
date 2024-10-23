@extends('layout')
@section('titlepage',' Products')
@section('content')
<section class="page_banner">
            <div class="layer_img move_anim animated">
                <img src="makeover/images/bg/page_layer.png" alt=""/>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 offset-lg-1">
                        <h2 class="banner-title">Products</h2>
                        <p class="breadcrumbs"><a href="index.html">Home</a><span>/</span>Products</p>
                    </div>
                    <div class="col-lg-6 animated pnl">
                        <div class="page_layer">
                            <img src="makeover/images/bg/banner_layer.png" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End:: Banner Section -->

        <!-- Begin:: Products Section -->
        <section class="shopPage">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row shop_sort_count_row">
                            <div class="col-md-7">
                                <p class="woocommerce-result-count">Showing 1–12 of 36 results</p>
                            </div>
                            <div class="col-md-5 text-right">
                                <form class="woocommerce-ordering" method="get">
                                    <select name="orderby" class="orderby" aria-label="Shop order">
                                        <option value="menu_order" selected="selected">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by latest</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                        @foreach ($allProducts as $item)
                            <div class="col-lg-4 col-md-6">
                                <div class="product_item text-center">
                                    <div class="pi_thumb">
                                    <img src="{{ asset('upload/' . $item->image) }}" alt="" class="img-fluid" style="width: 300px; height: 200px; object-fit: cover;"/>

                                        <div class="pi_01_actions">
                                            <a href="cart.html"><i class="icofont-cart-alt"></i></a>
                                            <a href="single-product.html"><i class="icofont-eye"></i></a>
                                        </div>
                                        <div class="prLabels">
                                            <p class="justin">New</p>
                                        </div>
                                    </div>
                                    <div class="pi_content">
                                        <p><a href="shop.html">Cosmetics</a></p>
                                        <h3><a href="single-product.html">{{ $item->name }}</a></h3>
                                        <div class="product_price clearfix">
                                            <span class="price">{{ number_format($item->price, 0, ',', '.') }} VNĐ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="make_pagination text-center">
                                    <span class="current">1</span>
                                    <a href="shop2.html">2</a>
                                    <a href="shop2.html">3</a>
                                    <a class="next" href="shop2.html"><i class="icofont-simple-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sidebar">
                            <div class="widget">
                                <h3 class="widget_title">Category</h3>
                                <select name="category">
                                    <option value="1">Select Category</option>
                                    <option value="2">Cosmetics</option>
                                    <option value="3">Bath Set</option>
                                    <option value="4">Design</option>
                                    <option value="5">Makeup</option>
                                </select>
                            </div>
                            <aside class="widget">
                                <h3 class="widget_title">Filter by price</h3>
                                <div class="price_slider_wrapper">
                                    <form action="#" method="get" class="clearfix">
                                        <div class="price_wrap">
                                            <label>Range:</label>
                                            <p id="amount"></p>
                                        </div>
                                        <div id="slider-range"></div>
                                    </form>
                                </div>
                            </aside>
                            <aside class="widget widget_rating_filter">
                                <h3 class="widget_title">Average Rating</h3>
                                <ul>
                                    <li class="wc-layered-nav-rating">
                                        <a href="javascript:void(0);">
                                            <span class="star-rating">
                                                <span class="w100"></span>
                                            </span> (102)
                                        </a>
                                    </li>
                                    <li class="wc-layered-nav-rating">
                                        <a href="javascript:void(0);">
                                            <span class="star-rating">
                                                <span class="w80"></span>
                                            </span> (178)
                                        </a>
                                    </li>
                                    <li class="wc-layered-nav-rating">
                                        <a href="javascript:void(0);">
                                            <span class="star-rating">
                                                <span class="w60"></span>
                                            </span> (49)
                                        </a>
                                    </li>
                                    <li class="wc-layered-nav-rating">
                                        <a href="javascript:void(0);">
                                            <span class="star-rating">
                                                <span class="w40"></span>
                                            </span> (25)
                                        </a>
                                    </li>
                                    <li class="wc-layered-nav-rating">
                                        <a href="javascript:void(0);">
                                            <span class="star-rating">
                                                <span class="w20"></span>
                                            </span> (21)
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                            <aside class="widget">
                                <h3 class="widget_title">Average Rating</h3>
                                <div class="product_widget_item">
                                    <img src="makeover/images/product/p1.jpg" alt=""/>
                                    <h5><a href="single-product.html">Cream & Brush</a></h5>
                                    <div class="product_price clearfix">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>73.00</bdi></span></span>
                                    </div>
                                </div>
                                <div class="product_widget_item">
                                    <img src="makeover/images/product/p2.jpg" alt=""/>
                                    <h5><a href="single-product.html">Hair Spa</a></h5>
                                    <div class="product_price clearfix">
                                        <span class="price">
                                            <del><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>59.00</bdi></span></del> 
                                            <ins><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>49.00</bdi></span></ins>
                                        </span>
                                    </div>
                                </div>
                                <div class="product_widget_item">
                                    <img src="makeover/images/product/p3.jpg" alt=""/>
                                    <h5><a href="single-product.html">Face Makeup</a></h5>
                                    <div class="product_price clearfix">
                                        <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>33.00</bdi></span></span>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection