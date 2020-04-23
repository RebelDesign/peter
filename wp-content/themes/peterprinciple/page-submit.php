<?php
/**
 *
 * Template Name: Submit Page Template
 */

get_header();
$shortcode = get_field('submit_code');
?>
<div class="container mt-5 pt-5">
  <div class="row">
    <div class="col text-center">
      <?php echo do_shortcode($shortcode); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
