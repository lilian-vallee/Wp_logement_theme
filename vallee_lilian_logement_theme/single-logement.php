<?php
  get_header();
 ?>

<div class="Content_page">

  <?php the_post() ?>

  <h1><?php the_title() ?></h1>
  <?php the_post_thumbnail('medium') ?>
  <ul>
    <li>
      <p>Surface : <?php the_field('surface') ?> m²</p>
    </li>
    <li>
      <p>Prix : <?php the_field('prix') ?> €</p>
    </li>
    <li>
      <?php if (the_field('frais d\'agence') != 0): ?>
          <p>frais d'agence : <?php the_field('frais d\'agence') ?></p>
      <?php endif; ?>
    </li>
    <li>
      <p>Exposition : <?php the_field('exposition') ?></p>
    </li>
    <li>
      <p>Type : <?php the_field('type') ?></p>
    </li>
    <li>
      <?php $ville = get_field('ville', get_the_ID()); ?>
      <p>Ville : <a href="<?php the_permalink($ville) ?>">
        <?php echo get_the_title($ville) ?>
        </a>
      </p>
    </li>
  </ul>
  <h3>Description : </h3>
  <p><?php the_content() ?></p>


</div>

<?php
  get_footer();
 ?>
