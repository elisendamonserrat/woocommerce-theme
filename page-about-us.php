<?php /* Template Name: About us */ ?>

<?php get_header(); ?>

<main>
  <?php
    echo do_shortcode('[smartslider3 slider="5"]');
  ?>
  <div class="content container">
    <section class="section" id="empresa"> 
      <h2>La empresa</h2>
      <p>Empresa creada en 1954 por J.Ma Monserrat y D.José Fancelli,bajo el nombre de MONSERRAT Y FANCELLI SRC para la producción de lonetas.</p>
      <p>En 1970 cambia su razón social a TEJIDOS EUROPA,S.A. y amplia su producción con tejidos para tapicería de oficina,hogar y marroquinería.</p>
      <p>En 1993, llega a un acuerdo de colaboración con la firma alemana Krall & Roth.GmbH Co.K.G. para la producción es España de tejidos para oficina y Contract.</p>
      <p>En 1995, absorbe la firma TEJIDOS ESPECIALES RAIMON, especializada en tejidos jacquard de alta definición.</p>
      <p>Desde esta fecha seguimos produciendo los mencionados artículos para los mercados, español, alemán, inglés, sudeste asiático, francés y otros.</p>
    </section>
    <section class="section" id="fabrica"> 
      <h2>La fabrica</h2>
      <p>Situados cerca de Barcelona en Llissá De Vall, disponemos de un parque de maquinaria, compuesto por telares Dornier neumáticos y de pinza, equipados con Jacquard y maquineta de lizos. 
        Además en nuestras instalaciones hay dos urdidores seccionales, bobinadoras, máquinas de inspección y otros complementos auxiliares.</p>
      <p>Además del moderno parque productivo contamos con un laboratorio de control de calidad para la supervisión de las materias primas, como del producto final. Dicho laboratorio está equipado con fotocolorímetro digital, martindale, dinamómetro, cámara de luces, torsiómetro, balanzas de precisión y otros de control.</p>
      <p>Tenemos una estructura humana dinámica, la empresa produce tejidos para sus propias colecciones y una gran parte para especificaciones de sus clientes. Para poder satisfacer estas necesidades en nuestras instalaciones, disponemos de un almacén de materias primas 150 referencias de hilatura con su colorido y producto acabado, y también para servicio metraje.</p>
    </section>
    <section id="marcas"> 
      <h2>Nuestras marcas</h2>
      <div class="brands__container">
        <div class="brand">
          <div class="brand__img">
            <img src="<?php bloginfo('template_directory');?>/images/condal.png">
          </div>
          <div class="brand__text">
            <h3>Condal</h3>
            <p>Marca introducida en el mercado desde 1970, de reconocido prestigio en tejidos para tapicería en base a fibras acrílicas, poliéster,algodón viscosa, lino, trevira CS, polipropileno, acetato, poliamidas, etc. 
            En la actualidad producimos tejidos para diversas aplicaciones para decoración, cortinas, mueble de oficina, tejidos para exterior, tejidos técnicos, contract, etc. 
            También tejidos exclusivos a petición de nuestros clientes. Dicho proceso lleva un desarrollo compartido.</p>
          </div>
        </div> <!-- Brand Condal -->
        <div class="brand">
          <div class="brand__img">
            <img src="<?php bloginfo('template_directory');?>/images/ter.png">
          </div>
          <div class="brand__text">
            <h3>Tejidos Especiales Raimond</h3>
            <p>Marca proveniente de la firma del mismo nombre, especializada durante muchos años en la fabricación, de telas Jacquard para tapicería, corbatería, logotipo de anagramas especiales, imagen corporativa empresas, forros con anagrama, confección, etc. 
            En alta definición. La característica de su definición se consigue a una densidad de más 100 hilos por cm. , trabajados en Jaquard e entrelazados con ocho tramas diferentes nos permiten obtener efectos fotográficos.
            Se realizan pedidos de cantidades pequeñas y plazo de entrega corto.</p>
          </div>
        </div> <!-- Brand Tejidos Especiales Raimond -->
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>