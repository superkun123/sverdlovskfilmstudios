<?php
/*
Template Name: Новость
Template Post Type: post
*/
get_header();
?>




<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="film-post">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <figure class="post-thumb">
          <?php echo the_post_thumbnail();?>
        </figure>
      </div>  
      <div class="col-md-12">
      <div class="post-text">
  <h2><?php the_title() ?></h2>
  <p><?php the_content()?></p>
  <!-- <a href="<?php the_permalink()?>">Подробнее</a> -->
</div>
<?php if (get_field('form', $term)) { 
                      ?>
  
                       <h2>Свяжитесь с нами!</h2>
                      <div class="row form-container">
                        <div class="col-md-6">
                       <?php echo do_shortcode('[contact-form-7 id="117" title="Шаблон контактной формы"]') ?> 
                       </div>
                       <div class="col-md-6">
                       <figure>
                       <img src="<?php echo get_template_directory_uri() ?>/img/call.png" alt="">
                       </figure>
                       </div>
                     
                       </div>
                    <?php 
                                 } // end if value
                     ?>

      </div>
    </div>
    <?php if (get_field('картинка_1', $term)) { 
      ?>
    <div class="row slider">
      <div class="col-lg-12"><h2>Галерея</h2></div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="<?php the_field ('картинка_1') ?>" class="d-block w-100" alt="...">
            </div>
              <?php if (get_field('картинка_2', $term)) { 
                ?>
                 <div class="carousel-item">
                    <img src="<?php the_field ('картинка_2') ?>" class="d-block w-100" alt="...">
                 </div>
              <?php 
                           } // end if value
               ?>
                 <?php if (get_field('картинка_3', $term)) { 
                ?>
                 <div class="carousel-item">
                    <img src="<?php the_field ('картинка_3') ?>" class="d-block w-100" alt="...">
                 </div>
              <?php 
                           } // end if value
               ?>
                 <?php if (get_field('картинка_4', $term)) { 
                ?>
                 <div class="carousel-item">
                    <img src="<?php the_field ('картинка_4') ?>" class="d-block w-100" alt="...">
                 </div>
              <?php 
                           } // end if value
               ?>
                 <?php if (get_field('картинка_5', $term)) { 
                ?>
                 <div class="carousel-item">
                    <img src="<?php the_field ('картинка_5') ?>" class="d-block w-100" alt="...">
                 </div>
                <?php 
                           } // end if value
               ?>
                <?php if (get_field('картинка_6', $term)) { 
                ?>
                 <div class="carousel-item">
                    <img src="<?php the_field ('картинка_6') ?>" class="d-block w-100" alt="...">
                 </div>
                <?php 
                           } // end if value
               ?>
                <?php if (get_field('картинка_7', $term)) { 
                ?>
                 <div class="carousel-item">
                    <img src="<?php the_field ('картинка_7') ?>" class="d-block w-100" alt="...">
                 </div>
                <?php 
                           } // end if value
               ?>
                <?php if (get_field('картинка_8', $term)) { 
                ?>
                 <div class="carousel-item">
                    <img src="<?php the_field ('картинка_8') ?>" class="d-block w-100" alt="...">
                 </div>
                <?php 
                           } // end if value
               ?>
                <?php if (get_field('картинка_9', $term)) { 
                ?>
                 <div class="carousel-item">
                    <img src="<?php the_field ('картинка_9') ?>" class="d-block w-100" alt="...">
                 </div>
                <?php 
                           } // end if value
               ?>
                <?php if (get_field('картинка_10', $term)) { 
                ?>
                 <div class="carousel-item">
                    <img src="<?php the_field ('картинка_10') ?>" class="d-block w-100" alt="...">
                 </div>
                <?php 
                           } // end if value
               ?>
                
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
  </div> 
  <?php 
} // end if value
?>
  </div>
</section>
</div>
<?php endwhile; else : ?>
<p>Записей нет.</p>
<?php endif; ?>

<?php
get_footer()
?>