@extends('layout')
@section('titlepage', $item->name)
@section('content')

<!-- Begin:: Single Products Section -->
<section class="singleProduct">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="product_gallery">
                    <ul id="product_gallery" class="gallery_sliders cS-hidden">
                        <li data-thumb="{{ asset('upload/' . $item->image) }}">
                            <div class="pg_item"><img src="{{ asset('upload/' . $item->image) }}" alt="" /></div>
                        </li>
                        <li data-thumb="{{ asset('upload/' . $item->image) }}">
                            <div class="pg_item"><img src="{{ asset('upload/' . $item->image) }}" alt="" /></div>
                        </li>
                        <li data-thumb="{{ asset('upload/' . $item->image) }}">
                            <div class="pg_item"><img src="{{ asset('upload/' . $item->image) }}" alt="" /></div>
                        </li>
                        <li data-thumb="{{ asset('upload/' . $item->image) }}">
                            <div class="pg_item"><img src="{{ asset('upload/' . $item->image) }}" alt="" /></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product_details">
                    <h3>{{ $item->name }}</h3>
                    <div class="product_price clearfix">
                        <span class="price">
                            <del><span class="woocommerce-Price-amount amount"><bdi>{{ number_format($item->price, 0, ',', '.') }}
                                        VNĐ</bdi></span></del>
                            <ins><span class="woocommerce-Price-amount amount"><bdi>{{ number_format($item->price, 0, ',', '.') }}
                                        VNĐ</bdi></span></ins>
                        </span>
                    </div>
                    <div class="woocommerce-product-rating">
                        <div class="star-rating" role="img" aria-label="Rated 4.50 out of 5">
                            <span class="w80">
                                Rated
                                <strong class="rating">4.50</strong>
                                out of 5 based on
                                <span class="rating">2</span>
                                customer ratings
                            </span>
                        </div>
                        <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span class="count">2</span>
                            customer reviews)</a>
                    </div>
                    <div class="pd_excrpt">
                        <p>
                            {{ $item->description }}
                        </p>
                    </div>
                    <div class="cart_quantity clearfix">
                        <div class="quantity quantityd clearfix">
                            <button type="button" class="minus qtyBtn btnMinus">-</button>
                            <input type="number" class="carqty input-text qty text" name="quantity" value="1">
                            <button type="button" class="plus qtyBtn btnPlus">+</button>
                        </div>
                        
                        <form action="{{ route('cart.add', $item->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="quantity" id="quantityInput" value="1">
                            <button type="submit" class="mo_btn"><i class="icofont-cart-alt"></i>Thêm vào giỏ
                                hàng</button>
                        </form>

                    </div>
                    <div class="pro_meta clearfix">
                        <h5>Info</h5>
                        <div class="mtItem">
                            SKU: 01
                        </div>
                        <div class="mtItem">
                            Category: <a href="">{{ $item->category->name }}</a>
                        </div>

                    </div>
                    <div class="pro_m_social">
                        <h5>Share:</h5>
                        <a target="_blank" href="https://www.facebook.com/"><i class="icofont-facebook"></i></a>
                        <a target="_blank" href="https://twitter.com/"><i class="icofont-twitter"></i></a>
                        <a target="_blank" href="https://bebo.com/"><i class="icofont-bebo"></i></a>
                        <a target="_blank" href="https://dribbble.com/"><i class="icofont-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product_tabarea">
                    <ul class="nav nav-tabs productTabs" id="productTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="active" id="description-tab" data-toggle="tab" href="#description" role="tab"
                                aria-controls="description" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                aria-selected="false">Review (3)</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="description" role="tabpanel"
                            aria-labelledby="description-tab">
                            <div class="pdtci_content">
                                <p>
                                    {{ $item->description }}
                                </p>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="pdtci_content">
                                <div class="comment_area">
                                    <div class="sic_comments">
                                        <h3 class="sicc_title">03 Reviews</h3>
                                        <ol class="sicc_list">
                                            <li>
                                                <article class="single_comment productComent">
                                                    <img src="makeover/images/blog/a1.jpg" alt="">
                                                    <h4 class="cm_author"><a href="javascript:void(0);">Amy Burton</a>
                                                    </h4>
                                                    <span class="cm_date">7 months ago</span>
                                                    <div class="sc_content">
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and type
                                                            setting industry. Lorem Ipsum has been the
                                                            industry's sincethe 1500s. When an unknown printer took a
                                                            galley of type and scrambled it to make a
                                                            type specimen book.
                                                        </p>
                                                    </div>
                                                    <div class="woocommerce-product-rating">
                                                        <div class="star-rating" role="img"
                                                            aria-label="Rated 4.50 out of 5">
                                                            <span class="w100">
                                                                Rated <strong class="rating">5.00</strong> out of 5
                                                                based on
                                                                <span class="rating">1</span> customer ratings
                                                            </span>
                                                        </div>
                                                    </div>
                                                </article>
                                            </li>
                                            <li>
                                                <article class="single_comment productComent">
                                                    <img src="makeover/images/blog/a2.jpg" alt="">
                                                    <h4 class="cm_author"><a href="javascript:void(0);">Amy Burton</a>
                                                    </h4>
                                                    <span class="cm_date">7 months ago</span>
                                                    <div class="sc_content">
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and type
                                                            setting industry. Lorem Ipsum has been the
                                                            industry's sincethe 1500s. When an unknown printer took a
                                                            galley of type and scrambled it to make a
                                                            type specimen book.
                                                        </p>
                                                    </div>
                                                    <div class="woocommerce-product-rating">
                                                        <div class="star-rating" role="img"
                                                            aria-label="Rated 4.50 out of 5">
                                                            <span class="w80">
                                                                Rated <strong class="rating">5.00</strong> out of 5
                                                                based on
                                                                <span class="rating">1</span> customer ratings
                                                            </span>
                                                        </div>
                                                    </div>
                                                </article>
                                            </li>
                                            <li>
                                                <article class="single_comment productComent">
                                                    <img src="makeover/images/blog/a3.jpg" alt="">
                                                    <h4 class="cm_author"><a href="javascript:void(0);">Amy Burton</a>
                                                    </h4>
                                                    <span class="cm_date">7 months ago</span>
                                                    <div class="sc_content">
                                                        <p>
                                                            Lorem Ipsum is simply dummy text of the printing and type
                                                            setting industry. Lorem Ipsum has been the
                                                            industry's sincethe 1500s. When an unknown printer took a
                                                            galley of type and scrambled it to make a
                                                            type specimen book.
                                                        </p>
                                                    </div>
                                                    <div class="woocommerce-product-rating">
                                                        <div class="star-rating" role="img"
                                                            aria-label="Rated 4.50 out of 5">
                                                            <span class="w40">
                                                                Rated <strong class="rating">5.00</strong> out of 5
                                                                based on
                                                                <span class="rating">1</span> customer ratings
                                                            </span>
                                                        </div>
                                                    </div>
                                                </article>
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="commentForm productCommentForm">
                                        <h3 class="sicc_title">Add a Review</h3>
                                        <form action="#" method="post" class="row">
                                            <div class="col-md-12">
                                                <textarea name="comment" placeholder="Your Comment *"></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <input placeholder="Your Name *" name="author" type="text">
                                            </div>
                                            <div class="col-md-6">
                                                <input placeholder="Email Address *" name="email" type="email">
                                            </div>
                                            <div class="col-md-12">
                                                <button class="mo_btn" type="submit"><i
                                                        class="icofont-long-arrow-right"></i>Submit Review</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="related_area">
                    <h2>Related Products</h2>
                    <div class="related_carousel owl-carousel">
                        @foreach ($relatedProducts as $item)
                            <div class="product_item text-center">
                                <div class="pi_thumb">
                                    <img src="{{ asset('upload/' . $item->image) }}" alt=""
                                        style="width: 300px; height: 200px; object-fit: cover;" />
                                    <div class="pi_01_actions">
                                        <a href="{{ route('detail', ['id' => $item->id]) }}"
                                            onclick="event.preventDefault(); document.getElementById('add-to-cart-form-{{ $item->id }}').submit();">
                                            <i class="icofont-cart-alt"></i>
                                        </a>
                                        <a href="{{ route('detail', ['id' => $item->id]) }}">
                                            <i class="icofont-eye"></i>
                                        </a>
                                    </div>
                                    <div class="prLabels">
                                        <p class="justin">New</p>
                                    </div>
                                </div>
                                <div class="pi_content">
                                    <p><a href="">
                                            @if ($item->category)
                                                {{ $item->category->name }}
                                            @endif
                                        </a></p>
                                    <h3><a href="">{{ $item->name }}</a></h3>
                                    <div class="product_price clearfix">
                                        <span class="price">{{ number_format($item->price, 0, ',', '.') }} VNĐ</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End:: Single Products Section -->

@endsection