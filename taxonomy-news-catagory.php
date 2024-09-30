<?php
get_header();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post Title</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f7f7;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Blog Post Container */
        .blog-post {
            max-width: 1000px;
            margin: 50px auto;
            margin-left: 120px;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .blog-post img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .blog-post h1 {
            font-size: 2.8em;
            color: #2a2a2a;
            margin-bottom: 15px;
        }

        .meta {
            font-size: 0.9em;
            color: #999;
            margin-bottom: 20px;
        }

        .content {
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .content p,
        .content ul {
            margin-bottom: 15px;
            color: #555;
        }

        .content ul li {
            list-style-type: disc;
            margin-left: 20px;
        }

        .content a.btn {
            background-color: #2a2a2a;
            color: #fff;
            padding: 10px 25px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            transition: 0.3s;
        }

        .content a.btn:hover {
            background-color: #444;
        }

        /* Author Info */
        .author-info {
            display: flex;
            align-items: center;
            padding: 20px;
            background-color: #f2f2f2;
            border-radius: 8px;
            margin-bottom: 40px;
        }

        .author-info img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            margin-right: 20px;
        }

        .author-info h3 {
            margin: 0;
            font-size: 1.4em;
            color: black;
        }

        .author-info p {
            margin: 5px 0 0;
            font-size: 0.9em;
            color: black;
        }

        /* Related Posts */
        .related-posts {
            margin-bottom: 50px;
        }

        .related-posts h2 {
            font-size: 2em;
            margin-bottom: 30px;
            color: black;
        }

        .related-posts .post {
            display: flex;
            align-items: center;
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .related-posts .post img {
            width: 120px;
            height: 80px;
            margin-right: 20px;
            border-radius: 8px;
        }

        .related-posts .post .info h3 {
            margin: 0;
            font-size: 1.2em;
            color: black;
        }

        .related-posts .post .info a {
            color: black;
            text-decoration: none;
            font-size: 0.9em;
        }

        /* Comments Section */
        .comments-section {
            margin-top: 50px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .comments-section h2 {
            font-size: 2em;
            margin-bottom: 30px;
            color: #2a2a2a;
            text-align: center;
        }

        .comment {
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .comment .comment-author {
            font-weight: bold;
            color: #2a2a2a;
        }

        .comment .comment-date {
            font-size: 0.8em;
            color: #777;
        }

        .comment .comment-text {
            margin-top: 10px;
            color: #555;
        }

        /* Comment Form */
        .comment-form {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .comment-form h3 {
            text-align: center;
            margin: 0 auto;
            font-size: 1.8em;
            margin-bottom: 20px;
            color: #2a2a2a;
        }

        .comment-form input,
        .comment-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }

        .comment-form button {
            background-color: #2a2a2a;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
        }

        .comment-form button:hover {
            background-color: #444;
        }

        /* Quick Links Sidebar Styling */
        .widget_block {
            margin: 0;
            padding: 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 250px;
            position: fixed;
            top: 152px;
            right: 20px;
        }

        /* Sidebar Title Styling */
        .widgettitle {
            font-size: 1.5em;
            margin: 0;
            padding: 15px;
            background-color: #2a2a2a;
            color: #fff;
            border-radius: 8px 8px 0 0;
        }

        /* Quick Links List Styling */
        .wp-block-page-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .wp-block-pages-list__item {
            border-bottom: 1px solid #ddd;
        }

        .wp-block-pages-list__item:last-child {
            border-bottom: none;
        }

        .wp-block-pages-list__item__link {
            display: block;
            padding: 10px 15px;
            color: #2a2a2a;
            text-decoration: none;
            font-size: 1em;
        }

        .wp-block-pages-list__item__link:hover {
            background-color: #eaeaea;
            color: #000;
        }

        .wp-block-pages-list__item__link:active {
            background-color: #d0d0d0;
            color: #000;
        }

        /* Responsive Styles */
        @media (max-width: 1024px) {
            .widget_block {
                display: none; /* Hide the sidebar on tablets and mobile devices */
            }

            .blog-post {
                margin: 50px 20px; /* Adjust margins for better spacing on smaller screens */
                padding: 20px; /* Adjust padding */
            }
        }
    </style>
</head>



<body>
    <br><br><br>
    <?php
    // Get the current queried object (category in this case)
    $catdata = get_queried_object();

    // Initialize $imagepath to ensure it's defined
    $imagepath = "";

    // Get the category term image if available
    $meta_image = get_wp_term_image($catdata->term_id);
    ?>

    <?php dynamic_sidebar('sidebar'); ?> <!-- Sidebar running -->

    <!-- Blog Post Container -->
    <div class="blog-post">
        <!-- Get the category term image if available -->
        <?php if (!empty($meta_image)) { ?>
            <img src="<?php  echo ($meta_image); ?>" style="width:100px; height: auto;">
        <?php } ?>
        
        <h1><?php echo ($catdata->name); ?></h1> <!-- Display category name -->
       
        <div class="meta">
            <span>by: Outfit Opulence</span>
        </div>

        <!-- Custom Query for Posts in 'news' Post Type for the Current Category -->
        <?php
        $wpnews = array(
            'post_type' => 'news',
            'post_status' => 'publish',
            'tax_query' => array(
                array(
                    'taxonomy' => 'news-catagory',  // Ensure the taxonomy is correct
                    'field' => 'term_id',
                    'terms' => $catdata->term_id,
                ),
            ),
        );
        $newsquery = new WP_Query($wpnews);

        // Loop through posts if there are any
        while ($newsquery->have_posts()) {
            $newsquery->the_post();

            // Get the featured image for the post
            $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
        ?>
            <!-- Post Title -->
            <h4><?php the_title(); ?></h4>
            
            <!-- Post Date -->
            <p class="mydate">Published on: <?php echo get_the_date(); ?></p>
            
            <!-- Post Featured Image -->
            <?php if ($imagepath && !empty($imagepath[0])) { ?>
                <img src="<?php echo esc_url($imagepath[0]); ?>" style="width: 200px; height: auto;">
            <?php } ?>
            
            <!-- Post Content -->
            <p><?php the_content(); ?></p>

        <?php
        } // End while
        ?>

        <div class="content">
            <a href="Watermalon/news-letter" class="btn">Explore Now</a>
        </div>
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var sidebar = document.querySelector('.widget_block');
        var footer = document.querySelector('footer'); // Assuming 'footer' is your admin/footer section

        // Get initial sidebar offset from the top
        var sidebarInitialOffset = sidebar.offsetTop;

        // Function to handle the sticky behavior
        function stickySidebar() {
            var footerOffset = footer.offsetTop;
            var scrollPosition = window.scrollY;

            // Check if the user has scrolled past the sidebar's initial position
            if (scrollPosition > sidebarInitialOffset) {
                var sidebarBottom = scrollPosition + sidebar.offsetHeight;

                // Stop the sidebar when it reaches the footer
                if (sidebarBottom > footerOffset) {
                    sidebar.style.position = 'absolute';
                    sidebar.style.top = (footerOffset - sidebar.offsetHeight - 20) + 'px'; // Adjust for margin
                } else {
                    sidebar.style.position = 'fixed';
                    sidebar.style.top = '150px'; // Reset to the original top
                }
            } else {
                sidebar.style.position = 'fixed';
                sidebar.style.top = '150px'; // Reset to the original top
            }
        }

        // Listen to the scroll event
        window.addEventListener('scroll', stickySidebar);
    });
</script>
<?php get_footer(); ?>
