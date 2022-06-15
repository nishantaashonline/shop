<!DOCTYPE php>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Wolmart eCommmerce Marketplace php Template</title>

    <meta name="keywords" content="Marketplace ecommerce responsive php5 Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive php5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
            crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/wolmart87d5.woff?png09e" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <div class="page-wrapper">
        <!-- Start of Header -->
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg">WELCOME TO SHOPEE</p>
                    </div>
                    <div class="header-right">
                        <div class="dropdown">
                            <a href="#currency">USD</a>
                            <div class="dropdown-box">
                                <a href="#USD">USD</a>
                                <a href="#EUR">EUR</a>
                            </div>
                        </div>
                        <!-- End of DropDown Menu -->

                        <div class="dropdown">
                            <a href="#language"><img src="assets/images/flags/eng.png" alt="ENG Flag" width="14"
                                    height="8" class="dropdown-image" /> ENG</a>
                            <div class="dropdown-box">
                                <a href="#ENG">
                                    <img src="assets/images/flags/eng.png" alt="ENG Flag" width="14" height="8"
                                        class="dropdown-image" />
                                    ENG
                                </a>
                                <a href="#FRA">
                                    <img src="assets/images/flags/fra.png" alt="FRA Flag" width="14" height="8"
                                        class="dropdown-image" />
                                    FRA
                                </a>
                            </div>
                        </div>
                        <!-- End of Dropdown Menu -->
                        <span class="divider d-lg-show"></span>
                        <a href="blog.php" class="d-lg-show">Blog</a>
                        <a href="contact-us.php" class="d-lg-show">Contact Us</a>
                        <a href="my-account.php" class="d-lg-show">My Account</a>
                        <a href="assets/ajax/login.php" class="d-lg-show login sign-in"><i
                                class="w-icon-account"></i>Sign In</a>
                        <span class="delimiter d-lg-show">/</span>
                        <a href="assets/ajax/login.php" class="ml-0 d-lg-show login register">Register</a>
                    </div>
                </div>
            </div>
            <!-- End of Header Top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left mr-md-4">
                        <a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle">
                        </a>
                        <a href="index.php" class="logo ml-lg-0">
                            <img src="assets/images/logo.png" alt="logo" width="144" height="45" />
                        </a>
                        <form method="get" action="#" class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                            <div class="select-box">
                                <select id="category" name="category">
                                    <option value="">All Categories</option>
                                    <option value="4">Fashion</option>
                                    <option value="5">Furniture</option>
                                    <option value="6">Shoes</option>
                                    <option value="7">Sports</option>
                                    <option value="8">Games</option>
                                    <option value="9">Computers</option>
                                    <option value="10">Electronics</option>
                                    <option value="11">Kitchen</option>
                                    <option value="12">Clothing</option>
                                </select>
                            </div>
                            <input type="text" class="form-control" name="search" id="search"
                                placeholder="Search in..." required />
                            <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="header-right ml-4">
                        <div class="header-call d-xs-show d-lg-flex align-items-center">
                            <a href="tel:#" class="w-icon-call"></a>
                            <div class="call-info d-lg-show">
                                <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                                    <a href="mailto:#" class="text-capitalize">Live Chat</a> or :</h4>
                                <a href="tel:#" class="phone-number font-weight-bolder ls-50">0(800)123-456</a>
                            </div>
                        </div>
                        <a class="wishlist label-down link d-xs-show" href="wishlist.php">
                            <i class="w-icon-heart"></i>
                            <span class="wishlist-label d-lg-show">Wishlist</span>
                        </a>
                        <a class="compare label-down link d-xs-show" href="compare.php">
                            <i class="w-icon-compare"></i>
                            <span class="compare-label d-lg-show">Compare</span>
                        </a>
                        <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                            <div class="cart-overlay"></div>
                            <a href="#" class="cart-toggle label-down link">
                                <i class="w-icon-cart">
                                    <span class="cart-count">2</span>
                                </i>
                                <span class="cart-label">Cart</span>
                            </a>
                            <div class="dropdown-box">
                                <div class="cart-header">
                                    <span>Shopping Cart</span>
                                    <a href="#" class="btn-close">Close<i class="w-icon-long-arrow-right"></i></a>
                                </div>

                                <div class="products">
                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product-default.php" class="product-name">Beige knitted
                                                elas<br>tic
                                                runner shoes</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$25.68</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="product-default.php">
                                                <img src="assets/images/cart/product-1.jpg" alt="product" height="84"
                                                    width="94" />
                                            </a>
                                        </figure>
                                        <button class="btn btn-link btn-close" aria-label="button">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>

                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product-default.php" class="product-name">Blue utility
                                                pina<br>fore
                                                denim dress</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$32.99</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="product-default.php">
                                                <img src="assets/images/cart/product-2.jpg" alt="product" width="84"
                                                    height="94" />
                                            </a>
                                        </figure>
                                        <button class="btn btn-link btn-close" aria-label="button">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="cart-total">
                                    <label>Subtotal:</label>
                                    <span class="price">$58.67</span>
                                </div>

                                <div class="cart-action">
                                    <a href="cart.php" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                                    <a href="checkout.php" class="btn btn-primary  btn-rounded">Checkout</a>
                                </div>
                            </div>
                            <!-- End of Dropdown Box -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Header Middle -->

            <div class="header-bottom sticky-content fix-top sticky-header">
                <div class="container">
                    <div class="inner-wrap">
                        <div class="header-left">
                            <div class="dropdown category-dropdown has-border" data-visible="true">
                                <a href="#" class="category-toggle" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="true" data-display="static"
                                    title="Browse Categories">
                                    <i class="w-icon-category"></i>
                                    <span>Browse Categories</span>
                                </a>

                                <div class="dropdown-box">
                                    <ul class="menu vertical-menu category-menu">
                                        <li>
                                            <a href="shop-fullwidth-banner.php">
                                                <i class="w-icon-tshirt2"></i>Fashion
                                            </a>
                                            <ul class="megamenu">
                                                <li>
                                                    <h4 class="menu-title">Women</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.php">New Arrivals</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Best Sellers</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Trending</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Clothing</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Shoes</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Bags</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Accessories</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Jewlery &
                                                                Watches</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Sale</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4 class="menu-title">Men</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.php">New Arrivals</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Best Sellers</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Trending</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Clothing</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Shoes</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Bags</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Accessories</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Jewlery &
                                                                Watches</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="banner-fixed menu-banner menu-banner2">
                                                        <figure>
                                                            <img src="assets/images/menu/banner-2.jpg" alt="Menu Banner"
                                                                width="235" height="347" />
                                                        </figure>
                                                        <div class="banner-content">
                                                            <div class="banner-price-info mb-1 ls-normal">Get up to
                                                                <strong
                                                                    class="text-primary text-uppercase">20%Off</strong>
                                                            </div>
                                                            <h3 class="banner-title ls-normal">Hot Sales</h3>
                                                            <a href="shop-banner-sidebar.php"
                                                                class="btn btn-dark btn-sm btn-link btn-slide-right btn-icon-right">
                                                                Shop Now<i class="w-icon-long-arrow-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.php">
                                                <i class="w-icon-home"></i>Home & Garden
                                            </a>
                                            <ul class="megamenu">
                                                <li>
                                                    <h4 class="menu-title">Bedroom</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.php">Beds, Frames &
                                                                Bases</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Dressers</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Nightstands</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Kid's Beds &
                                                                Headboards</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Armoires</a></li>
                                                    </ul>

                                                    <h4 class="menu-title mt-1">Living Room</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.php">Coffee Tables</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Chairs</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Tables</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Futons & Sofa
                                                                Beds</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Cabinets &
                                                                Chests</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4 class="menu-title">Office</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.php">Office Chairs</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Desks</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Bookcases</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">File Cabinets</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Breakroom
                                                                Tables</a></li>
                                                    </ul>

                                                    <h4 class="menu-title mt-1">Kitchen & Dining</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.php">Dining Sets</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Kitchen Storage
                                                                Cabinets</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Bashers Racks</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Dining Chairs</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Dining Room
                                                                Tables</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Bar Stools</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="menu-banner banner-fixed menu-banner3">
                                                        <figure>
                                                            <img src="assets/images/menu/banner-3.jpg" alt="Menu Banner"
                                                                width="235" height="461" />
                                                        </figure>
                                                        <div class="banner-content">
                                                            <h4
                                                                class="banner-subtitle font-weight-normal text-white mb-1">
                                                                Restroom</h4>
                                                            <h3
                                                                class="banner-title font-weight-bolder text-white ls-normal">
                                                                Furniture Sale</h3>
                                                            <div
                                                                class="banner-price-info text-white font-weight-normal ls-25">
                                                                Up to <span
                                                                    class="text-secondary text-uppercase font-weight-bold">25%
                                                                    Off</span></div>
                                                            <a href="shop-banner-sidebar.php"
                                                                class="btn btn-white btn-link btn-sm btn-slide-right btn-icon-right">
                                                                Shop Now<i class="w-icon-long-arrow-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.php">
                                                <i class="w-icon-electronics"></i>Electronics
                                            </a>
                                            <ul class="megamenu">
                                                <li>
                                                    <h4 class="menu-title">Laptops &amp; Computers</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.php">Desktop
                                                                Computers</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Monitors</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Laptops</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Hard Drives &amp;
                                                                Storage</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Computer
                                                                Accessories</a></li>
                                                    </ul>

                                                    <h4 class="menu-title mt-1">TV &amp; Video</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.php">TVs</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Home Audio
                                                                Speakers</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Projectors</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Media Streaming
                                                                Devices</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <h4 class="menu-title">Digital Cameras</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.php">Digital SLR
                                                                Cameras</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Sports & Action
                                                                Cameras</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Camera Lenses</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Photo Printer</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Digital Memory
                                                                Cards</a></li>
                                                    </ul>

                                                    <h4 class="menu-title mt-1">Cell Phones</h4>
                                                    <hr class="divider">
                                                    <ul>
                                                        <li><a href="shop-fullwidth-banner.php">Carrier Phones</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Unlocked Phones</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth-banner.php">Phone & Cellphone
                                                                Cases</a></li>
                                                        <li><a href="shop-fullwidth-banner.php">Cellphone
                                                                Chargers</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="menu-banner banner-fixed menu-banner4">
                                                        <figure>
                                                            <img src="assets/images/menu/banner-4.jpg" alt="Menu Banner"
                                                                width="235" height="433" />
                                                        </figure>
                                                        <div class="banner-content">
                                                            <h4 class="banner-subtitle font-weight-normal">Deals Of The
                                                                Week</h4>
                                                            <h3 class="banner-title text-white">Save On Smart EarPhone
                                                            </h3>
                                                            <div
                                                                class="banner-price-info text-secondary font-weight-bolder text-uppercase text-secondary">
                                                                20% Off</div>
                                                            <a href="shop-banner-sidebar.php"
                                                                class="btn btn-white btn-outline btn-sm btn-rounded">Shop
                                                                Now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.php">
                                                <i class="w-icon-furniture"></i>Furniture
                                            </a>
                                            <ul class="megamenu type2">
                                                <li class="row">
                                                    <div class="col-md-3 col-lg-3 col-6">
                                                        <h4 class="menu-title">Furniture</h4>
                                                        <hr class="divider" />
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.php">Sofas & Couches</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.php">Armchairs</a></li>
                                                            <li><a href="shop-fullwidth-banner.php">Bed Frames</a></li>
                                                            <li><a href="shop-fullwidth-banner.php">Beside Tables</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.php">Dressing Tables</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-6">
                                                        <h4 class="menu-title">Lighting</h4>
                                                        <hr class="divider" />
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.php">Light Bulbs</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.php">Lamps</a></li>
                                                            <li><a href="shop-fullwidth-banner.php">Celling Lights</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.php">Wall Lights</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.php">Bathroom
                                                                    Lighting</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-6">
                                                        <h4 class="menu-title">Home Accessories</h4>
                                                        <hr class="divider" />
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.php">Decorative
                                                                    Accessories</a></li>
                                                            <li><a href="shop-fullwidth-banner.php">Candals &
                                                                    Holders</a></li>
                                                            <li><a href="shop-fullwidth-banner.php">Home Fragrance</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.php">Mirrors</a></li>
                                                            <li><a href="shop-fullwidth-banner.php">Clocks</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-6">
                                                        <h4 class="menu-title">Garden & Outdoors</h4>
                                                        <hr class="divider" />
                                                        <ul>
                                                            <li><a href="shop-fullwidth-banner.php">Garden
                                                                    Furniture</a></li>
                                                            <li><a href="shop-fullwidth-banner.php">Lawn Mowers</a>
                                                            </li>
                                                            <li><a href="shop-fullwidth-banner.php">Pressure
                                                                    Washers</a></li>
                                                            <li><a href="shop-fullwidth-banner.php">All Garden
                                                                    Tools</a></li>
                                                            <li><a href="shop-fullwidth-banner.php">Outdoor Dining</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="row">
                                                    <div class="col-6">
                                                        <div class="banner banner-fixed menu-banner5 br-xs">
                                                            <figure>
                                                                <img src="assets/images/menu/banner-5.jpg" alt="Banner"
                                                                    width="410" height="123"
                                                                    style="background-color: #D2D2D2;" />
                                                            </figure>
                                                            <div class="banner-content text-right y-50">
                                                                <h4
                                                                    class="banner-subtitle font-weight-normal text-default text-capitalize">
                                                                    New Arrivals</h4>
                                                                <h3
                                                                    class="banner-title font-weight-bolder text-capitalize ls-normal">
                                                                    Amazing Sofa</h3>
                                                                <div
                                                                    class="banner-price-info font-weight-normal ls-normal">
                                                                    Starting at <strong>$125.00</strong></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="banner banner-fixed menu-banner5 br-xs">
                                                            <figure>
                                                                <img src="assets/images/menu/banner-6.jpg" alt="Banner"
                                                                    width="410" height="123"
                                                                    style="background-color: #9F9888;" />
                                                            </figure>
                                                            <div class="banner-content y-50">
                                                                <h4
                                                                    class="banner-subtitle font-weight-normal text-white text-capitalize">
                                                                    Best Seller</h4>
                                                                <h3
                                                                    class="banner-title font-weight-bolder text-capitalize text-white ls-normal">
                                                                    Chair &amp; Lamp</h3>
                                                                <div
                                                                    class="banner-price-info font-weight-normal ls-normal text-white">
                                                                    From <strong>$165.00</strong></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.php">
                                                <i class="w-icon-heartbeat"></i>Healthy & Beauty
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.php">
                                                <i class="w-icon-gift"></i>Gift Ideas
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.php">
                                                <i class="w-icon-gamepad"></i>Toy & Games
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.php">
                                                <i class="w-icon-ice-cream"></i>Cooking
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.php">
                                                <i class="w-icon-ios"></i>Smart Phones
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.php">
                                                <i class="w-icon-camera"></i>Cameras & Photo
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-fullwidth-banner.php">
                                                <i class="w-icon-ruby"></i>Accessories
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-banner-sidebar.php"
                                                class="font-weight-bold text-primary text-uppercase ls-25">
                                                View All Categories<i class="w-icon-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <nav class="main-nav">
                                <ul class="menu active-underline">
                                    <li>
                                        <a href="demo1.php">Home</a>
                                    </li>
                                    <li>
                                        <a href="shop-banner-sidebar.php">Shop</a>

                                        <!-- Start of Megamenu -->
                                        <ul class="megamenu">
                                            <li>
                                                <h4 class="menu-title">Shop Pages</h4>
                                                <ul>
                                                    <li><a href="shop-banner-sidebar.php">Banner With Sidebar</a></li>
                                                    <li><a href="shop-boxed-banner.php">Boxed Banner</a></li>
                                                    <li><a href="shop-fullwidth-banner.php">Full Width Banner</a></li>
                                                    <li><a href="shop-horizontal-filter.php">Horizontal Filter<span
                                                                class="tip tip-hot">Hot</span></a></li>
                                                    <li><a href="shop-off-canvas.php">Off Canvas Sidebar<span
                                                                class="tip tip-new">New</span></a></li>
                                                    <li><a href="shop-infinite-scroll.php">Infinite Ajax Scroll</a>
                                                    </li>
                                                    <li><a href="shop-right-sidebar.php">Right Sidebar</a></li>
                                                    <li><a href="shop-both-sidebar.php">Both Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Shop Layouts</h4>
                                                <ul>
                                                    <li><a href="shop-grid-3cols.php">3 Columns Mode</a></li>
                                                    <li><a href="shop-grid-4cols.php">4 Columns Mode</a></li>
                                                    <li><a href="shop-grid-5cols.php">5 Columns Mode</a></li>
                                                    <li><a href="shop-grid-6cols.php">6 Columns Mode</a></li>
                                                    <li><a href="shop-grid-7cols.php">7 Columns Mode</a></li>
                                                    <li><a href="shop-grid-8cols.php">8 Columns Mode</a></li>
                                                    <li><a href="shop-list.php">List Mode</a></li>
                                                    <li><a href="shop-list-sidebar.php">List Mode With Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Product Pages</h4>
                                                <ul>
                                                    <li><a href="product-variable.php">Variable Product</a></li>
                                                    <li><a href="product-featured.php">Featured &amp; Sale</a></li>
                                                    <li><a href="product-accordion.php">Data In Accordion</a></li>
                                                    <li><a href="product-section.php">Data In Sections</a></li>
                                                    <li><a href="product-swatch.php">Image Swatch</a></li>
                                                    <li><a href="product-extended.php">Extended Info</a>
                                                    </li>
                                                    <li><a href="product-without-sidebar.php">Without Sidebar</a></li>
                                                    <li><a href="product-video.php">360<sup>o</sup> &amp; Video<span
                                                                class="tip tip-new">New</span></a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h4 class="menu-title">Product Layouts</h4>
                                                <ul>
                                                    <li><a href="product-default.php">Default<span
                                                                class="tip tip-hot">Hot</span></a></li>
                                                    <li><a href="product-vertical.php">Vertical Thumbs</a></li>
                                                    <li><a href="product-grid.php">Grid Images</a></li>
                                                    <li><a href="product-masonry.php">Masonry</a></li>
                                                    <li><a href="product-gallery.php">Gallery</a></li>
                                                    <li><a href="product-sticky-info.php">Sticky Info</a></li>
                                                    <li><a href="product-sticky-thumb.php">Sticky Thumbs</a></li>
                                                    <li><a href="product-sticky-both.php">Sticky Both</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- End of Megamenu -->
                                    </li>
                                    <li>
                                        <a href="vendor-dokan-store.php">Vendor</a>
                                        <ul>
                                            <li>
                                                <a href="vendor-dokan-store-list.php">Store Listing</a>
                                                <ul>
                                                    <li><a href="vendor-dokan-store-list.php">Store listing 1</a></li>
                                                    <li><a href="vendor-wcfm-store-list.php">Store listing 2</a></li>
                                                    <li><a href="vendor-wcmp-store-list.php">Store listing 3</a></li>
                                                    <li><a href="vendor-wc-store-list.php">Store listing 4</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="vendor-dokan-store.php">Vendor Store</a>
                                                <ul>
                                                    <li><a href="vendor-dokan-store.php">Vendor Store 1</a></li>
                                                    <li><a href="vendor-wcfm-store-product-grid.php">Vendor Store 2</a>
                                                    </li>
                                                    <li><a href="vendor-wcmp-store-product-grid.php">Vendor Store 3</a>
                                                    </li>
                                                    <li><a href="vendor-wc-store-product-grid.php">Vendor Store 4</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog.php">Blog</a>
                                        <ul>
                                            <li><a href="blog.php">Classic</a></li>
                                            <li><a href="blog-listing.php">Listing</a></li>
                                            <li>
                                                <a href="blog-grid-3cols.php">Grid</a>
                                                <ul>
                                                    <li><a href="blog-grid-2cols.php">Grid 2 columns</a></li>
                                                    <li><a href="blog-grid-3cols.php">Grid 3 columns</a></li>
                                                    <li><a href="blog-grid-4cols.php">Grid 4 columns</a></li>
                                                    <li><a href="blog-grid-sidebar.php">Grid sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="blog-masonry-3cols.php">Masonry</a>
                                                <ul>
                                                    <li><a href="blog-masonry-2cols.php">Masonry 2 columns</a></li>
                                                    <li><a href="blog-masonry-3cols.php">Masonry 3 columns</a></li>
                                                    <li><a href="blog-masonry-4cols.php">Masonry 4 columns</a></li>
                                                    <li><a href="blog-masonry-sidebar.php">Masonry sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="blog-mask-grid.php">Mask</a>
                                                <ul>
                                                    <li><a href="blog-mask-grid.php">Blog mask grid</a></li>
                                                    <li><a href="blog-mask-masonry.php">Blog mask masonry</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="post-single.php">Single Post</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="active">
                                        <a href="about-us.php">Pages</a>
                                        <ul>

                                            <li><a href="about-us.php">About Us</a></li>
                                            
                                            <li><a href="contact-us.php">Contact Us</a></li>
                                            <li><a href="faq.php">FAQs</a></li>
                                            
                                            
                                            <li><a href="wishlist.php">Wishlist</a></li>
                                            <li><a href="cart.php">Cart</a></li>
                                            <li><a href="checkout.php">Checkout</a></li>
                                            <li><a href="my-account.php">My Account</a></li>
                                           
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="elements.php">Elements</a>
                                        <ul>
                                            <li><a href="element-accordions.php">Accordions</a></li>
                                            <li><a href="element-alerts.php">Alert &amp; Notification</a></li>
                                            <li><a href="element-blog-posts.php">Blog Posts</a></li>
                                            <li><a href="element-buttons.php">Buttons</a></li>
                                            <li><a href="element-cta.php">Call to Action</a></li>
                                            <li><a href="element-icons.php">Icons</a></li>
                                            <li><a href="element-icon-boxes.php">Icon Boxes</a></li>
                                            <li><a href="element-instagrams.php">Instagrams</a></li>
                                            <li><a href="element-categories.php">Product Category</a></li>
                                            <li><a href="element-products.php">Products</a></li>
                                            <li><a href="element-tabs.php">Tabs</a></li>
                                            <li><a href="element-testimonials.php">Testimonials</a></li>
                                            <li><a href="element-titles.php">Titles</a></li>
                                            <li><a href="element-typography.php">Typography</a></li>

                                            <li><a href="element-vendors.php">Vendors</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                            <a href="#" class="d-xl-show"><i class="w-icon-map-marker mr-1"></i>Track Order</a>
                            <a href="#"><i class="w-icon-sale"></i>Daily Deals</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End of Header -->


        <!-- Start of Main -->
        <main class="main wishlist-page">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">Wishlist</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-10">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.php">Home</a></li>
                        <li>Wishlist</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            <div class="page-content">
                <div class="container">
                    <h3 class="wishlist-title">My wishlist</h3>
                    <table class="shop-table wishlist-table">
                        <thead>
                            <tr>
                                <th class="product-name"><span>Product</span></th>
                                <th></th>
                                <th class="product-price"><span>Price</span></th>
                                <th class="product-stock-status"><span>Stock Status</span></th>
                                <th class="wishlist-action">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product-thumbnail">
                                    <div class="p-relative">
                                        <a href="product-default.php">
                                            <figure>
                                                <img src="assets/images/shop/7-1.jpg" alt="product" width="300"
                                                    height="338">
                                            </figure>
                                        </a>
                                        <button type="submit" class="btn btn-close"><i
                                                class="fas fa-times"></i></button>
                                    </div>
                                </td>
                                <td class="product-name">
                                    <a href="product-default.php">
                                        Blue Sky Trunk
                                    </a>
                                </td>
                                <td class="product-price">
                                    <ins class="new-price">$85.00</ins>
                                </td>
                                <td class="product-stock-status">
                                    <span class="wishlist-in-stock">In Stock</span>
                                </td>
                                <td class="wishlist-action">
                                    <div class="d-lg-flex">
                                        <a href="#"
                                            class="btn btn-quickview btn-outline btn-default btn-rounded btn-sm mb-2 mb-lg-0">Quick
                                            View</a>
                                        <a href="#" class="btn btn-dark btn-rounded btn-sm ml-lg-2 btn-cart">Add to
                                            cart</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-thumbnail">
                                    <div class="p-relative">
                                        <a href="product-default.php">
                                            <figure>
                                                <img src="assets/images/shop/19-1.jpg" alt="product" width="300"
                                                    height="338">
                                            </figure>
                                        </a>
                                        <button type="submit" class="btn btn-close"><i
                                                class="fas fa-times"></i></button>
                                    </div>
                                </td>
                                <td class="product-name">
                                    <a href="product-default.php">
                                        Handmade Ring
                                    </a>
                                </td>
                                <td class="product-price"><ins class="new-price">$5.00</ins></td>
                                <td class="product-stock-status">
                                    <span class="wishlist-in-stock">In Stock</span>
                                </td>
                                <td class="wishlist-action">
                                    <div class="d-lg-flex">
                                        <a href="#"
                                            class="btn btn-quickview btn-outline btn-default btn-rounded btn-sm mb-2 mb-lg-0">Quick
                                            View</a>
                                        <a href="#" class="btn btn-dark btn-rounded btn-sm ml-lg-2 btn-cart">Add to
                                            cart</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-thumbnail">
                                    <div class="p-relative">
                                        <a href="product-default.php">
                                            <figure>
                                                <img src="assets/images/shop/20.jpg" alt="product" width="300"
                                                    height="338">
                                            </figure>
                                        </a>
                                        <button type="submit" class="btn btn-close"><i
                                                class="fas fa-times"></i></button>
                                    </div>
                                </td>
                                <td class="product-name">
                                    <a href="product-default.php">
                                        Pencil Case
                                    </a>
                                </td>
                                <td class="product-price"><ins class="new-price">$54.00</ins></td>
                                <td class="product-stock-status">
                                    <span class="wishlist-in-stock">In Stock</span>
                                </td>
                                <td class="wishlist-action">
                                    <div class="d-lg-flex">
                                        <a href="#"
                                            class="btn btn-quickview btn-outline btn-default btn-rounded btn-sm mb-2 mb-lg-0">Quick
                                            View</a>
                                        <a href="#" class="btn btn-dark btn-rounded btn-sm ml-lg-2 btn-cart">Add to
                                            cart</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="social-links">
                        <label>Share On:</label>
                        <div class="social-icons social-no-color border-thin">
                            <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                            <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                            <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                            <a href="#" class="social-icon social-email far fa-envelope"></a>
                            <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
        <footer class="footer">
            <div class="footer-newsletter bg-primary pt-6 pb-6">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="icon-box icon-box-side text-white">
                                <div class="icon-box-icon d-inline-flex">
                                    <i class="w-icon-envelop3"></i>
                                </div>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title text-white text-uppercase mb-0">Subscribe To Our
                                        Newsletter</h4>
                                    <p class="text-white">Get all the latest information on Events, Sales and Offers.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-9 mt-4 mt-lg-0 ">
                            <form action="#" method="get"
                                class="input-wrapper input-wrapper-inline input-wrapper-rounded">
                                <input type="email" class="form-control mr-2 bg-white" name="email" id="email"
                                    placeholder="Your E-mail Address" />
                                <button class="btn btn-dark btn-rounded" type="submit">Subscribe<i
                                        class="w-icon-long-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="widget widget-about">
                                <a href="demo1.php" class="logo-footer">
                                    <img src="assets/images/logo_footer.png" alt="logo-footer" width="144"
                                        height="45" />
                                </a>
                                <div class="widget-body">
                                    <p class="widget-about-title">Got Question? Call us 24/7</p>
                                    <a href="tel:18005707777" class="widget-about-call">1-800-570-7777</a>
                                    <p class="widget-about-desc">Register now to get updates on pronot get up icons
                                        & coupons ster now toon.
                                    </p>

                                    <div class="social-icons social-icons-colored">
                                        <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                        <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                        <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                        <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                        <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h3 class="widget-title">Company</h3>
                                <ul class="widget-body">
                                    <li><a href="about-us.php">About Us</a></li>
                                    <li><a href="#">Team Member</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="contact-us.php">Contact Us</a></li>
                                    <li><a href="#">Affilate</a></li>
                                    <li><a href="#">Order History</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4>
                                <ul class="widget-body">
                                    <li><a href="#">Track My Order</a></li>
                                    <li><a href="cart.php">View Cart</a></li>
                                    <li><a href="login.php">Sign In</a></li>
                                    <li><a href="#">Help</a></li>
                                    <li><a href="wishlist.php">My Wishlist</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4>
                                <ul class="widget-body">
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Money-back guarantee!</a></li>
                                    <li><a href="#">Product Returns</a></li>
                                    <li><a href="#">Support Center</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Term and Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-middle">
                    <div class="widget widget-category">
                        <div class="category-box">
                            <h6 class="category-name">Consumer Electric:</h6>
                            <a href="#">TV Television</a>
                            <a href="#">Air Condition</a>
                            <a href="#">Refrigerator</a>
                            <a href="#">Washing Machine</a>
                            <a href="#">Audio Speaker</a>
                            <a href="#">Security Camera</a>
                            <a href="#">View All</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Clothing & Apparel:</h6>
                            <a href="#">Men's T-shirt</a>
                            <a href="#">Dresses</a>
                            <a href="#">Men's Sneacker</a>
                            <a href="#">Leather Backpack</a>
                            <a href="#">Watches</a>
                            <a href="#">Jeans</a>
                            <a href="#">Sunglasses</a>
                            <a href="#">Boots</a>
                            <a href="#">Rayban</a>
                            <a href="#">Acccessories</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Home, Garden & Kitchen:</h6>
                            <a href="#">Sofa</a>
                            <a href="#">Chair</a>
                            <a href="#">Bed Room</a>
                            <a href="#">Living Room</a>
                            <a href="#">Cookware</a>
                            <a href="#">Utensil</a>
                            <a href="#">Blender</a>
                            <a href="#">Garden Equipments</a>
                            <a href="#">Decor</a>
                            <a href="#">Library</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Health & Beauty:</h6>
                            <a href="#">Skin Care</a>
                            <a href="#">Body Shower</a>
                            <a href="#">Makeup</a>
                            <a href="#">Hair Care</a>
                            <a href="#">Lipstick</a>
                            <a href="#">Perfume</a>
                            <a href="#">View all</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Jewelry & Watches:</h6>
                            <a href="#">Necklace</a>
                            <a href="#">Pendant</a>
                            <a href="#">Diamond Ring</a>
                            <a href="#">Silver Earing</a>
                            <a href="#">Leather Watcher</a>
                            <a href="#">Rolex</a>
                            <a href="#">Gucci</a>
                            <a href="#">Australian Opal</a>
                            <a href="#">Ammolite</a>
                            <a href="#">Sun Pyrite</a>
                        </div>
                        <div class="category-box">
                            <h6 class="category-name">Computer & Technologies:</h6>
                            <a href="#">Laptop</a>
                            <a href="#">iMac</a>
                            <a href="#">Smartphone</a>
                            <a href="#">Tablet</a>
                            <a href="#">Apple</a>
                            <a href="#">Asus</a>
                            <a href="#">Drone</a>
                            <a href="#">Wireless Speaker</a>
                            <a href="#">Game Controller</a>
                            <a href="#">View all</a>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="footer-left">
                        <p class="copyright">Copyright © 2021 Wolmart Store. All Rights Reserved.</p>
                    </div>
                    <div class="footer-right">
                        <span class="payment-label mr-lg-8">We're using safe payment for</span>
                        <figure class="payment">
                            <img src="assets/images/payment.png" alt="payment" width="159" height="25" />
                        </figure>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Start of Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="demo1.php" class="sticky-link active">
            <i class="w-icon-home"></i>
            <p>Home</p>
        </a>
        <a href="shop-banner-sidebar.php" class="sticky-link">
            <i class="w-icon-category"></i>
            <p>Shop</p>
        </a>
        <a href="my-account.php" class="sticky-link">
            <i class="w-icon-account"></i>
            <p>Account</p>
        </a>
        <div class="cart-dropdown dir-up">
            <a href="cart.php" class="sticky-link">
                <i class="w-icon-cart"></i>
                <p>Cart</p>
            </a>
            <div class="dropdown-box">
                <div class="products">
                    <div class="product product-cart">
                        <div class="product-detail">
                            <h3 class="product-name">
                                <a href="product-default.php">Beige knitted elas<br>tic
                                    runner shoes</a>
                            </h3>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$25.68</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/cart/product-1.jpg" alt="product" height="84" width="94" />
                            </a>
                        </figure>
                        <button class="btn btn-link btn-close" aria-label="button">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div class="product product-cart">
                        <div class="product-detail">
                            <h3 class="product-name">
                                <a href="https://www.portotheme.com/php/wolmart/product.php">Blue utility pina<br>fore
                                    denim dress</a>
                            </h3>
                            <div class="price-box">
                                <span class="product-quantity">1</span>
                                <span class="product-price">$32.99</span>
                            </div>
                        </div>
                        <figure class="product-media">
                            <a href="#">
                                <img src="assets/images/cart/product-2.jpg" alt="product" width="84" height="94" />
                            </a>
                        </figure>
                        <button class="btn btn-link btn-close" aria-label="button">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <div class="cart-total">
                    <label>Subtotal:</label>
                    <span class="price">$58.67</span>
                </div>

                <div class="cart-action">
                    <a href="cart.php" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                    <a href="checkout.php" class="btn btn-primary  btn-rounded">Checkout</a>
                </div>
            </div>
            <!-- End of Dropdown Box -->
        </div>

        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="w-icon-search"></i>
                <p>Search</p>
            </a>
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                    required />
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- End of Sticky Footer -->

    <!-- Start of Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70"> <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35" r="34" style="stroke-dasharray: 16.4198, 400;"></circle> </svg> </a>
    <!-- End of Scroll Top -->

    <!-- Start of Mobile Menu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay"></div>
        <!-- End of .mobile-menu-overlay -->

        <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
        <!-- End of .mobile-menu-close -->

        <div class="mobile-menu-container scrollable">
            <form action="#" method="get" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search"
                    required />
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
            <!-- End of Search Form -->
            <div class="tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#main-menu" class="nav-link active">Main Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#categories" class="nav-link">Categories</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="main-menu">
                    <ul class="mobile-menu">
                        <li><a href="demo1.php">Home</a></li>
                        <li>
                            <a href="shop-banner-sidebar.php">Shop</a>
                            <ul>
                                <li>
                                    <a href="#">Shop Pages</a>
                                    <ul>
                                        <li><a href="shop-banner-sidebar.php">Banner With Sidebar</a></li>
                                        <li><a href="shop-boxed-banner.php">Boxed Banner</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Full Width Banner</a></li>
                                        <li><a href="shop-horizontal-filter.php">Horizontal Filter<span
                                                    class="tip tip-hot">Hot</span></a></li>
                                        <li><a href="shop-off-canvas.php">Off Canvas Sidebar<span
                                                    class="tip tip-new">New</span></a></li>
                                        <li><a href="shop-infinite-scroll.php">Infinite Ajax Scroll</a></li>
                                        <li><a href="shop-right-sidebar.php">Right Sidebar</a></li>
                                        <li><a href="shop-both-sidebar.php">Both Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Shop Layouts</a>
                                    <ul>
                                        <li><a href="shop-grid-3cols.php">3 Columns Mode</a></li>
                                        <li><a href="shop-grid-4cols.php">4 Columns Mode</a></li>
                                        <li><a href="shop-grid-5cols.php">5 Columns Mode</a></li>
                                        <li><a href="shop-grid-6cols.php">6 Columns Mode</a></li>
                                        <li><a href="shop-grid-7cols.php">7 Columns Mode</a></li>
                                        <li><a href="shop-grid-8cols.php">8 Columns Mode</a></li>
                                        <li><a href="shop-list.php">List Mode</a></li>
                                        <li><a href="shop-list-sidebar.php">List Mode With Sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Product Pages</a>
                                    <ul>
                                        <li><a href="product-variable.php">Variable Product</a></li>
                                        <li><a href="product-featured.php">Featured &amp; Sale</a></li>
                                        <li><a href="product-accordion.php">Data In Accordion</a></li>
                                        <li><a href="product-section.php">Data In Sections</a></li>
                                        <li><a href="product-swatch.php">Image Swatch</a></li>
                                        <li><a href="product-extended.php">Extended Info</a>
                                        </li>
                                        <li><a href="product-without-sidebar.php">Without Sidebar</a></li>
                                        <li><a href="product-video.php">360<sup>o</sup> &amp; Video<span
                                                    class="tip tip-new">New</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Product Layouts</a>
                                    <ul>
                                        <li><a href="product-default.php">Default<span
                                                    class="tip tip-hot">Hot</span></a></li>
                                        <li><a href="product-vertical.php">Vertical Thumbs</a></li>
                                        <li><a href="product-grid.php">Grid Images</a></li>
                                        <li><a href="product-masonry.php">Masonry</a></li>
                                        <li><a href="product-gallery.php">Gallery</a></li>
                                        <li><a href="product-sticky-info.php">Sticky Info</a></li>
                                        <li><a href="product-sticky-thumb.php">Sticky Thumbs</a></li>
                                        <li><a href="product-sticky-both.php">Sticky Both</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="vendor-dokan-store.php">Vendor</a>
                            <ul>
                                <li>
                                    <a href="#">Store Listing</a>
                                    <ul>
                                        <li><a href="vendor-dokan-store-list.php">Store listing 1</a></li>
                                        <li><a href="vendor-wcfm-store-list.php">Store listing 2</a></li>
                                        <li><a href="vendor-wcmp-store-list.php">Store listing 3</a></li>
                                        <li><a href="vendor-wc-store-list.php">Store listing 4</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Vendor Store</a>
                                    <ul>
                                        <li><a href="vendor-dokan-store.php">Vendor Store 1</a></li>
                                        <li><a href="vendor-wcfm-store-product-grid.php">Vendor Store 2</a></li>
                                        <li><a href="vendor-wcmp-store-product-grid.php">Vendor Store 3</a></li>
                                        <li><a href="vendor-wc-store-product-grid.php">Vendor Store 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="blog.php">Blog</a>
                            <ul>
                                <li><a href="blog.php">Classic</a></li>
                                <li><a href="blog-listing.php">Listing</a></li>
                                <li>
                                    <a href="https://www.portotheme.com/php/wolmart/blog-grid.php">Grid</a>
                                    <ul>
                                        <li><a href="blog-grid-2cols.php">Grid 2 columns</a></li>
                                        <li><a href="blog-grid-3cols.php">Grid 3 columns</a></li>
                                        <li><a href="blog-grid-4cols.php">Grid 4 columns</a></li>
                                        <li><a href="blog-grid-sidebar.php">Grid sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Masonry</a>
                                    <ul>
                                        <li><a href="blog-masonry-2cols.php">Masonry 2 columns</a></li>
                                        <li><a href="blog-masonry-3cols.php">Masonry 3 columns</a></li>
                                        <li><a href="blog-masonry-4cols.php">Masonry 4 columns</a></li>
                                        <li><a href="blog-masonry-sidebar.php">Masonry sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Mask</a>
                                    <ul>
                                        <li><a href="blog-mask-grid.php">Blog mask grid</a></li>
                                        <li><a href="blog-mask-masonry.php">Blog mask masonry</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="post-single.php">Single Post</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="about-us.php">Pages</a>
                            <ul>

                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="become-a-vendor.php">Become A Vendor</a></li>
                                <li><a href="contact-us.php">Contact Us</a></li>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="faq.php">FAQs</a></li>
                                <li><a href="error-404.php">Error 404</a></li>
                                <li><a href="coming-soon.php">Coming Soon</a></li>
                                <li><a href="wishlist.php">Wishlist</a></li>
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                                <li><a href="my-account.php">My Account</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="elements.php">Elements</a>
                            <ul>
                                <li><a href="element-products.php">Products</a></li>
                                <li><a href="element-titles.php">Titles</a></li>
                                <li><a href="element-typography.php">Typography</a></li>
                                <li><a href="element-categories.php">Product Category</a></li>
                                <li><a href="element-buttons.php">Buttons</a></li>
                                <li><a href="element-accordions.php">Accordions</a></li>
                                <li><a href="element-alerts.php">Alert &amp; Notification</a></li>
                                <li><a href="element-tabs.php">Tabs</a></li>
                                <li><a href="element-testimonials.php">Testimonials</a></li>
                                <li><a href="element-blog-posts.php">Blog Posts</a></li>
                                <li><a href="element-instagrams.php">Instagrams</a></li>
                                <li><a href="element-cta.php">Call to Action</a></li>
                                <li><a href="element-vendors.php">Vendors</a></li>
                                <li><a href="element-icon-boxes.php">Icon Boxes</a></li>
                                <li><a href="element-icons.php">Icons</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="categories">
                    <ul class="mobile-menu">
                        <li>
                            <a href="shop-fullwidth-banner.php">
                                <i class="w-icon-tshirt2"></i>Fashion
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Women</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.php">New Arrivals</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Best Sellers</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Trending</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Clothing</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Shoes</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Bags</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Accessories</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Jewlery &
                                                Watches</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Sale</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Men</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.php">New Arrivals</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Best Sellers</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Trending</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Clothing</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Shoes</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Bags</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Accessories</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Jewlery &
                                                Watches</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.php">
                                <i class="w-icon-home"></i>Home & Garden
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Bedroom</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.php">Beds, Frames &
                                                Bases</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Dressers</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Nightstands</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Kid's Beds &
                                                Headboards</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Armoires</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Living Room</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.php">Coffee Tables</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Chairs</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Tables</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Futons & Sofa
                                                Beds</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Cabinets &
                                                Chests</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Office</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.php">Office Chairs</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Desks</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Bookcases</a></li>
                                        <li><a href="shop-fullwidth-banner.php">File Cabinets</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Breakroom
                                                Tables</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Kitchen & Dining</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.php">Dining Sets</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Kitchen Storage
                                                Cabinets</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Bashers Racks</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Dining Chairs</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Dining Room
                                                Tables</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Bar Stools</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.php">
                                <i class="w-icon-electronics"></i>Electronics
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Laptops &amp; Computers</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.php">Desktop
                                                Computers</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Monitors</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Laptops</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Hard Drives &amp;
                                                Storage</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Computer
                                                Accessories</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">TV &amp; Video</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.php">TVs</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Home Audio
                                                Speakers</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Projectors</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Media Streaming
                                                Devices</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Digital Cameras</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.php">Digital SLR
                                                Cameras</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Sports & Action
                                                Cameras</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Camera Lenses</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Photo Printer</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Digital Memory
                                                Cards</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Cell Phones</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.php">Carrier Phones</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Unlocked Phones</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Phone & Cellphone
                                                Cases</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Cellphone
                                                Chargers</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.php">
                                <i class="w-icon-furniture"></i>Furniture
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Furniture</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.php">Sofas & Couches</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Armchairs</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Bed Frames</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Beside Tables</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Dressing Tables</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Lighting</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.php">Light Bulbs</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Lamps</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Celling Lights</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Wall Lights</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Bathroom
                                                Lighting</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Home Accessories</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.php">Decorative
                                                Accessories</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Candals &
                                                Holders</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Home Fragrance</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Mirrors</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Clocks</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Garden & Outdoors</a>
                                    <ul>
                                        <li><a href="shop-fullwidth-banner.php">Garden
                                                Furniture</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Lawn Mowers</a>
                                        </li>
                                        <li><a href="shop-fullwidth-banner.php">Pressure
                                                Washers</a></li>
                                        <li><a href="shop-fullwidth-banner.php">All Garden
                                                Tools</a></li>
                                        <li><a href="shop-fullwidth-banner.php">Outdoor Dining</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.php">
                                <i class="w-icon-heartbeat"></i>Healthy & Beauty
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.php">
                                <i class="w-icon-gift"></i>Gift Ideas
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.php">
                                <i class="w-icon-gamepad"></i>Toy & Games
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.php">
                                <i class="w-icon-ice-cream"></i>Cooking
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.php">
                                <i class="w-icon-ios"></i>Smart Phones
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.php">
                                <i class="w-icon-camera"></i>Cameras & Photo
                            </a>
                        </li>
                        <li>
                            <a href="shop-fullwidth-banner.php">
                                <i class="w-icon-ruby"></i>Accessories
                            </a>
                        </li>
                        <li>
                            <a href="shop-banner-sidebar.php"
                                class="font-weight-bold text-primary text-uppercase ls-25">
                                View All Categories<i class="w-icon-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Mobile Menu -->

    <!-- Start of Quick View -->
    <div class="product product-single product-popup">
        <div class="row gutter-lg">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="product-gallery product-gallery-sticky mb-0">
                    <div class="product-single-swiper swiper-container swiper-theme nav-inner row cols-1 gutter-no">
                        <figure class="product-image">
                            <img src="assets/images/products/popup/1-440x494.jpg"
                                data-zoom-image="assets/images/products/popup/1-800x900.jpg"
                                alt="Water Boil Black Utensil" width="800" height="900">
                        </figure>
                        <figure class="product-image">
                            <img src="assets/images/products/popup/2-440x494.jpg"
                                data-zoom-image="assets/images/products/popup/2-800x900.jpg"
                                alt="Water Boil Black Utensil" width="800" height="900">
                        </figure>
                        <figure class="product-image">
                            <img src="assets/images/products/popup/3-440x494.jpg"
                                data-zoom-image="assets/images/products/popup/3-800x900.jpg"
                                alt="Water Boil Black Utensil" width="800" height="900">
                        </figure>
                        <figure class="product-image">
                            <img src="assets/images/products/popup/4-440x494.jpg"
                                data-zoom-image="assets/images/products/popup/4-800x900.jpg"
                                alt="Water Boil Black Utensil" width="800" height="900">
                        </figure>
                    </div>
                    <div class="product-thumbs-wrap">
                        <div class="product-thumbs">
                            <div class="product-thumb active">
                                <img src="assets/images/products/popup/1-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                            <div class="product-thumb">
                                <img src="assets/images/products/popup/2-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                            <div class="product-thumb">
                                <img src="assets/images/products/popup/3-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                            <div class="product-thumb">
                                <img src="assets/images/products/popup/4-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                        </div>
                        <button class="thumb-up disabled"><i class="w-icon-angle-left"></i></button>
                        <button class="thumb-down disabled"><i class="w-icon-angle-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 overflow-hidden p-relative">
                <div class="product-details scrollable pl-0">
                    <h2 class="product-title">Electronics Black Wrist Watch</h2>
                    <div class="product-bm-wrapper">
                        <figure class="brand">
                            <img src="assets/images/products/brand/brand-1.jpg" alt="Brand" width="102" height="48" />
                        </figure>
                        <div class="product-meta">
                            <div class="product-categories">
                                Category:
                                <span class="product-category"><a href="#">Electronics</a></span>
                            </div>
                            <div class="product-sku">
                                SKU: <span>MS46891340</span>
                            </div>
                        </div>
                    </div>

                    <hr class="product-divider">

                    <div class="product-price">$40.00</div>

                    <div class="ratings-container">
                        <div class="ratings-full">
                            <span class="ratings" style="width: 80%;"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <a href="#" class="rating-reviews">(3 Reviews)</a>
                    </div>

                    <div class="product-short-desc">
                        <ul class="list-type-check list-style-none">
                            <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                            <li>Volutpat ac tincidunt vitae semper quis lectus.</li>
                            <li>Aliquam id diam maecenas ultricies mi eget mauris.</li>
                        </ul>
                    </div>

                    <hr class="product-divider">

                    <div class="product-form product-variation-form product-color-swatch product-variations">
                        <label>Color:</label>
                        <div class="d-flex align-items-center">
                            <a href="#" class="color" style="background-color: #ffcc01"></a>
                            <a href="#" class="color" style="background-color: #ca6d00;"></a>
                            <a href="#" class="color" style="background-color: #1c93cb;"></a>
                            <a href="#" class="color" style="background-color: #ccc;"></a>
                            <a href="#" class="color" style="background-color: #333;"></a>
                        </div>
                    </div>
                    <div class="product-form product-variation-form product-size-swatch product-variations">
                        <label>Size:</label>
                        <div class="flex-wrap d-flex align-items-center">
                            <a href="#" class="size">Small</a>
                            <a href="#" class="size">Medium</a>
                            <a href="#" class="size">Large</a>
                            <a href="#" class="size">Extra Large</a>
                        </div>
                    </div>

                    <div class="product-variation-price">
                        <span></span>
                    </div>

                    <div class="product-form">
                        <div class="product-qty-form">
                            <div class="input-group">
                                <input class="quantity form-control" type="number" min="1" max="10000000">
                                <button class="quantity-plus w-icon-plus"></button>
                                <button class="quantity-minus w-icon-minus"></button>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-cart">
                            <i class="w-icon-cart"></i>
                            <span>Add to Cart</span>
                        </button>
                    </div>

                    <div class="social-links-wrapper">
                        <div class="social-links">
                            <div class="social-icons social-no-color border-thin">
                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                            </div>
                        </div>
                        <span class="divider d-xs-show"></span>
                        <div class="product-link-wrapper d-flex">
                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"><span></span></a>
                            <a href="#"
                                class="btn-product-icon btn-compare btn-icon-left w-icon-compare"><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Quick view -->

    <!-- Plugin JS File -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/main.min.js"></script>
</body>



    </html>