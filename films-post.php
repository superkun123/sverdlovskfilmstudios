<?php
/*
Template Name: Фильм
Template Post Type: post
*/
get_header();
?>




<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="film-post">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <figure class="post-thumb">
          <?php echo the_post_thumbnail();?>
        </figure>
      </div>
      <div class="col-md-6">
      <div class="post-text">
  <h2><?php the_title() ?></h2>
  <p><?php the_content()?></p>
</div>
</div>
    </div>
    <div class="row justify-content-center">
  <div class="col-md-12 trailer-col">
  <h2>Смотреть трейлер</h2>
 <?php echo the_field ('trailer') ?>
  </div>
</div>
  </div>
</section>
</div>
<?php endwhile; else : ?>
<p>Записей нет.</p>
<?php endif; ?>

<?php
get_footer()
?>