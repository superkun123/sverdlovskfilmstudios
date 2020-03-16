<?php
/*
Template Name: Костюмы
Template Post Type: page
*/
get_header();
?>


<section class="dress">
  <div class="container-fluid">
    <div class="row">
    <div class="col md-12">
          <h2 class='main-title'>Костюмы и реквизиты</h2>
      </div>
    </div>
      <div class="row blog-row">
      <div class="col-md-3 dress-img-container">
          <figure class="dressFigure">
            <img src="<?php echo get_template_directory_uri() ?>/img/dress1.png" alt="">
          </figure>
      </div>
      <div class="col-md-3 dress-img-container">
        <figure class="dressFigure">
          <img src="<?php echo get_template_directory_uri() ?>/img/dress2.png" alt="">
        </figure>
      </div>
      <div class="col-md-3 dress-img-container">
        <figure class="dressFigure">
          <img src="<?php echo get_template_directory_uri() ?>/img/dress3.png" alt="">
        </figure>
      </div>
      <div class="col-md-3 dress-img-container">
        <figure class="dressFigure">
          <img src="<?php echo get_template_directory_uri() ?>/img/dress4.png" alt="">
        </figure>
      </div>
      <div class="col-md-3 dress-img-container">
        <figure class="dressFigure">
          <img src="<?php echo get_template_directory_uri() ?>/img/dress5.png" alt="">
        </figure>
    </div>
    <div class="col-md-3 dress-img-container">
      <figure class="dressFigure">
        <img src="<?php echo get_template_directory_uri() ?>/img/dress6.png" alt="">
      </figure>
    </div>
    <div class="col-md-3 dress-img-container">
      <figure class="dressFigure">
        <img src="<?php echo get_template_directory_uri() ?>/img/dress7.png" alt="">
      </figure>
    </div>
    <div class="col-md-3 dress-img-container">
      <figure class="dressFigure">
        <img src="<?php echo get_template_directory_uri() ?>/img/dress8.png" alt="">
      </figure>
    </div>
  </div>

    <div class="container">
    <div class="row form-container">
      <div class="col-md-6">
        <h2>Оставить заявку на аренду</h2>
        <h3>Телефон: +7 (909) 011-36-63</h3>
     <?php echo do_shortcode('[contact-form-7 id="212" title="Шаблон формы в костюмы"]') ?> 
     </div>
     <div class="col-md-6 form-photo-container">
     <figure>
     <img src="<?php echo get_template_directory_uri() ?>/img/download.jpg" alt="">
     </figure>
     </div>
     </div>
   
     </div>

    </div>
  </div>
  
</section>

<?php
get_footer()
?>