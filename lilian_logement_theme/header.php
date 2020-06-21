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
        </div>
        <nav class="navigation">
          <a href="" class="navigation_link">Accueil</a>
    			<?php
          $query = new WP_Query( array( 'post_type' => 'Ville'));
            if ($query->have_posts()) :
              while ( $query->have_posts() ) :
                $query->the_post();
           ?>
           <a href="<?php the_permalink(); ?>" class="navigation_link"><?php the_title(); ?></a>
           <?php
              endwhile;
            endif;
       ?>
    		</nav>
      </div>
    </header>
