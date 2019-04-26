<?php
/*
Template Name: Historias Mezcal Carreno
*/
get_header(); ?>
<div class="content-container">
  <!-- Tarjetas historias -->

  <div class="row">

    <div class="col-12">

      <?php
      if (get_locale() == 'es_MX'):
        ?>
        <div class="col-12">
          <p>El Mezcal Carreño se inició en 1904 con Don Apolonio Carreño, el Mezcal se hacía de los agaves silvestres que crecían naturalmente en su propiedad, tierra que irónicamente en algunas parcelas, se usaba para cultivar caña de azúcar y se vendía a la familia de los productores de ron más grandes del país.</p>

          <p>En la Hacienda Carreño se hacían tres grandes fiestas al año, la primera, en el cumpleaños de Apolonio en febrero; la segunda, al finalizar la molienda de la caña de azúcar en abril y, la tercera, con la pizca de la mazorca casi al final del año. Hoy, se mantiene viva la tradición de hacer mezcal, conservando el proceso ancestral y artesanal original utilizando plantas orgánicas.</p>

          <p>Queremos compartir la cultura, tradición y herencia de la familia Carreño, desde nuestro terruño en San Dionisio Ocotlán, un pueblo de tan solo 1,000 habitantes en los Valles Centrales de Oaxaca, el Mezcal sigue elaborándose con técnicas tradicionales y sagradas que se transmiten de generación en generación.</p>

          <p>Dicen que tú no encuentras al Mezcal, el Mezcal te encuentra a ti.</p>

        </div>
      <?php elseif (get_locale() == 'en_GB'):?>

        <div class="col-12">
          <p>INGLES: El Mezcal Carreño se inició en 1904 con Don Apolonio Carreño, el Mezcal se hacía de los agaves silvestres que crecían naturalmente en su propiedad, tierra que irónicamente en algunas parcelas, se usaba para cultivar caña de azúcar y se vendía a la familia de los productores de ron más grandes del país.</p>

          <p>En la Hacienda Carreño se hacían tres grandes fiestas al año, la primera, en el cumpleaños de Apolonio en febrero; la segunda, al finalizar la molienda de la caña de azúcar en abril y, la tercera, con la pizca de la mazorca casi al final del año. Hoy, se mantiene viva la tradición de hacer mezcal, conservando el proceso ancestral y artesanal original utilizando plantas orgánicas.</p>

          <p>Queremos compartir la cultura, tradición y herencia de la familia Carreño, desde nuestro terruño en San Dionisio Ocotlán, un pueblo de tan solo 1,000 habitantes en los Valles Centrales de Oaxaca, el Mezcal sigue elaborándose con técnicas tradicionales y sagradas que se transmiten de generación en generación.</p>

          <p>Dicen que tú no encuentras al Mezcal, el Mezcal te encuentra a ti.</p>

        </div>

      <?php endif; ?>
    </div>
  </div>
  <!--  -->
  <div class="container">

    <?php
    $args = array(
      'post_type' => 'historias'
    );
    $q = new WP_Query($args);

    if ($q->have_posts()):
      while ($q->have_posts()): $q->the_post();
      ?>

      <div id="historia_item" class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div id="historia_item_pic" class="">
          <!-- foto fondo -->
          <img src="<<?php echo get_the_post_thumbnail_url(); ?>" alt="Historia Mezcal Carreño">
        </div>
        <div class="">
          <h2 class="col'12">
            <?php echo get_the_title(); ?>
          </h2>
        </div>
      </div>

      <?php
    endwhile;
  else:
    ?>

    <h1 class="col-12">No hay historias sobre Mezcal Carreno</h1>

  <?php endif; ?>

</div>
<!--  -->

</div>
<?php get_footer(); ?>
