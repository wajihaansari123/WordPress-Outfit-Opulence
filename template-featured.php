<?php
//Template Name: Featured;
get_header();?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Outfit Opulence- Product Detail Page</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    </head>
    
    <body>

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Our Featured Product</h2>
                        <span>Where Fashion Meets Elegance</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


   <!-- ***** Product Area Starts ***** -->
<section class="section" id="product">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="left-images">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/single-product-01.jpg" alt="Stylish Green Jacket Front View">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/single-product-02.jpg" alt="Stylish Green Jacket Back View">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <h4>Stylish Green Jacket</h4>
                    <span class="price">$75.00</span>
                    <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star-half"></i></li>
                    </ul>
                    <span>
                        Discover the perfect blend of style and comfort with our Stylish Green Jacket. Made from premium materials, this jacket is perfect for both casual and semi-formal occasions.
                    </span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i>
                        <p>
                            "This jacket has quickly become a favorite in my wardrobe. It's versatile, stylish, and incredibly comfortable." - <em>Happy Customer</em>
                        </p>
                    </div>
                    <div class="quantity-content">
                        <div class="left-content">
                            <h6>Select Quantity</h6>
                        </div>
                        <div class="right-content">
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus">
                                <input type="number" step="1" min="1" max="10" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
                                <input type="button" value="+" class="plus">
                            </div>
                        </div>
                    </div>
                    <div class="total">
                        <h4>Total: $75.00</h4>
                        <div class="main-border-button"><a href="#">Add To Cart</a></div>
                    </div>
                    <div class="product-details">
                        <h5>Product Details</h5>
                        <ul>
                            <li>Material: 100% Organic Cotton</li>
                            <li>Available Sizes: S, M, L, XL</li>
                            <li>Color: Green</li>
                            <li>Care Instructions: Machine wash cold, tumble dry low</li>
                            <li>SKU: 12345-GJ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Product Area Ends ***** -->

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    <script src="assets/js/quantity.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>

</html>

<?php
get_footer();?>