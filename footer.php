<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SFS
 */

?>

<footer>
  <div class="container-fluid">
    <div class="footer-wrap row justify-content-space-between">

      <div class="col-lg-4 label">
        <h2>Свердловская киностудия</h2>
      </div>
      <div class="offset-lg-4 col-lg-4 contacts">
        <h2>Контакты</h2>
        <a href="tel:+73433500040">+7 (343) 350-00-40 </a>
        <a href="tel:+73433500015">+7 (343) 350-00-15</a>
        <p >info@stranamedia.com</p>
      </div>

    </div>
  </div>   
</footer>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>


<!-- модалки с фильмами -->

<div class="modal fade yt-player yt-player-1" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <iframe class="trailer1" id="player" width="100%" height="100%" src="https://www.youtube.com/embed/3n-wdab41GE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

<div class="modal fade yt-player yt-player-2" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <iframe class="trailer2" width="100%" height="100%" src="https://www.youtube.com/embed/BOMsHD5Xak4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
      </div>
    </div>
  </div>
</div>

<div class="modal fade yt-player yt-player-3" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <iframe class="trailer3" width="100%" height="100%" src="https://www.youtube.com/embed/OQ99gY1NaMQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

<div class="modal fade yt-player yt-player-4" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <iframe class="trailer4" width="100%" height="100%" src="https://www.youtube.com/embed/aZhVYv2D_es" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

<div class="modal fade yt-player yt-player-5" id="exampleModalCenter4" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe class="trailer5" width="100%" height="100%" src="https://www.youtube.com/embed/NUCJv0K59d4"
          frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen=""></iframe>
      </div>
    </div>
  </div>
</div>

<div class="modal fade yt-player yt-player-6" id="exampleModalCenter6" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <iframe class="trailer6" width="100%" height="100%" src="https://www.youtube.com/embed/RpuYx6utC2M" frameborder="0" 
      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

<!-- модалка для рекламы -->
<div class="modal fade yt-player commertial" id="exampleModalCenter10" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img  class="desctop-modal-picture" src="<?php echo get_template_directory_uri() ?>/img/commercial.jpg" alt="ожившие полотна">
      <a href="https://r-art.ru/" class="link-commertial-modal"><button class="permalink">Подробнее</button></a>
      <div class="text-content">
        <div class="header-content">
      <img src="<?php echo get_template_directory_uri() ?>/img/bg-mobile.png" alt="ожившие полотна">
      </div>
      <div class="body-content">
        <h2>АЙВАЗОВСКИЙ<br> ГЕНИЙ И МОРЕ</h2>
        <p>Прикоснись к великому искусству</p>
        <p class="date">24 февраля - 26 апреля</p>
        <p>Свердловская киностудия <br> Ленина, 50 Ж <br> Большой Павильон</p>
        <a href="https://r-art.ru/"><button class="permalink">Подробнее</button></a>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>








<!-- модалки для контактных форм в меню -->
<div class="modal fade modal-form" id="exampleModalCenter9" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <h2>Отправить сценарий</h2>
          <div class="row">
            <div class="col-md-6">
              <?php echo do_shortcode('[contact-form-7 id="185" title="Контактная форма Сценарий"]') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="modal fade modal-form" id="exampleModalCenter7" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <h2>Отправить резюме</h2>
          <div class="row">
            <div class="col-md-6">
              <?php echo do_shortcode('[contact-form-7 id="187" title="Контактная форма Резюме"]') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="modal fade modal-form" id="exampleModalCenter8" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <h2>Отправить письмо по услугам</h2>
          <div class="row">
            <div class="col-md-6">
              <?php echo do_shortcode('[contact-form-7 id="188" title="Контактная форма Услуги"]') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(57744277, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/57744277" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	<?php wp_footer(); ?>
  </body>
</html>



