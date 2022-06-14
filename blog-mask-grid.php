<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/wolmart/blog-mask-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 06:09:04 GMT -->
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
        <main class="main">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">Mask Grid</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-6">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.php">Home</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li>Mask Grid</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content">
                <div class="container">
                    <ul class="nav-filters filter-underline blog-filters mb-4">
                        <li><a href="#" class="nav-filter active" data-filter="*">All Blog Posts <span>6</span></a></li>
                        <li><a href="#" class="nav-filter" data-filter=".clothes">Clothes <span>1</span></a></li>
                        <li><a href="#" class="nav-filter" data-filter=".entertainment">Entertainment <span>1</span></a></li>
                        <li><a href="#" class="nav-filter" data-filter=".fashion">Fashion <span>2</span></a></li>
                        <li><a href="#" class="nav-filter" data-filter=".lifestyle">Lifestyle <span>3</span></a></li>
                        <li><a href="#" class="nav-filter" data-filter=".others">Others <span>2</span></a></li>
                        <li><a href="#" class="nav-filter" data-filter=".shoes">Shoes <span>1</span></a></li>
                        <li><a href="#" class="nav-filter" data-filter=".technology">Technology <span>1</span></a></li>
                    </ul>

                    <div class="row grid cols-lg-3 cols-md-2 mb-2" data-grid-options="{
                        'layoutMode': 'fitRows'
                    }">
                        <div class="grid-item fashion">
                            <article class="post post-mask overlay-zoom br-sm">
                                <figure class="post-media">
                                    <a href="post-single.php">
                                        <img src="assets/images/blog/2cols/1.jpg" width="600"
                                            height="420" alt="blog">
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-details-visible">
                                        <div class="post-cats">
                                            <a href="#">Fashion</a>
                                        </div>
                                        <h4 class="post-title text-white"><a href="#">New found the men dress for summer</a>
                                        </h4>
                                    </div>
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">John Doe</a>
                                        - <a href="#" class="post-date">03.05.2021</a>
                                        <a href="#" class="post-comment">0 Comments</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="grid-item others technology">
                            <article class="post post-mask overlay-zoom br-sm">
                                <figure class="post-media">
                                    <a href="post-single.php">
                                        <img src="assets/images/blog/2cols/2.jpg" width="600"
                                            height="420" alt="blog">
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-details-visible">
                                        <div class="post-cats">
                                            <a href="#">Others</a>,
                                            <a href="#">Technology</a>
                                        </div>
                                        <h4 class="post-title text-white"><a href="#">Recognitory the needs is primary condition  for design</a>
                                        </h4>
                                    </div>
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">John Doe</a>
                                        - <a href="#" class="post-date">03.05.2021</a>
                                        <a href="#" class="post-comment">0 Comments</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="grid-item clothes">
                            <article class="post post-mask overlay-zoom br-sm">
                                <figure class="post-media">
                                    <a href="post-single.php">
                                        <img src="assets/images/blog/2cols/3.jpg" width="600"
                                            height="420" alt="blog">
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-details-visible">
                                        <div class="post-cats">
                                            <a href="#">Clothes</a>
                                        </div>
                                        <h4 class="post-title text-white"><a href="#">New found the women’s shirt  for summer season</a>
                                        </h4>
                                    </div>
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">John Doe</a>
                                        - <a href="#" class="post-date">03.05.2021</a>
                                        <a href="#" class="post-comment">0 Comments</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="grid-item lifestyle">
                            <article class="post post-mask overlay-zoom br-sm">
                                <figure class="post-media">
                                    <a href="post-single.php">
                                        <img src="assets/images/blog/2cols/4.jpg" width="600"
                                            height="420" alt="blog">
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-details-visible">
                                        <div class="post-cats">
                                            <a href="#">Lifestyle</a>
                                        </div>
                                        <h4 class="post-title text-white"><a href="#">We want to be different and fashion gives to me that outlet</a>
                                        </h4>
                                    </div>
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">John Doe</a>
                                        - <a href="#" class="post-date">03.05.2021</a>
                                        <a href="#" class="post-comment">0 Comments</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="grid-item entertainment shoes lifestyle others">
                            <article class="post post-mask overlay-zoom br-sm">
                                <figure class="post-media">
                                    <a href="post-single.php">
                                        <img src="assets/images/blog/2cols/5.jpg" width="600"
                                            height="420" alt="blog">
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-details-visible">
                                        <div class="post-cats">
                                            <a href="#">Entertainment</a>,
                                            <a href="#">Lifestyle</a>,
                                            <a href="#">Others</a>
                                        </div>
                                        <h4 class="post-title text-white"><a href="#">Comes a cool blog post with Images</a>
                                        </h4>
                                    </div>
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">John Doe</a>
                                        - <a href="#" class="post-date">03.05.2021</a>
                                        <a href="#" class="post-comment">0 Comments</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="grid-item fashion lifestyle">
                            <article class="post post-mask overlay-zoom br-sm">
                                <figure class="post-media">
                                    <a href="post-single.php">
                                        <img src="assets/images/blog/2cols/6.jpg" width="600"
                                            height="420" alt="blog">
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-details-visible">
                                        <div class="post-cats">
                                            <a href="#">Fashion</a>,
                                            <a href="#">Technology</a>
                                        </div>
                                        <h4 class="post-title text-white"><a href="#">Fusce lacinia arcuet nulla</a>
                                        </h4>
                                    </div>
                                    <div class="post-meta">
                                        by <a href="#" class="post-author">John Doe</a>
                                        - <a href="#" class="post-date">03.05.2021</a>
                                        <a href="#" class="post-comment">0 Comments</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <ul class="pagination justify-content-center mb-10 pb-2 pt-2 mt-8">
                        <li class="prev disabled">
                            <a href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                <i class="w-icon-long-arrow-left"></i>Prev
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="next">
                            <a href="#" aria-label="Next">
                                Next<i class="w-icon-long-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
        <?php include "footer2.php"?>
        <!-- End of Footer -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Start of Sticky Footer -->
    
</body>


<!-- Mirrored from portotheme.com/php/wolmart/blog-mask-grid.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 06:09:04 GMT -->
</html>