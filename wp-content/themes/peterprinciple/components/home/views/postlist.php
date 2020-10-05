<a href="<?php echo  get_post_permalink(); ?>">
<div class="container my-3 py-3">
  <div class="row border border-primary rounded p-3">
      <article <?php post_class(); ?> >

        <h1><?php the_title(); ?></h1>
        <div class="col-12 p-0">
          <h5> Author: <?php echo get_field('complaint_author'); ?> </h5>
          <p> <?php get_the_date(); ?>
        </div>

        <?php the_post_thumbnail(); ?>

        <?php the_content(); ?>
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
</a>
