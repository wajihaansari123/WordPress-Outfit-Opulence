<?php
//Template Name: News
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
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
            padding: 0 10px;
        }

        .blog-card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            flex: 1 1 calc(33.333% - 20px);
            margin-bottom: 30px;
            margin-top: 90px;
        }

        @media (max-width: 768px) {
            .blog-card {
                flex: 1 1 calc(48% - 10px);
            }
        }

        @media (max-width: 576px) {
            .blog-card {
                flex: 1 1 100%;
            }
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

        .mydate {
            color: #2a2a2a;
            font-size: 14px;
            font-weight: 500;
            font-style: italic;
            margin-bottom: 10px;
        }

        /* Search Bar and Button Styling */
        .search-container {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            margin-top: 70px;
            padding: 0 10px;
            background-color: #F7F7F7;
        }

        .search-container form {
            display: flex;
            align-items: center;
        }

        .search-container input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            width: 250px;
            margin-right: 10px;
        }

        .search-container button {
            padding: 10px 20px;
            background-color: #2a2a2a;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            text-transform: uppercase;
        }

        .search-container button:hover {
            background-color: #000;
        }
    </style>
</head>
<?php
$searchdata = '';
if ($_GET['title']!=''){
    $searchdata = $_GET['title'];
}
?>
<body>
    <!-- Blog Page Starts -->
    <div class="blog-page">
        <h2>News Letter</h2>
        <p>Explore our latest news and blog posts</p>
        <div class="blog-container">
            <?php
            $newcat = get_terms(array(
                'taxonomy' => 'news-catagory',
                'hide_empty' => false,
                'orderby' => 'name',
                'order' => 'DESC',
                'parent' => 0
            ));
            foreach ($newcat as $newcatdata) {
                $meta_image = get_wp_term_image($newcatdata->term_id);
            ?>
                <div class="blog-card">
                    <?php if ($meta_image != "") { ?>
                        <img src="<?php  echo esc_url($meta_image); ?>">
                    <?php } ?>
                    <div class="blog-content">
                        <h4><?php echo esc_html($newcatdata->name); ?></h4>
                        <p class="mydate">Published on: <?php echo get_the_date(); ?></p>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php echo get_category_link($newcatdata->term_id); ?>" class="btn">Read More</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>
<?php get_footer(); ?>