<?php
/*
Template Name: Historias Mezcal Carreno
*/
get_header(); ?>
<div class="content-container">
  <!-- Tarjetas historias -->

  <div class="row">
    <div class="col-12 text-center">
      <p></p>
    </div>
  </div>
  <?php
  if (have_posts()):
    while (have_posts()): the_post();
    ?>



    <?php
  endwhile;
else:
  ?>

  <h1>No hay historias sobre Mezcal Carreno</h1>

<?php endif; ?>

</div>
<?php get_footer() ?>
