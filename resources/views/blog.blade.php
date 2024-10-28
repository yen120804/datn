@extends('layout')
@section('titlepage',' Blog')
@section('content')

<!-- Begin:: Banner Section -->
<section class="page_banner">
            <div class="layer_img move_anim animated">
                <img src="makeover/images/bg/page_layer.png" alt=""/>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 offset-lg-1">
                        <h2 class="banner-title">Tin Tức</h2>
                        <p class="breadcrumbs"><a href="{{ route('home') }}">Home</a><span>/</span>Tin Tức</p>
                    </div>
                    <div class="col-lg-6 animated pnl">
                        <div class="page_layer">
                            <img src="makeover/images/bg/banner_layer.png" alt=""/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
  <section class="blogPage">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sidebar lsb">
                            <aside class="widget">
                                <h3 class="widget_title">Search</h3>
                                <form method="get" action="#" class="search_form">
                                    <input type="search" name="s" id="s" placeholder="Type here">
                                    <button type="submit"><i class="icofont-search"></i></button>
                                </form>
                            </aside>
                            <aside class="widget">
                                <h3 class="widget_title">Popular Posts</h3>
                                <div class="pp_post_item">
                                    <img src="makeover/images/blog/t1.jpg" alt=""/>
                                    <h5><a href="single-blog.html">We also offer outside special spa and message...</a></h5>
                                    <span>February 18, 2017</span>
                                </div>
                                <div class="pp_post_item">
                                    <img src="makeover/images/blog/t2.jpg" alt=""/>
                                    <h5><a href="single-blog.html">Spring is in the Air and and So Our These Amazing...</a></h5>
                                    <span>February 18, 2017</span>
                                </div>
                                <div class="pp_post_item">
                                    <img src="makeover/images/blog/t3.jpg" alt=""/>
                                    <h5><a href="single-blog.html">If you are going to use a you need to be sure can...</a></h5>
                                    <span>February 18, 2017</span>
                                </div>
                            </aside>
                            <div class="widget widget_categories">
                                <h3 class="widget_title">Category</h3>
                                <ul>
                                    <li><a href="blog1.html">Beauty and health</a>(3)</li>
                                    <li><a href="blog1.html">Cosmetics</a>(8)</li>
                                    <li><a href="blog1.html">Massage treatments</a>(5)</li>
                                    <li><a href="blog1.html">Medical spa</a>(3)</li>
                                    <li><a href="blog1.html">Spa center</a>(2)</li>
                                    <li><a href="blog1.html">Spa therapy</a>(1)</li>
                                </ul>
                            </div>
                            <div class="widget">
                                <h3 class="widget_title">Tags</h3>
                                <div class="tagcloud">
                                    <a href="blog1.html">Body</a>
                                    <a href="blog1.html">Face</a>
                                    <a href="blog1.html">Hair</a>
                                    <a href="blog1.html">Massage</a>
                                    <a href="blog1.html">Oil Pool</a>
                                    <a href="blog1.html">Rellax</a>
                                    <a href="blog1.html">Spa</a>
                                </div>
                            </div>
                            <div class="widget">
                                <h3 class="widget_title">Gallery</h3>
                                <div class="gallery_shots">
                                    <a href="javascript:void(0);"><img src="makeover/images/gallery/6.jpg" alt=""/></a>
                                    <a href="javascript:void(0);"><img src="makeover/images/gallery/7.jpg" alt=""/></a>
                                    <a href="javascript:void(0);"><img src="makeover/images/gallery/8.jpg" alt=""/></a>
                                    <a href="javascript:void(0);"><img src="makeover/images/gallery/9.jpg" alt=""/></a>
                                    <a href="javascript:void(0);"><img src="makeover/images/gallery/10.jpg" alt=""/></a>
                                    <a href="javascript:void(0);"><img src="makeover/images/gallery/11.jpg" alt=""/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="blog_item_02">
                                    <img src="makeover/images/blog/1.jpg" alt=""/>
                                    <div class="bp_content">
                                        <span>February 18, 2017</span>
                                        <h3><a href="single-blog.html">Spring is in the Air and and So Our These Amazing Spa Offers</a></h3>
                                        <a class="lr_more" href="single-blog.html">
                                            Learn More
                                            <svg width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                                <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog_item_02">
                                    <img src="makeover/images/blog/2.jpg" alt=""/>
                                    <div class="bp_content">
                                        <span>February 18, 2017</span>
                                        <h3><a href="single-blog.html">We giving Amazing special spa and message service for vip.</a></h3>
                                        <a class="lr_more" href="single-blog.html">
                                            Learn More
                                            <svg width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                                <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog_item_02">
                                    <img src="makeover/images/blog/3.jpg" alt=""/>
                                    <div class="bp_content">
                                        <span>February 18, 2017</span>
                                        <h3><a href="single-blog.html">We also offer outside special spa and message catering; take-away</a></h3>
                                        <a class="lr_more" href="single-blog.html">
                                            Learn More
                                            <svg width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                                <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog_item_02">
                                    <img src="makeover/images/blog/4.jpg" alt=""/>
                                    <div class="bp_content">
                                        <span>February 18, 2017</span>
                                        <h3><a href="single-blog.html">If you are going to use a you need to be sure can do it.</a></h3>
                                        <a class="lr_more" href="single-blog.html">
                                            Learn More
                                            <svg width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                                <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog_item_02">
                                    <img src="makeover/images/blog/5.jpg" alt=""/>
                                    <div class="bp_content">
                                        <span>February 18, 2017</span>
                                        <h3><a href="single-blog.html">Looks reasonable. The generate is therefore always.</a></h3>
                                        <a class="lr_more" href="single-blog.html">
                                            Learn More
                                            <svg width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                                <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog_item_02">
                                    <img src="makeover/images/blog/6.jpg" alt=""/>
                                    <div class="bp_content">
                                        <span>February 18, 2017</span>
                                        <h3><a href="single-blog.html">There are many variations spa & Saloon body massage available.</a></h3>
                                        <a class="lr_more" href="single-blog.html">
                                            Learn More
                                            <svg width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                                <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog_item_02">
                                    <img src="makeover/images/blog/13.jpg" alt=""/>
                                    <div class="bp_content">
                                        <span>February 18, 2017</span>
                                        <h3><a href="single-blog.html">We also offer outside special spa and message catering; take-away</a></h3>
                                        <a class="lr_more" href="single-blog.html">
                                            Learn More
                                            <svg width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                                <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog_item_02">
                                    <img src="makeover/images/blog/14.jpg" alt=""/>
                                    <div class="bp_content">
                                        <span>February 18, 2017</span>
                                        <h3><a href="single-blog.html">If you are going to use a you need to be sure can do it.</a></h3>
                                        <a class="lr_more" href="single-blog.html">
                                            Learn More
                                            <svg width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                                <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="make_pagination text-center">
                                    <span class="current">1</span>
                                    <a href="blog3.html">2</a>
                                    <a href="blog3.html">3</a>
                                    <a class="next" href="blog3.html"><i class="icofont-simple-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End:: Blog Section -->
         @endsection