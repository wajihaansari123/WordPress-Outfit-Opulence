<?php
//Template Name: Kids
get_header();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <br>
<!-- ***** Kids Area Starts ***** -->
<section class="kids-section" id="kids">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div class="section-heading">
            <h2>Kids' Latest</h2>
            <span>Attention to detail is what makes Outfit Opulence stand out from the rest.</span>
        </div>

        <div class="product-container">
            <!-- Product 1 -->
            <div class="product-item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/17.png" alt="School Essentials">
                <h4>School Essentials</h4>
                <span>$80.00</span>
                <div class="stars">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                </div>
                <div class="hover-content">
                    <ul>
                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/20.png" alt="Summer Hat">
                <h4>Summer Hat</h4>
                <span>$12.00</span>
                <div class="stars">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                </div>
                <div class="hover-content">
                    <ul>
                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/21.png" alt="Classic Kidwear">
                <h4>Classic Kidwear</h4>
                <span>$30.00</span>
                <div class="stars">
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                </div>
                <div class="hover-content">
                    <ul>
                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                        <li><a href="single-product.html"><i class="fa fa-star"></i></a></li>
                        <li><a href="single-product.html"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Kids Area Ends ***** --> 
</body>
</html>
<?php
get_footer();
?>