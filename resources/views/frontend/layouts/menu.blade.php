<header class="header">
    <div class="header-bottom sticky-header">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>
                
                <a href="index.html" class="logo">
                    <img src="{{ asset('frontend') }}/assets/images/demos/demo-8/logo.png" alt="Molla Logo" width="82" height="20">
                </a>
            </div>
            <div class="header-center">
               
            </div><!-- End .header-left -->

            <div class="header-right">
                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="megamenu-container active">
                            <a href="{{ route('frontend.home') }}">Home</a>
                        </li>
                        <li>
                            <a href="product.html">Products</a>
                        </li>
                        <li>
                            <a href="product.html">Contact</a>
                        </li>
                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-bottom -->
</header><!-- End .header -->