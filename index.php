<?php
/*
Template Name: Blog Page
*/
get_header();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page - Outfit Opulence</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet">
    <style>
        /* Blog Page Styling */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .blog-page {
            background-color: #f7f7f7;
            padding: 50px 0;
            margin-top: 20px;
        }

        .blog-page h2 {
            font-size: 36px;
            color: #2a2a2a;
            font-weight: 700;
            text-align: center;
            margin-bottom: 20px;
        }

        .blog-page p {
            color: #555;
            text-align: center;
            margin-bottom: 50px;
        }

        .blog-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .blog-card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            width: 30%;
            margin-bottom: 30px;
        }

        .blog-card img {
            width: 100%;
            height: auto;
            display: block;
        }

        .blog-content {
            padding: 20px;
        }

        .blog-content h4 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 15px;
            color: #2a2a2a;
        }

        .blog-content p {
            color: #555;
            margin-bottom: 20px;
        }

        .blog-content a.btn {
            display: inline-block;
            background-color: #2a2a2a;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-transform: uppercase;
            font-size: 14px;
            text-decoration: none;
        }

        .blog-content a.btn:hover {
            background-color: #000;
        }

        .pagination {
            text-align: center;
            margin-top: 30px;
        }

        .pagination a {
            background-color: #2a2a2a;
            color: #fff;
            padding: 8px 16px;
            margin: 0 5px;
            border-radius: 5px;
            text-decoration: none;
        }

        .pagination a:hover {
            background-color: #000;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .blog-card {
                width: 48%;
            }
        }

        @media (max-width: 576px) {
            .blog-card {
                width: 100%;
            }
        }

        .mydate {
            color: #2a2a2a;
            font-size: 14px;
            font-weight: 500;
            font-style: italic;
            margin-bottom: 10px;
        }
        
    </style>
</head>

<!-- Blog Page Starts -->
<section class="blog-page">
    <div class="container">
        <h2>Our Latest Blogs</h2>
        <p>Discover insights, trends, and stories from the world of fashion.</p>
        <div class="blog-container">
            <?php
            while (have_posts()) {
                the_post(); // Loop through each post
                $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
            ?>
                <!-- Blog Post -->
                <div class="blog-card">
                    <img src="<?php echo $imagepath[0]; ?>" alt="<?php the_title(); ?>">
                    <div class="blog-content">
                        <h4><?php the_title(); ?></h4>
                        <p class="mydate">Published on: <?php echo get_the_date(); ?></p>
                        <p><?php echo the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn">Read More</a>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?php echo wp_pagenavi(); ?> <!-- Pagination -->
    </div>
</section>
<!-- Blog Page Ends -->

<?php get_footer(); ?>
