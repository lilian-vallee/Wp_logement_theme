<?php
  get_header();
?>

<div class="Content_page">
  <h1>Accueil</h1>

<h2>Nouveaux logement diponible :</h2>

<div class="list_logement_item">

  <?php
    $query = new WP_Query( array( 'post_type' => 'Logement', 'posts_per_page' => '6' ) );
      if ($query->have_posts()) :
        while ( $query->have_posts() ) :
          $query->the_post();
          ?>

        <div class="Logement_item">
                    <a href="<?php the_permalink() ?>">
            <?php the_post_thumbnail('thumbnail'); ?>
          </a>
          <p>
            <a href="<?php the_permalink() ?>">
              <h4><?php the_title() ?></h4>
            </a>
            <?php the_field("prix") ?> € | <?php the_field("surface") ?> m²
          </p>
        </div>

      <?php
        endwhile;
    endif;
    ?>

</div>


</div>

<?php
  get_footer();
 ?>
