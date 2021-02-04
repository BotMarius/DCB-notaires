<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title>
    <?php bloginfo('name'); ?> |
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
  </title>
  <!-- Bootstrap core CSS -->
  <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
    integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  <?php wp_head(); ?>
  <style>
    .showcase {
      background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/images/showcase.jpg');
      ?>) no-repeat center center;
    }
  </style>
</head>

<body>


  <nav class="navbar navbar-expand-md navbar-light bg-transparent sticky-top" role="navigation">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
        aria-controls="bs-example-navbar-collapse-1" aria-expanded="false"
        aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
      </button>
      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/logodcb.png" alt=" logo">
      <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
  </nav>



  <div class="siteSection">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 text-left textSection1">
          <h1>Antoine DESVAUX,<br> Laurence CHAUVEAU,<br> Éric BELLIER,<br>
notaires associés</h1>
          <p class="mb-5">Notre Société Civile Professionnelle est titulaire d’un Office Notarial – désormais situé à 21 place La Fayette, au coeur d’Angers, à proximitié de la gare Saint Laud
et de la Cité Administrative...</p>
          <p><a href="#" class="btn btn-primary">En savoir plus</a></p>
        </div>
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="img-years">
            <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/img_1.jpg" alt="Image" class="img-fluid">
            <div class="year">
              <span>3 <span>text<br>text</span></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <section class="boxes">
    <h4>domaine d’activité</h4>
    <h1 class="text-center">Nos compétences</h1>
    <div class="page-wrapper">
      <div class="row pb40">
        <div class="col-md-4 bgBoxe">
          <?php if(is_active_sidebar('box1')) : ?>
          <?php dynamic_sidebar('box1'); ?>
          <?php endif; ?>
        </div>

        <div class="col-md-4 bgBoxe">
          <?php if(is_active_sidebar('box2')) : ?>
          <?php dynamic_sidebar('box2'); ?>
          <?php endif; ?>

        </div>

        <div class="col-md-4 bgBoxe">
          <?php if(is_active_sidebar('box3')) : ?>
          <?php dynamic_sidebar('box3'); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

 

  <section class="homeBiens">
    <h1 class="text-center">Voir tous nos biens</h1>
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-6">

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum
            at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque
            eveniet unde.</p>
        </div>
      </div>
    </div>
  </section>


  <footer>
    <div class="home-footer">
      <div class="page-wrapper">
        <div class="row">

          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <ul class="footer-nav pb20">
              <li id="text-3" class="widget-container widget_text">
                <div class="textwidget">
                  <img class="aligncenter wp-image-5739 size-full"
                    src="http://www.dcbangers-notaires.com/wp-content/uploads/2016/03/logo-full.png" alt="logo-full"
                    style="padding-top:30px;" width="400" height="100"></div>
              </li>
            </ul>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <ul class="footer-nav pb20">
              <li id="text-4" class="widget-container widget_text">
                <div class="textwidget">
                  <h3>dcb - notaires associés - Angers</h3>
                  <p>02 41 88 65 17</p>
                  <p>
                    <a href="dcbangers@notaires.fr">dcbangers@notaires.fr</a>
                  </p>
                  <p>21 place La Fayette C.S. 10354</p>
                  <p>49003 Angers Cedex 1</p>
                  <a href="/mentions-legales/">Mentions légales</a>
                </div>
              </li>
            </ul>
          </div>



          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <ul class="footer-nav pb20">
              <li id="text-5" class="widget-container widget_text">
                <div class="textwidget"><img class="aligncenter wp-image-5739 size-full"
                    src="http://www.dcbangers-notaires.com/wp-content/uploads/2017/01/notaires-transp-white-short.png"
                    alt="logo-full" width="200px"></div>
              </li>
            </ul>
          </div>


        </div>
        <div class="copyright">© Tous droits réservés / Créé par GlobalReso / Boosté par Soqrate</div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
</body>

</html>