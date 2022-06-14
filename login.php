<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/wolmart/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 06:09:34 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Wolmart eCommmerce Marketplace HTML Template</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700'] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
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
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <div class="page-wrapper">
        <!-- Start of Header -->
        <?php include "header.php"?>
        <!-- End of Header -->

        <!-- Start of Main -->
        <main class="main login-page">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">My Account</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.php">Home</a></li>
                        <li>My account</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->
            <div class="page-content">
                <div class="container">
                    <div class="login-popup">
                        <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
                            <ul class="nav nav-tabs text-uppercase" role="tablist">
                                <li class="nav-item">
                                    <a href="#sign-in" class="nav-link active">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#sign-up" class="nav-link">Sign Up</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="sign-in">
                                    <div class="form-group">
                                        <label>Username or email address *</label>
                                        <input type="text" class="form-control" name="username" id="username" required>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Password *</label>
                                        <input type="text" class="form-control" name="password" id="password" required>
                                    </div>
                                    <div class="form-checkbox d-flex align-items-center justify-content-between">
                                        <input type="checkbox" class="custom-checkbox" id="remember1" name="remember1" required="">
                                        <label for="remember1">Remember me</label>
                                        <a href="#">Last your password?</a>
                                    </div>
                                    <a href="#" class="btn btn-primary">Sign In</a>
                                </div>
                                <div class="tab-pane" id="sign-up">
                                    <div class="form-group">
                                        <label>Your email address *</label>
                                        <input type="text" class="form-control" name="email_1" id="email_1" required>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label>Password *</label>
                                        <input type="text" class="form-control" name="password_1" id="password_1" required>
                                    </div>
                                    <div class="checkbox-content login-vendor">
                                        <div class="form-group mb-5">
                                            <label>First Name *</label>
                                            <input type="text" class="form-control" name="first-name" id="first-name" required>
                                        </div>
                                        <div class="form-group mb-5">
                                            <label>Last Name *</label>
                                            <input type="text" class="form-control" name="last-name" id="last-name" required>
                                        </div>
                                        <div class="form-group mb-5">
                                            <label>Shop Name *</label>
                                            <input type="text" class="form-control" name="shop-name" id="shop-name" required>
                                        </div>
                                        <div class="form-group mb-5">
                                            <label>Shop URL *</label>
                                            <input type="text" class="form-control" name="shop-url" id="shop-url" required>
                                            <small>https://d-themes.com/wordpress/wolmart/demo-1/store/</small>
                                        </div>
                                        <div class="form-group mb-5">
                                            <label>Phone Number *</label>
                                            <input type="text" class="form-control" name="phone-number" id="phone-number" required>
                                        </div>
                                    </div>
                                    <div class="form-checkbox user-checkbox mt-0">
                                        <input type="checkbox" class="custom-checkbox checkbox-round active" id="check-customer" name="check-customer" required="">
                                        <label for="check-customer" class="check-customer mb-1">I am a customer</label>
                                        <br>
                                        <input type="checkbox" class="custom-checkbox checkbox-round" id="check-seller" name="check-seller" required="">
                                        <label for="check-seller" class="check-seller">I am a vendor</label>
                                    </div>
                                    <p>Your personal data will be used to support your experience 
                                        throughout this website, to manage access to your account, 
                                        and for other purposes described in our <a href="#" class="text-primary">privacy policy</a>.</p>
                                    <a href="#" class="d-block mb-5 text-primary">Signup as a vendor?</a>
                                    <div class="form-checkbox d-flex align-items-center justify-content-between mb-5">
                                        <input type="checkbox" class="custom-checkbox" id="remember" name="remember" required="">
                                        <label for="remember" class="font-size-md">I agree to the <a  href="#" class="text-primary font-size-md">privacy policy</a></label>
                                    </div>
                                    <a href="#" class="btn btn-primary">Sign Un</a>
                                </div>
                            </div>
                            <p class="text-center">Sign in with social account</p>
                            <div class="social-icons social-icon-border-color d-flex justify-content-center">
                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                <a href="#" class="social-icon social-google fab fa-google"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
        <?php include "footer2.php"?>
        <!-- End of Footer -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Start of Sticky Footer -->
   
</body>

<!-- Mirrored from portotheme.com/html/wolmart/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 06:09:34 GMT -->
</html>