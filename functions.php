<?php
register_nav_menus(
    array('primary-menu' => 'header-menu'));

add_theme_support('post-thumbnails');
add_theme_support('custom-header');
register_sidebar(
    array(
        'name'=>"Sidebar Location",
        'id' => "sidebar"
    )
    );
add_theme_support('custom-background');
add_post_type_support('page','excerpt()');
function theme_setup_elementor() {
    add_theme_support( 'elementor' );
}
add_action( 'after_setup_theme', 'theme_setup_elementor' );
















//ADDING CODE FOR SUBSCRIBING USERS
// function create_subscribers_table() {
//     global $wpdb;
//     $table_name = $wpdb->prefix . 'subscribers'; // Table name with prefix

//     $charset_collate = $wpdb->get_charset_collate();

//     $sql = "CREATE TABLE IF NOT EXISTS $table_name (
//         id mediumint(9) NOT NULL AUTO_INCREMENT,
//         name varchar(100) NOT NULL,
//         email varchar(100) NOT NULL,
//         created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
//         PRIMARY KEY  (id)
//     ) $charset_collate;";

//     require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
//     dbDelta($sql);
// }

// add_action('after_setup_theme', 'create_subscribers_table');
// function handle_subscription_form_submission() {
//     if (isset($_POST['name']) && isset($_POST['email'])) {
//         global $wpdb;

//         // Sanitize and get the form data
//         $name = sanitize_text_field($_POST['name']);
//         $email = sanitize_email($_POST['email']);

//         // Insert subscriber data into the database
//         $table_name = $wpdb->prefix . 'subscribers';
//         $existing_email = $wpdb->get_var($wpdb->prepare("SELECT email FROM $table_name WHERE email = %s", $email));

//         if (!$existing_email) {
//             $wpdb->insert(
//                 $table_name,
//                 array(
//                     'name' => $name,
//                     'email' => $email,
//                 ),
//                 array('%s', '%s')
//             );
//             echo '<p>Thank you for subscribing!</p>';
//         } else {
//             echo '<p>You are already subscribed!</p>';
//         }
//     }
// }

// add_action('wp', 'handle_subscription_form_submission');
// function notify_subscribers_on_new_post($post_ID, $post) {
//     if ($post->post_status != 'publish') {
//         return;
//     }

//     global $wpdb;
//     $table_name = $wpdb->prefix . 'subscribers';
//     $subscribers = $wpdb->get_results("SELECT * FROM $table_name");

//     $subject = 'New Post Published: ' . get_the_title($post_ID);
//     $message = 'Hello,

// We have published a new post: ' . get_the_title($post_ID) . '

// Check it out here: ' . get_permalink($post_ID) . '

// Thank you for subscribing to Outfit\'Opulence!';

//     foreach ($subscribers as $subscriber) {
//         wp_mail($subscriber->email, $subject, $message);
//     }

//     return $post_ID;
// }

// add_action('publish_post', 'notify_subscribers_on_new_post', 10, 2);


?>