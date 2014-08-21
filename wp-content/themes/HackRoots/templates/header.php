<?php
    // Get the ID of a given category
    $category_id = get_cat_ID( 'noticias' );

    // Get the URL of this category
    $category_link = get_category_link( $category_id );
?>
<header class="navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <div class="row">
        <div class="col-xs-6 col-sm-12 text-center">
          <a class="navbar-brand" href="<?php echo $category_link; ?>">
            <img class="logo" src="wp-content/themes/HackRoots/assets/img/logo.png" alt="">
          </a>
        </div>
      </div>
    </div>
    <nav id="categorias" class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <?php
        if(!is_page_template('template-profile.php')){
          if(is_user_logged_in()){
            if (has_nav_menu('header_menu')){
              wp_nav_menu(array('theme_location' => 'header_menu', 'menu_class' => 'nav navbar-nav','after' => '<div class="caret_header"><span></span></div>'));
            }
            if (has_nav_menu('header_logged')){
              wp_nav_menu(array('theme_location' => 'header_logged', 'menu_class' => 'nav navbar-nav navbar-right','after' => '<div class="caret_header"><span></span></div>'));
            }
          }else{
            if (has_nav_menu('header_not_logged')){
              wp_nav_menu(array('theme_location' => 'header_not_logged', 'menu_class' => 'nav navbar-nav navbar-right','after' => '<div class="caret_header"><span></span></div>'));
            }
          }
        }        
      ?>
    </nav>
    <div class="caret_header_2"></div>
    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <div class="caret_header_3"></div>
</header>