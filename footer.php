    <footer>
      <div class="container">
        <div class="footer__cols">
          <div class="footer__cols__col">
            <img src="<?php bloginfo('template_directory');?>/images/footer_logo.png" class="footer__logo">
          </div> 
          <div class="footer__cols__col">
            <p class="footer__cols__title">Ayuda y Contacto</p>
            <p>Calle Palaudarias nº 10</p>
            <p> 08185 Llissá de Vall - Barcelona - Spain</p>
            <a href="tel:+34 932 13 19 04">+34 932 13 19 04</a>
            <a href="mailto:tejidoseuropa@tejidoseuropa.com">tejidoseuropa@tejidoseuropa.com</a>
          </div>
          <div class="footer__cols__col">
            <p class="footer__cols__title">Sobre Tejidos Europa</p>
            <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'footer-center',
                  'menu_class' => 'split-y'
                )
              ); ?>
              <a href="http://tejidoseuropa.test/contacto/">Solicitar información</a>
            <p class="footer__cols__title--mt ">Nuestros modos de pago</p>
            <img src="<?php bloginfo('template_directory');?>/images/metodos-pago.png" class="footer__payment-img">
          </div>
        </div>
        <div class="footer__legal">
          <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'footer-legal',
                  'menu_class' => 'footer__legal__ul'
                )
          ); ?>
        </div>
      </div>
    </footer>
  <?php wp_footer(); ?>
  </body>
</html>