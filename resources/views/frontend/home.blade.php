@include('frontend.layouts.header')

    <div class="page-wrapper">

        @include('frontend.layouts.menu')

        <main class="main">
           

            <div class="pt-2 pb-2">
                <div class="container brands">
                    <div class="banner-group">
                        <div class="row">
                            <div class="col-sm-6 col-lg-4">
                                <div class="banner banner-overlay">
                                    <a href="#">
                                        <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/banners/banner-1.jpg" alt="Banner">
                                    </a>

                                    <div class="banner-content">
                                        <h4 class="banner-subtitle"><a href="#">Final reduction</a></h4><!-- End .banner-subtitle -->
                                        <h3 class="banner-title"><a href="#"><strong>Sandals & <br>Flip Flops</strong> <br>up to 60% off</a></h3><!-- End .banner-title -->
                                        <a href="#" class="btn btn-outline-white banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .banner-content -->
                                </div><!-- End .banner -->
                            </div><!-- End .col-lg-4 -->

                            <div class="col-sm-6 col-lg-4">
                                <div class="banner banner-overlay">
                                    <a href="#">
                                        <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/banners/banner-2.jpg" alt="Banner">
                                    </a>

                                    <div class="banner-content">
                                        <h4 class="banner-subtitle"><a href="#">Limited time only.</a></h4><!-- End .banner-subtitle -->
                                        <h3 class="banner-title"><a href="#"><strong>Trainers & <br>Sportwear</strong> <br>40 -70% off</a></h3><!-- End .banner-title -->
                                        <a href="#" class="btn btn-outline-white banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .banner-content -->
                                </div><!-- End .banner -->
                            </div><!-- End .col-lg-4 -->

                            <div class="col-sm-6 col-lg-4 d-none d-lg-block">
                                <div class="banner banner-overlay">
                                    <a href="#">
                                        <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/banners/banner-3.jpg" alt="Banner">
                                    </a>

                                    <div class="banner-content">
                                        <h4 class="banner-subtitle"><a href="#">This week we love...</a></h4><!-- End .banner-subtitle -->
                                        <h3 class="banner-title"><a href="#"><strong>Women's <br>Accessories </strong> <br>from $6.99</a></h3><!-- End .banner-title -->
                                        <a href="#" class="btn btn-outline-white banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .banner-content -->
                                </div><!-- End .banner -->
                            </div><!-- End .col-lg-4 -->
                        </div><!-- End .row -->
                    </div><!-- End .banner-group -->
                </div><!-- End .container -->
            </div><!-- End .bg-lighter -->

            <div class="mb-3"></div><!-- End .mb-6 -->

            <div class="mb-3 mb-xl-2"></div><!-- End .mb-3 -->

            <div class="trending">
                <a href="#">
                    <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/banners/banner-4.jpg" alt="Banner">
                </a>
                <div class="banner banner-big d-md-block">
                    <div class="banner-content text-center">
                        <h4 class="banner-subtitle text-white">Trending</h4><!-- End .banner-subtitle -->
                        <h3 class="banner-title text-white">New League</h3><!-- End .banner-title -->
                        <p class="d-none d-lg-block text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.<br>Donec odio. Quisque volutpat mattis eros. </p> 

                        <a href="category.html" class="btn btn-primary-white"><span>Shop Now</span><i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .banner-content -->
                </div><!-- End .banner -->
            </div>
            <div class="container new-arrivals">
                <div class="row">
                    <div class="col-md-6">
                        <div class="banner banner-overlay">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/banners/banner-5.jpg" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle d-none d-lg-block"><a href="#">New Arrivals</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title"><a href="#">Women’s</a></h3><!-- End .banner-title -->
                                <a href="#" class="btn btn-outline-white banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-6 -->

                    <div class="col-md-6">
                        <div class="banner banner-overlay">
                            <a href="#">
                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/banners/banner-6.jpg" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle d-none d-lg-block"><a href="#">New Arrivals</a></h4><!-- End .banner-subtitle -->
                                <h3 class="banner-title "><a href="#">Men’s</a></h3><!-- End .banner-title -->
                                <a href="#" class="btn btn-outline-white banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-5"></div><!-- End .mb-5 -->

            <div class="container recent-arrivals">
                <div class="heading heading-flex align-items-center mb-3">
                    <h2 class="title title-lg">Recent Arrivals</h2><!-- End .title -->
                </div><!-- End .heading -->

                <div class="tab-content">
                    <div class="tab-pane p-0 fade show active" id="recent-all-tab" role="tabpanel" aria-labelledby="recent-all-link">
                        <div class="products">
                            <div class="row justify-content-center">
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-sale">Sale</span>
                                            <a href="product.html">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-5-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-5-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Clothing</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Tie-detail top</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">Now $3.99</span>
                                                <span class="old-price">Was $6.99</span>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-6-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-6-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Shoes</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Sandals</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $12.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-7-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-7-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Bags</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Small bucket bag</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $14.99
                                            </div><!-- End .product-price -->

                                            <div class="product-nav product-nav-thumbs">
                                                <a href="#" class="active">
                                                    <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-7-thumb.jpg" alt="product desc">
                                                </a>
                                                <a href="#">
                                                    <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-7-2-thumb.jpg" alt="product desc">
                                                </a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-8-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-8-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Clothing</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Denim jacket</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $34.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-9-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-9-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Clothing</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">BShort wrap dress</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $17.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-10-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-10-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Clothing</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Biker jacket</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $34.99
                                            </div><!-- End .product-price -->

                                            <div class="product-nav product-nav-thumbs">
                                                <a href="#" class="active">
                                                    <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-10-thumb.jpg" alt="product desc">
                                                </a>
                                                <a href="#">
                                                    <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-10-2-thumb.jpg" alt="product desc">
                                                </a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-11-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-11-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Shoes</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Loafers</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $9.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-sale">sale</span>
                                            <a href="product.html">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-12-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-12-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Clothing</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Super Skinny High Jeggings</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">Now $12.99</span>
                                                <span class="old-price">Was $17.99</span>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .products -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="recent-women-tab" role="tabpanel" aria-labelledby="recent-women-link">
                        <div class="products">
                            <div class="row justify-content-center">
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-sale">Sale</span>
                                            <a href="product.html">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-5-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-5-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Clothing</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Tie-detail top</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">Now $3.99</span>
                                                <span class="old-price">Was $6.99</span>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-6-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-6-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Shoes</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Sandals</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $12.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .products -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="recent-men-tab" role="tabpanel" aria-labelledby="recent-men-link">
                        <div class="products">
                            <div class="row justify-content-center">
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-11-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-11-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Shoes</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Loafers</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $9.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-sale">sale</span>
                                            <a href="product.html">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-12-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-12-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Clothing</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Super Skinny High Jeggings</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">Now $12.99</span>
                                                <span class="old-price">Was $17.99</span>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                            </div><!-- End .row -->
                        </div><!-- End .products -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="recent-shoes-tab" role="tabpanel" aria-labelledby="recent-shoes-link">
                        <div class="products">
                            <div class="row justify-content-center">
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-7-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-7-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Bags</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Small bucket bag</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $14.99
                                            </div><!-- End .product-price -->

                                            <div class="product-nav product-nav-thumbs">
                                                <a href="#" class="active">
                                                    <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-7-thumb.jpg" alt="product desc">
                                                </a>
                                                <a href="#">
                                                    <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-7-2-thumb.jpg" alt="product desc">
                                                </a>
                                            </div><!-- End .product-nav -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-8-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-8-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Clothing</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Denim jacket</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $34.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="product product-2 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-9-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/products/product-9-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Clothing</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">BShort wrap dress</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $17.99
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .products -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->

                <div class="more-container text-center mt-3 mb-3">
                    <a href="category.html" class="btn btn-outline-dark-3 btn-more"><span>View More</span><i class="icon-long-arrow-right"></i></a>
                </div><!-- End .more-container -->
            </div><!-- End .container -->

            <div class="mb-7"></div><!-- End .mb-5 -->
            
        </main><!-- End .main -->

        <footer class="footer footer-2">
            {{-- <div class="footer-middle">
               
            </div><!-- End .footer-middle --> --}}

            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright">
                        Copyright © {{ now()->year }} Biaibari. All Rights Reserved. 
                        Developed By <a href="https://www.codersujon.com">CODERSUJON</a>
                    </p><!-- End .footer-copyright -->
                    {{-- <ul class="footer-menu">
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul><!-- End .footer-menu --> --}}

                    <div class="social-icons social-icons-color">
                        <span class="social-label">Social Media</span>
                        <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                    </div><!-- End .soial-icons -->
                </div><!-- End .container -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    
@include('frontend.layouts.footer')