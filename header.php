<!-- ***** Header Area Start ***** -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title><?php bloginfo('name')?> <?php wp_title()?> <?php //if (is_front_page()){ bloginfo('description'); } ?></title>

    <?php wp_head();?>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/flex-slider.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/men.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lightbox.css">
    <!-- Additional styles or scripts here -->

</head>
<body <?php body_class();?>>
    
</body>
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <?php
                    $logoimg = get_header_image(); // Get the header image URL
                    ?>
                    <a href="<?php echo esc_url(home_url()); ?>" class="logo">
                        <img src="<?php echo esc_url($logoimg); ?>" alt="Logo not found">
                    </a>
                    <!-- ***** Logo End ***** -->

                    <!-- ***** Menu Start ***** -->
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        'menu_class'     => 'nav',
                        'container'      => false,
                        'depth'          => 2, // Ensure submenu depth is supported
                    ));
                    ?>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
<script>
// JavaScript to handle the menu toggle for small screens
document.addEventListener('DOMContentLoaded', function() {
  const menuTrigger = document.querySelector('.menu-trigger');
  const nav = document.querySelector('.header-area .main-nav .nav');

  menuTrigger.addEventListener('click', function() {
    nav.style.display = (nav.style.display === 'block') ? 'none' : 'block';
  });
});
</script>