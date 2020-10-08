<?php
/**
 * The component that handles the post loop.
 */
?>
<div class="container my-3 py-3">
  <div class="row border border-primary rounded p-3">
      <article <?php post_class(); ?> >

        <h1><?php the_title(); ?></h1>
        <div class="col-12 p-0">
          <h6> Author: <?php echo get_field('complaint_author'); ?> </h6>
          <h6 class="d-flex"> Category: <?php the_category('|'); ?></h6>
          <p> <?php get_the_date(); ?>
        </div>

        <?php the_post_thumbnail(); ?>

        <?php the_content(); ?>

        <a href="<?php echo  get_post_permalink(); ?>"> <?php get_comments_number(); ?> </a>

        <div class="row">
          <div class="col-6">
            <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
          </div>
        <div class="col-6 text-right">
          <?php Components\View::render('post', 'share'); ?>
        </div>

      </div>
      </article>
  </div>
</div>
