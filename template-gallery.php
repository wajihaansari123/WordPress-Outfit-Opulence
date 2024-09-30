<?php
//Template Name: Gallery
get_header();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Gallery Page</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet">
    <style>
        /* Basic Styling */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .gallery-page {
            background-color: #f7f7f7;
            padding: 50px 0;
        }

        .gallery-page h2 {
            font-size: 36px;
            color: #2a2a2a;
            font-weight: 700;
            text-align: center;
            margin-bottom: 20px;
        }

        .gallery-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .gallery-card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            width: 30%;
            margin-bottom: 30px;
            text-align: center;
        }

        .gallery-card img {
            width: 100%;
            height: auto;
            display: block;
        }

        .gallery-card h4 {
            font-size: 18px;
            font-weight: 600;
            margin: 15px 0;
            color: #2a2a2a;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .gallery-card {
                width: 48%;
            }
        }

        @media (max-width: 576px) {
            .gallery-card {
                width: 100%;
            }
        }
    </style>
</head>

<body>
<br>
<br>
    <!-- Gallery Page Starts -->
    <section class="gallery-page">
        <div class="container">
            <h2>Our Gallery</h2>
            <div class="gallery-container">
                <!-- Gallery Item 1 -->
                <div class="gallery-card">
                    <img src="https://via.placeholder.com/300" alt="Image 1">
                    <h4>Image Title 1</h4>
                </div>

                <!-- Gallery Item 2 -->
                <div class="gallery-card">
                    <img src="https://via.placeholder.com/300" alt="Image 2">
                    <h4>Image Title 2</h4>
                </div>

                <!-- Gallery Item 3 -->
                <div class="gallery-card">
                    <img src="https://via.placeholder.com/300" alt="Image 3">
                    <h4>Image Title 3</h4>
                </div>

                <!-- Gallery Item 4 -->
                <div class="gallery-card">
                    <img src="https://via.placeholder.com/300" alt="Image 4">
                    <h4>Image Title 4</h4>
                </div>

                <!-- Gallery Item 5 -->
                <div class="gallery-card">
                    <img src="https://via.placeholder.com/300" alt="Image 5">
                    <h4>Image Title 5</h4>
                </div>

                <!-- Gallery Item 6 -->
                <div class="gallery-card">
                    <img src="https://via.placeholder.com/300" alt="Image 6">
                    <h4>Image Title 6</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Page Ends -->

</body>

</html>
<?php
get_footer();?>