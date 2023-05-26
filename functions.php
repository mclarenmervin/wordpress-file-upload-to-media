<?php
function custom_image_upload_shortcode($atts) {
    ob_start();
    ?>
    <form action="<?php echo get_stylesheet_directory_uri() ?>/process_upload.php" method="post" enctype="multipart/form-data">
      Your Photo: <input type="file" name="profile_picture" />
      <input type="submit" name="submit" value="Submit" />
    </form>
    <?php
    return ob_get_clean();
}
add_shortcode('custom_image_upload', 'custom_image_upload_shortcode');
