<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="header">
        <div class="bandeau_site">
          <img src="http://via.placeholder.com/800x200" alt="bandeau_site">
        <div>
        <nav>
    			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    		</nav>
      </div>
    </header>
