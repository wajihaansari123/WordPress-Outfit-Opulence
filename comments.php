<?php
// Check if the post is password-protected
if (post_password_required()) {
    return;
}
?>

<div class="comments-area">
    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            if ($comment_count === '1') {
                echo "1 Comment";
            } else {
                echo $comment_count . " Comments";
            }
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            // List all the comments
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 50,
            ));
            ?>
        </ol>

        <?php
        // Comment navigation
        the_comments_navigation();
        ?>

    <?php endif; // End if have_comments() ?>

    <?php
    // If comments are closed and there are comments, display a note
    if (!comments_open() && get_comments_number()) :
        ?>
        <p class="no-comments">Comments are closed.</p>
    <?php endif; ?>

    <?php
    // Comment form
    comment_form();
    ?>
</div>
