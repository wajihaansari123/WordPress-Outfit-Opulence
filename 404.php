<?php
get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #f0f0f0;
            color: #333;
        }

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 200px;
        }

        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            flex: 1;
            max-width: 700px;
            padding: 40px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s;
        }

        .content:hover {
            transform: scale(1.03);
        }

        h1 {
            font-size: 6em;
            margin: 0;
            color: black;
        }

        h2 {
            font-size: 2em;
            margin: 20px 0;
            color: #333;
        }

        p {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 30px;
        }

        a.btn {
            background-color: #2a2a2a;
            color: #fff;
            padding: 15px 35px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 1.2em;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        a.btn:hover {
            background-color: #444;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .not-found-image {
            max-width: 80%;
            height: auto;
            margin-bottom: 40px;
        }

        footer {
            position: relative;
            width: 100%;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>404</h1>
        <h2>Uh-oh! We couldn't find that page.</h2>
        <p>The page you're trying to access may have been deleted or temporarily unavailable.</p>
        <a href="<?php echo site_url(); ?>" class="btn">Return to Home</a>
    </div>

</body>
</html>

<?php
get_footer();
?>
