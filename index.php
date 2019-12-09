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
Template Name: Главная
Template Post Type:  page
*/


get_header();
?>

<main>

<section class="slide-films">
<div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 slider">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/img/zoloto.png" alt="First slide">
                        <div class="carousel-caption  d-md-block col-lg-6">
                            <h2 class="film-title" >ЗОЛОТО</h2>
                            <p class="film-date">Проиграл – плати</p>
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="trailer">Смотреть трейлер</a>
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/img/admiral.png" alt="Second slide">
                        <div class="carousel-caption  d-md-block">
                          <h2 class="film-title" >АДМИРАЛЪ</h2>
                          <p class="film-date">ТОП 5 по сборам в кино </p>
                          <p class="sub-title">Разработка и запуск производства</p>
                          <a href="#" data-toggle="modal" data-target="#exampleModalCenter2" class="trailer">Смотреть трейлер</a>
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/img/varvara.png" alt="Third slide">
                        <div class="carousel-caption d-md-block">
                          <h2 class="film-title" >ВАРВАРА</h2>
                          <p class="film-date">Рожденная для любви. Живущая местью</p>
                          <a href="#" data-toggle="modal" data-target="#exampleModalCenter3" class="trailer">Смотреть трейлер</a>
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/img/eger.png" alt="Third slide">
                        <div class="carousel-caption d-md-block">
                          <h2 class="film-title" >Егерь</h2>
                          <p class="film-date">25 млн. зрителей на Первом канале </p>
                          <a href="#" data-toggle="modal" data-target="#exampleModalCenter3" class="trailer">Смотреть трейлер</a>
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/img/FS.png" alt="Third slide">
                        <div class="carousel-caption  d-md-block">
                          <h2 class="film-title" >Профессии будущего</h2>
                          <p class="film-date">Для российских школ</p>
                          <a href="#" data-toggle="modal" data-target="#exampleModalCenter5" class="trailer">Смотреть трейлер</a>
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/img/zabeg.png" alt="Third slide">
                        <div class="carousel-caption  d-md-block">
                          <h2 class="film-title" >Забег</h1>
                          </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/img/buran.png" alt="Third slide">
                        <div class="carousel-caption  d-md-block">
                          <h2 class="film-title" >Буран</h1>
                          </div>
                      </div>
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
          </div>
          </section>

<section class="about" id="about">
  <div class="container-fluid">
      <div class="row justify-content-center sect-title">
          <div class="col-lg-12">
            <h2>Киностудия сегодня</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text">
           <p>СВЕРДЛОВСКАЯ КИНОСТУДИЯ (Sverdlovsk Film Studios) - единственная российская государственная кино-медиакомпания, расположенная в центре России. Главное отличие киностудии в Екатеринбурге от всех российских кинофабрик в том, что она выпускает все форматы кинопродукта – игровое, современное документальное и анимационное кино, и при этом, является творческим кластером, который существует как инфраструктурная и сервисная площадка для малого бизнеса в сфере кино, образования, IT и творческих индустрий. Компанией управляет молодежная команда, которая c удовольствием сотрудничает с опытными кинематографистами, 
             кинокомпаниями, бизнесом, государственными структурами, инновационными творческими бизнес-проектами и начинающими фильммейкерами.</p>
          </div>
        </div>
  </div>
</section>


  <section class="our-films" id="our-films">
    <div class="container-fluid">
        <div class="row justify-content-center sect-title">
            <div class="col-lg-12">
              <h2>Фильмы на киностудии</h2>
            </div>
          </div>
      <div class="row">
      <?php
      $posts = get_posts( array(
	'numberposts' => 8,
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
  </section>


  <section class="history" id="history">
      <div class="container-fluid">
          <div class="row justify-content-center sect-title">
              <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri() ?>/img/stphoto.png" alt="Старая студия">
              </div>
              <div class="col-lg-5 offset-md-1 text">
                  <h2>История киностудии</h2>
               <p>Киностудия основана 9 февраля 1943 года и расположена в Екатеринбурге. Третья площадка кино после Москвы и Петербурга внесла яркий, со своим узнаваемым почерком, творческий вклад в российскую культуру. Практически все великие российские актеры советского периода и времен перестройки снимались на Урале, ряд
                  известнейших российских режиссеров создавали свои фильмы в центре страны.</p>
                <p>За время работы в условиях централизованного государственного управления сферой кино было создано много, действительно, необыкновенных и очень востребованных кинопроектов. Благодаря качеству работы уральцев, многие из снятых картин известны и любимы зрителями и сегодня: «Трембита», «Демидовы», «Приваловские миллионы», «Зеркало для героя», «Сильные духом», «Безымянная звезда», «Найти и обезвредить», «Один и без оружия», «Макаров», «Мафия бессмертна», «Житие Александра Невского», «Охота на единорога», «Перед рассветом»,
                   «Сыщик петербургской полиции», «Четвертая планета», «Я объявляю Вам войну» и многие другие.</p>
              </div>
            </div>
      </div>
    </section>

  <section class="kino-posts" id="kino-posts">
  <div class="container-fluid">
    <div class="row justify-content-center sect-title">
      <div class="col-lg-12">
        <h2>Новости киностудии</h2>
      </div>
    </div>
    <div class="row">
  <?php
$posts = get_posts( array(
	'numberposts' => 6,
  'category_name' => 'news',
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
  <div class="col-lg-4 single-post">
            <figure class="post-thumb">
            <?php echo the_post_thumbnail();?>
            </figure>
            <div class="post-text">
              <h3><?php the_title() ?></h3>
              <p><?php the_excerpt() ?></p>
              <a href="<?php the_permalink()?>">
              <button class="permalink">        Подробнее </button>
              </a>
            </div>
            </div>
            <?php
}

wp_reset_postdata(); // сброс
?>



    </div>
  </div>
  </section>
</main>


<?php
get_footer();

?>