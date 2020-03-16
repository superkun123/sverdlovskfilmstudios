<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package SFS
 */

/*
Template Name: Фильмы
Template Post Type:  page
*/


get_header();
?>


<main class="blog">
    <div class="container-fluid">
    <div class="row blog-row">
      <div class="col-lg-12">
    <h2>Фильмы</h2>
</div>
<div class="row justify-content-center">
  <div class="col-lg-8 text-center">
    <p>Главной целью Свердловской киностудии было и остается производство художественных, документальных и анимационных фильмов. 
      За последнее 15 лет на базе или при сопровождении киностудии было создано 12 художественных и более 80 документальных лен</p>
  </div>
</div>
<div class="row our-films">
<?php
$posts = get_posts( array(
	'numberposts' => -1,
  'category_name' => 'films',
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
  setup_postdata($post);
  ?>
  <div class="col-lg-3 single-post">
            <figure class="post-thumb">
            <?php echo the_post_thumbnail();?>
            </figure>
            <div class="post-text">
              <h3><?php the_title() ?></h3>
              <p><?php the_excerpt() ?></p>
              <a href="<?php the_permalink()?>">
              <button class="permalink">Подробнее</button>
              </a>
            </div>
            </div>
            <?php
}

wp_reset_postdata(); // сброс
?>
</div>
   </div>
    </div>
</main>




<?php
get_footer();

?>