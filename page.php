<!-- ***** Header Area Start ***** -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<title>Outfit Opulence Ecommerce shop</title>


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

<?php
get_header();
?>
<br>
<br>
<br>
<br>
<?php 
the_post_thumbnail(array(500,500));

the_post();
the_content();

?>

<?php
get_footer();
?>