<?php
//Template Name: Home
get_header();

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Outfit Opulence Ecommerce shop</title>


    <!-- Additional CSS Files -->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/flex-slider.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/men.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lightbox.css">
    <!-- Additional styles or scripts here -->
<style>
    /* Interactive Area Styles */
.interactive-area {
  background-color: #ECECEC;
  padding: 50px 0;
  text-align: center;
}

.interactive-area .section-heading {
  margin-bottom: 40px;
}

.interactive-area h2 {
  font-size: 36px;
  color: #2a2a2a;
  font-weight: 700;
}

.interactive-area .description {
  color: #555;
  margin-bottom: 30px;
}

.interactive-area .thumb {
  position: relative;
  overflow: hidden;
  border-radius: 10px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.interactive-area .thumb:hover {
  transform: scale(1.05);
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
}

.interactive-area .thumb img {
  width: 100%;
  height: auto;
  display: block;
  transition: opacity 0.3s ease;
}

.interactive-area .thumb:hover img {
  opacity: 0.7;
}

.interactive-area .thumb .icon {
  position: absolute;
  bottom: 10px;
  left: 10px;
  background-color: rgba(0, 0, 0, 0.6);
  color: #fff;
  padding: 10px;
  border-radius: 5px;
  transition: opacity 0.3s ease;
}

.interactive-area .thumb:hover .icon {
  opacity: 1;
}

.interactive-area .thumb .icon a {
  color: #fff;
  text-decoration: none;
  font-size: 16px;
}

.interactive-area .thumb .icon i {
  margin-right: 5px;
}
</style>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <!-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->

    <!-- ***** Preloader End ***** -->


    <?php
    get_header()?>

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>We Are Outfit Luxe Wear</h4>
                                <span>Where Fashion Meets Elegance</span>

                            </div>
                            <img src="<?php bloginfo('template_directory') ?>/assets/images/1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Women</h4>
                                            <span>Chic Styles Await</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Women</h4>
                                                <p>Explore Our Chic Collection: Dresses, Tops, & More!</p>
                                                <div class="main-border-button">
                                                    <a href="#women">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="<?php bloginfo('template_directory') ?>/assets/images/11.png">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Men</h4>
                                            <span>Elevate Your Wardrobe</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Men</h4>
                                                <p>Elevate Your Style: From Suits to Casual Wear.</p>
                                                <div class="main-border-button">
                                                    <a href="#men">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="<?php bloginfo('template_directory') ?>/assets/images/ana (385 x 330 px) (385 x 330 px).png">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Kids</h4>
                                            <span>Fun & Fashionable</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Kids</h4>
                                                <p>Discover Cute & Comfy Outfits for Your Little Ones.</p>
                                                <div class="main-border-button">
                                                    <a href="#kids">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="<?php bloginfo('template_directory') ?>/assets/images/18.png">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Accessories</h4>
                                            <span>Complete Your Look</span>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Accessories</h4>
                                                <p>Accessories that Add the Finishing Touch to Any Outfit</p>
                                                <div class="main-border-button">
                                                    <a href="#">Discover More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="<?php bloginfo('template_directory') ?>/assets/images/baner-right-image-04.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    
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
<!-- ***** Women Area Starts ***** -->
<section class="women-section" id="women">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div class="section-heading">
            <h2>Women's Latest</h2>
            <span>Attention to detail makes Outfit Opulence shine above other brands.</span>
        </div>

        <div class="product-container">
            <!-- Product 1 -->
            <div class="product-item">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/7.png" alt="Chic Flawless">
                <h4>Chic Flawless</h4>
                <span>$75.00</span>
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
                <img src="<?php bloginfo('template_directory') ?>/assets/images/8.png" alt="Elegant Dress">
                <h4>Elegant Dress</h4>
                <span>$45.00</span>
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
                <img src="<?php bloginfo('template_directory') ?>/assets/images/10.png" alt="Spring Fashions">
                <h4>Spring Fashions</h4>
                <span>$130.00</span>
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
<!-- ***** Women Area Ends ***** -->
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

    <!-- ***** Explore Area Starts ***** -->
    <section class="section" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <h2>Discover Our Exclusive Collection</h2>
                        <span>Unveil the elegance and innovation of our latest products. Our collection is designed to inspire and elevate your style, whether you're shopping for a special occasion or everyday wear.</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <p>"Rediscover the joy of shopping with our curated selections tailored to your tastes."</p>
                        </div>
                        <p>Explore our range of meticulously crafted items, each showcasing quality and sophistication. Our collection includes a variety of styles and designs to suit every preference.</p>
                        <p>If you appreciate our curated collection and want to see more, consider <a rel="nofollow" href="https://www.linkedin.com/in/wajiha-ansari-2223nbc/" target="_blank">supporting us</a>. Your support allows us to continue offering high-quality products and services. Spread the word and share our collection with friends who might love it too. Thank you!</p>
                        <div class="main-border-button">
                            <a href="products.html">Explore Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="leather">
                                    <h4>Luxurious Leather Bags</h4>
                                    <span>Explore Our Latest Collection</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="first-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/women-02.jpg" alt="Luxurious Leather Bags">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="second-image">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/ana (385 x 330 px).png" alt="Diverse Product Range">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="types">
                                    <h4>Diverse Styles</h4>
                                    <span>Over 304 Unique Products</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Explore Area Ends ***** -->

    <!-- ou blog post starts -->
    <section class="interactive-area">
        <div class="container">
            <div class="section-heading">
                <h2>Share Your Ideas with Us!</h2>
                <p class="description">Click on any image below to submit your blog post and be featured on our platform.</p>
            </div>
            <div class="row">
                <div class="col-2">
                    <div class="thumb" onclick="window.location.href='<?php echo esc_url(get_permalink(get_page_by_path('make-your-blogging-journey-on-the-go')->ID)); ?>'">
                        <div class="icon">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('make-your-blogging-journey-on-the-go')->ID)); ?>" target="_self">
                                <h6>Submit Your Fashion Post</h6>
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/blog/nEW ARRIVAL.png" alt="Submit Fashion Post">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb" onclick="window.location.href='<?php echo esc_url(get_permalink(get_page_by_path('make-your-blogging-journey-on-the-go')->ID)); ?>'">
                        <div class="icon">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('make-your-blogging-journey-on-the-go')->ID)); ?>" target="_self">
                                <h6>New Trends</h6>
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/blog/NEW TREND.png" alt="New Trends">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb" onclick="window.location.href='<?php echo esc_url(get_permalink(get_page_by_path('make-your-blogging-journey-on-the-go')->ID)); ?>'">
                        <div class="icon">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('make-your-blogging-journey-on-the-go')->ID)); ?>" target="_self">
                                <h6>Fashion Tips</h6>
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/blog/fashion tips.png" alt="Fashion Tips">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb" onclick="window.location.href='<?php echo esc_url(get_permalink(get_page_by_path('make-your-blogging-journey-on-the-go')->ID)); ?>'">
                        <div class="icon">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('make-your-blogging-journey-on-the-go')->ID)); ?>" target="_self">
                                <h6>Style Stories</h6>
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/blog/style stories.png" alt="Style Stories">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb" onclick="window.location.href='<?php echo esc_url(get_permalink(get_page_by_path('make-your-blogging-journey-on-the-go')->ID)); ?>'">
                        <div class="icon">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('make-your-blogging-journey-on-the-go')->ID)); ?>" target="_self">
                                <h6>Exclusive Offers</h6>
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/blog/special offers.png" alt="Exclusive Offers">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb" onclick="window.location.href='<?php echo esc_url(get_permalink(get_page_by_path('make-your-blogging-journey-on-the-go')->ID)); ?>'">
                        <div class="icon">
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('make-your-blogging-journey-on-the-go')->ID)); ?>" target="_self">
                                <h6>Behind the Scenes</h6>
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <img src="<?php echo bloginfo('template_directory'); ?>/assets/images/blog/BTS.png" alt="Behind the Scenes">
                    </div>
                </div>
            </div>
        </div>
    </section>
  <!-- our blog post Ends -->
    <!-- ***** Social Area Starts ***** -->
    <section class="section" id="social">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Connect with Us on Social Media</h2>
                        <span>Stay updated with the latest trends, styles, and exclusive offers by following us on social media.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row <?php bloginfo('template_directory'); ?>images/">
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com" target="_blank">
                                <h6>Fashion Trends</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/instagram-01.jpg" alt="Fashion Trends">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com" target="_blank">
                                <h6>New Arrivals</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/instagram-02.jpg" alt="New Arrivals">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com" target="_blank">
                                <h6>Brand Stories</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/instagram-03.jpg" alt="Brand Stories">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com" target="_blank">
                                <h6>Makeup Tips</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/instagram-04.jpg" alt="Makeup Tips">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com" target="_blank">
                                <h6>Leather Goods</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/instagram-05.jpg" alt="Leather Goods">
                    </div>
                </div>
                <div class="col-2">
                    <div class="thumb">
                        <div class="icon">
                            <a href="http://instagram.com" target="_blank">
                                <h6>Stylish Bags</h6>
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/instagram-06.jpg" alt="Stylish Bags">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Social Area Ends ***** -->


    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                        <span>Details to details is what makes Outfit Opulence different from the other themes.</span>
                    </div>
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                            <div class="col-lg-5">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Your Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-5">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li>Store Location:<br><span>Sunny Isles Beach, FL 33160, United States</span></li>
                                <li>Phone:<br><span>010-020-0340</span></li>
                                <li>Office Location:<br><span>North Miami Beach</span></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>
                                <li>Email:<br><span>info@OutfitOpulence.com</span></li>
                                <li>Social Media:<br><span><a href="#">Facebook</a>, <a href="#">Instagram</a>, <a href="#">Behance</a>, <a href="#">Linkedin</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->
     <?php
     get_footer()?>

            <!-- jQuery and Bootstrap JS -->
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-2.1.0.min.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>

            <!-- Plugins -->
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl-carousel.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/accordions.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/datepicker.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scrollreveal.min.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/waypoints.min.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.counterup.min.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/imgfix.min.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lightbox.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope.js"></script>

            <!-- Global Init -->
            <script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-2.1.0.min.js"></script>
            <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>

            <script>
                $(function() {
                    var selectedClass = "";
                    $("p").click(function() {
                        selectedClass = $(this).attr("data-rel");
                        $("#portfolio").fadeTo(50, 0.1);
                        $("#portfolio div").not("." + selectedClass).fadeOut();
                        setTimeout(function() {
                            $("." + selectedClass).fadeIn();
                            $("#portfolio").fadeTo(50, 1);
                        }, 500);

                    });
                });
            </script>

</body>

</html>