<header class="navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="row">
        <div class="col-xs-6 col-sm-12 text-center">
          <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
            <img class="logo" src="wp-content/themes/HackRoots/assets/img/logo.png" alt="">
          </a>
        </div>
      </div>
    </div>
    <nav id="categorias" class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('header_menu_left')) :
          wp_nav_menu(array('theme_location' => 'header_menu_left', 'menu_class' => 'nav navbar-nav','after' => '<div class="caret_header"><span></span></div>'));
        endif;
      ?>
      <?php
        if (has_nav_menu('header_menu_right')) :
          wp_nav_menu(array('theme_location' => 'header_menu_right', 'menu_class' => 'nav navbar-nav navbar-right','after' => '<div class="caret_header"><span></span></div>'));
        endif;
      ?>
    </nav>
    <div class="caret_header_2"></div>
  </div>
  <div class="caret_header_3"></div>
</header>