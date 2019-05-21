<?php
/*
Template Name: Historias Mezcal Carreno
*/
get_header(); ?>

<div class="content-container">

  <!-- Tarjetas historias -->
  <div class="col-12">

    <div class="col-12">

      <?php
      $empty = array(
        'empty_es' => 'No hay historias sobre Mezcal Carreno',
        'empty_en' => 'No Mezcal Carreño Histories to show'
      );
      $empty_txt;
      if (get_locale() == 'es_MX'):
        $empty_txt = $empty['empty_es'];
        ?>
        <div class="col-12">

          <p>El Mezcal Carreño se inició en 1904 con Don Apolonio Carreño, el Mezcal se hacía de los agaves silvestres que crecían naturalmente en su propiedad, tierra que irónicamente en algunas parcelas, se usaba para cultivar caña de azúcar y se vendía a la familia de los productores de ron más grandes del país.</p>
          <p>En la Hacienda Carreño se hacían tres grandes fiestas al año, la primera, en el cumpleaños de Apolonio en febrero; la segunda, al finalizar la molienda de la caña de azúcar en abril y, la tercera, con la pizca de la mazorca casi al final del año. Hoy, se mantiene viva la tradición de hacer mezcal, conservando el proceso ancestral y artesanal original utilizando plantas orgánicas.</p>
          <p>Queremos compartir la cultura, tradición y herencia de la familia Carreño, desde nuestro terruño en San Dionisio Ocotlán, un pueblo de tan solo 1,000 habitantes en los Valles Centrales de Oaxaca, el Mezcal sigue elaborándose con técnicas tradicionales y sagradas que se transmiten de generación en generación.</p>
          <p>Dicen que tú no encuentras al Mezcal, el Mezcal te encuentra a ti.</p>

        </div>
      <?php elseif (get_locale() == 'en_GB'):
        $empty_txt = $empty['empty_en'];
        ?>

        <div class="col-12">

          <p>Mezcal Carreño was founded in 1904 by Don Apolonio Carreño. At that time, he made Mezcal from the wild agaves that grew naturally on his property, land that ironically in some areas was used to grow sugarcane and it was sold to one of the biggest rum producers in the country.</p>
          <p>Each year, there were three big parties at Hacienda Carreño. The first was during Apolonio's birthday on February 8th; the second party was held at the end of the sugar cane milling during April and the third started with the corn recollection at the end of the year. Nowadays, the tradition is alive because the family keeps making mezcal and preserves the original artisanal process by using organic plants that are harvested on their fields.</p>
          <p>We want to share the culture, tradition and heritage of the Carreño family from our terroir in San Dionisio Ocotlán, a town of only 1,000 inhabitants in the Central Valleys of Oaxaca. Our Mezcal continues its elaboration with traditional and sacred techniques that has been transmitted from generation to generation.</p>
          <p>They say that you do not find Mezcal, Mezcal finds you.</p>

        </div>

      <?php endif; ?>
    </div>
  </div>
  <!--  -->
  <div class="container">

    <?php
    $args = array(
      'post_type' => 'historias',
      'posts_per_page' => -1,
      'order' => 'ASC'
    );
    $q = new WP_Query($args);
    if ($q->have_posts()):
      ?>

      <?php
      while ($q->have_posts()): $q->the_post();
      $shortcode = get_the_content();
      ?>
      <div class="historia_item col-12 col-sm-6 col-md-4 col-lg-3">



        <div class="historia_item_wrap row">

          <?php echo do_shortcode($shortcode); ?>

          <div class="historia_item_txt col-12">
            <h4 class="col-12 no-padding text-center">
              <?php echo get_the_title(); ?>
            </h4>
          </div>


        </div>
        <div id="" class="historia_item_pic imgLiquid imgLiquidFill">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Historia Mezcal Carreño">
        </div>
      </div>

      <?php
    endwhile;
  else:
    ?>

    <h1 class="col-12 text-center"><?php echo $empty_txt; ?></h1>

  <?php endif; ?>

</div>
<!--  -->
</div>
<?php get_footer(); ?>
