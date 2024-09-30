<?php
//Template Name: Men
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
    <!-- ***** Men Area Starts ***** -->
<section class="men-section" id="men">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div class="section-heading">
            <h2>Men's Latest</h2>
            <span>Details make Outfit Opulence stand out from the rest.</span>
        </div>

        <div class="product-container">
            <!-- Product 1 -->
            <div class="product-item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/2.png" alt="Classic Spring">
                <h4>Classic Spring</h4>
                <span>$120.00</span>
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
                <img src="<?php bloginfo('template_directory') ?>/assets/images/3.png" alt="Air Force 1 X">
                <h4>Air Force 1 X</h4>
                <span>$90.00</span>
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
                <img src="<?php bloginfo('template_directory') ?>/assets/images/12.png" alt="Love Nana ‘20">
                <h4>Love Nana ‘20</h4>
                <span>$150.00</span>
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
</body>
</html>
<?php
get_footer();
?>