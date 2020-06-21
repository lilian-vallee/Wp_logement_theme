<?php
  get_header();
 ?>

<div class="Content_page">

  <?php the_post() ?>

  <h1><?php the_title() ?></h1>
  <?php the_post_thumbnail('medium') ?>
  <p><?php the_content() ?></p>

  <h3>Logement disponnible :</h3>
  <?php
    $actualVille = get_the_title();
    $query = new WP_Query(array( 'post_type' => 'Logement'));

    while ($query->have_posts()):
      $query->the_post();
      $ville = get_field('ville',get_the_ID());
      if (get_the_title($ville) == $actualVille) :
        ?>

        <div class="Logement_item">
          <a href="<?php the_permalink() ?>">
            <h4><?php the_title() ?></h4>
          </a>
          <a href="<?php the_permalink() ?>">
            <?php the_post_thumbnail('thumbnail'); ?>
          </a>
          <p> <?php the_field("prix") ?> €   <?php the_field("surface") ?> m²</p>
        </div>

      <?php
      endif;
    endwhile;
    wp_reset_query();
    ?>

</div>

<?php
  get_footer();
 ?>
