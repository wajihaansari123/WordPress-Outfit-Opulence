<?php
/* Template Name: Submit a Post */
get_header();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit a Post</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet">
    <style>
        /* Basic Form Styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .submit-page {
            background-color: #f7f7f7;
            padding: 50px 0;
        }

        .submit-page h2 {
            font-size: 36px;
            color: #2a2a2a;
            font-weight: 700;
            text-align: center;
            margin-bottom: 20px;
        }

        .submit-form-container {
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .submit-form-container input,
        .submit-form-container textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .submit-form-container input[type="file"] {
            padding: 0;
        }

        .submit-form-container button {
            width: 100%;
            background-color: #000; /* Black background */
            color: #fff; /* White text */
            border: none; /* Remove default border */
            padding: 5px 0px; /* Large padding */
            font-size: 18px; /* Larger font size */
            border-radius: 5px; /* Rounded corners */
            cursor: pointer; /* Pointer cursor on hover */
            transition: background-color 0.3s ease, box-shadow 0.3s ease; /* Smooth transition for background and shadow */
            outline: none; /* Remove default outline */
        }

        .submit-form-container button:hover {
            background-color: #333; /* Darker shade on hover */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow on hover */
        }

        .submit-form-container button:active {
            background-color: #111; /* Even darker shade when clicked */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Darker shadow when clicked */
        }

        .submit-form-container button:focus {
            box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.5); /* Outline effect on focus */
        }
    </style>
</head>
<?php
if(isset($_POST['savenews']))
{
    $id = wp_insert_post(
        array(
            'post_type'=>'news',
            'post_status'=>'draft',
            'post_title'=>$_POST['ntitle'],
            'post_content'=>$_POST['ndes']
        )
        );
        wp_set_object_terms($id, $_POST['newscat'], 'news-catagory');
}
?>
<br>
<body>
    <section class="submit-page">
        <div class="container">
            <h2>Submit Your Blog Post</h2>
            <div class="submit-form-container">
                <form method="POST">
                    <input type="text" name="ntitle" placeholder="Post Title" required>
                    <textarea name="ndes" rows="10" placeholder="Write your blog post here..." required></textarea>
                    <select name="newscat" style="margin-bottom: 10px;">
                        <option>Select Catagory</option>
                        <?php 
                         $newcat = get_terms(array(
                            'taxonomy' => 'news-catagory',
                            'hide_empty' => false,
                            'orderby' => 'name',
                            'order' => 'DESC',
                            'parent' => 0
                        ));
                        foreach ($newcat as $newcatdata) { ?>
                        <option value="<?php echo $newcatdata->name?>"><?php echo $newcatdata->name?></option>
                        <?php }?>
                    </select>
                    <button name="savenews">Submit</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>

<?php
get_footer();
