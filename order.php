<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/wolmart/order.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 06:10:18 GMT -->
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
        <h1 class="d-none">Wolmart - Responsive Marketplace HTML Template</h1>
        <!-- Start of Header -->
        <?php include "header.php"?>
        <!-- End of Header -->


        <!-- Start of Main -->
        <main class="main order">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb shop-breadcrumb bb-no">
                        <li class="passed"><a href="cart.php">Shopping Cart</a></li>
                        <li class="passed"><a href="checkout.php">Checkout</a></li>
                        <li class="active"><a href="order.php">Order Complete</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            <div class="page-content mb-10 pb-2">
                <div class="container">
                    <div class="order-success text-center font-weight-bolder text-dark">
                        <i class="fas fa-check"></i>
                        Thank you. Your order has been received.
                    </div>
                    <!-- End of Order Success -->

                    <ul class="order-view list-style-none">
                        <li>
                            <label>Order number</label>
                            <strong>945</strong>
                        </li>
                        <li>
                            <label>Status</label>
                            <strong>On hold</strong>
                        </li>
                        <li>
                            <label>Date</label>
                            <strong>April 27, 2021</strong>
                        </li>
                        <li>
                            <label>Total</label>
                            <strong>$1,646.36</strong>
                        </li>
                        <li>
                            <label>Payment method</label>
                            <strong>Direct bank transfor</strong>
                        </li>
                    </ul>
                    <!-- End of Order View -->

                    <div class="order-details-wrapper mb-5">
                        <h4 class="title text-uppercase ls-25 mb-5">Order Details</h4>
                        <table class="order-table">
                            <thead>
                                <tr>
                                    <th class="text-dark">Product</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#">Palm Print Jacket</a>&nbsp;<strong>x 1</strong><br>
                                        Vendor : <a href="#">Vendor 1</a>
                                    </td>
                                    <td>$40.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Brown Backpack</a>&nbsp;<strong>x 1</strong><br>
                                        Vendor : <a href="#">Vendor 1</a>
                                    </td>
                                    <td>$60.00</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Subtotal:</th>
                                    <td>$100.00</td>
                                </tr>
                                <tr>
                                    <th>Shipping:</th>
                                    <td>Flat rate</td>
                                </tr>
                                <tr>
                                    <th>Payment method:</th>
                                    <td>Direct bank transfor</td>
                                </tr>
                                <tr class="total">
                                    <th class="border-no">Total:</th>
                                    <td class="border-no">$100.00</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- End of Order Details -->

                    <div class="sub-orders mb-10">
                        <h4 class="title mb-5 font-weight-bold ls-25">Sub Orders</h4>
                        <div class="alert alert-icon alert-inline mb-5">
                            <i class="w-icon-exclamation-triangle"></i>
                            <strong>Note: </strong>This order has products from multiple vendors. So we divided this order into multiple vendor orders.
                            Each order will be handled by their respective vendor independently.
                        </div>
                        <table class="order-subtable">
                            <thead>
                                <tr>
                                    <th class="order">Order</th>
                                    <th class="date">Date</th>
                                    <th class="status">Status</th>
                                    <th class="total">Total</th>
                                    <th class="action"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="order">950</td>
                                    <td class="date">April 23, 2021</td>
                                    <td class="status">On hold</td>
                                    <td class="total">$40.00 for 1 items</td>
                                    <td class="action"><a href="order-view.php" class="btn btn-rounded">View</a></td>
                                </tr>
                                <tr>
                                    <td class="order">951</td>
                                    <td class="date">April 25, 2021</td>
                                    <td class="status">On hold</td>
                                    <td class="total">$60.00 for 1 items</td>
                                    <td class="action"><a href="order-view.php" class="btn btn-rounded">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- End of Sub Orders-->

                    <div id="account-addresses">
                        <div class="row">
                            <div class="col-sm-6 mb-8">
                                <div class="ecommerce-address billing-address">
                                    <h4 class="title title-underline ls-25 font-weight-bold">Billing Address</h4>
                                    <address class="mb-4">
                                        <table class="address-table">
                                            <tbody>
                                                <tr>
                                                    <td>John Doe</td>
                                                </tr>
                                                <tr>
                                                    <td>Conia</td>
                                                </tr>
                                                <tr>
                                                    <td>Wall Street</td>
                                                </tr>
                                                <tr>
                                                    <td>California</td>
                                                </tr>
                                                <tr>
                                                    <td>United States (US)</td>
                                                </tr>
                                                <tr>
                                                    <td>92020</td>
                                                </tr>
                                                <tr>
                                                    <td>1112223334</td>
                                                </tr>
                                                <tr class="email">
                                                    <td>nicework125@gmail.com</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </address>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-8">
                                <div class="ecommerce-address shipping-address">
                                    <h4 class="title title-underline ls-25 font-weight-bold">Shipping Address</h4>
                                    <address class="mb-4">
                                        <table class="address-table">
                                            <tbody>
                                                <tr>
                                                    <td>John Doe</td>
                                                </tr>
                                                <tr>
                                                    <td>Conia</td>
                                                </tr>
                                                <tr>
                                                    <td>Wall Street</td>
                                                </tr>
                                                <tr>
                                                    <td>California</td>
                                                </tr>
                                                <tr>
                                                    <td>United States (US)</td>
                                                </tr>
                                                <tr>
                                                    <td>92020</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Account Address -->

                    <a href="#" class="btn btn-dark btn-rounded btn-icon-left btn-back mt-6"><i class="w-icon-long-arrow-left"></i>Back To List</a>
                </div>
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
        <?php include "footer2.php"?>
        <!-- End of Footer -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Start of Sticky Footer -->
 
</body>


<!-- Mirrored from portotheme.com/html/wolmart/order.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jun 2022 06:10:18 GMT -->
</html>
