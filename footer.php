<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Article_19
 */

?>


<!-- BEGIN NEWSLETTER RESPONSIVE SECTION -->
    <div class="hidden-lg hidden-md hidden-sm section news-letter-desktop-box">
      <div class="container">
        <div class="row">
            <h3 class="newsletter-custom-element newsletter-text-responsivo">Receba nosso boletim!</h3>
          </div>
        <div class="row">
          <div class="col-md-12">
            <form role="form" class="">
              <div class="form-group newsletter-text">
                <label class="control-label" for="exampleInputEmail1">Nome</label>
                <input class="form-control" id="exampleInputEmail1" placeholder="NOME"
                type="email">
              </div>
              <div class="form-group newsletter-text">
                <label class="control-label" for="exampleInputPassword1">E-mail</label>
                <input class="form-control" id="exampleInputPassword1" placeholder="E-MAIL"
                type="password">
              </div>
              <button type="submit" class="btn btn-default">Assinar!</button>
            </form>
          </div>
        </div>
      </div>
    </div>

<!-- END NEWSLETTER RESPONSIVE SECTION -->
<!-- BEGIN mapa-site SECTION -->
                <div id="mapa-site">
                    <div class="container hidden-xs">
                        <div class="row">
                            <div class="col-sm-2">

                             <?php

                                $defaults = array(
                                    'theme_location'  => '',
                                    'menu'            => 'menu-1',
                                    'container'       => 'div',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => 'menu',
                                    'menu_id'         => '',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav footer-links">%3$s</ul>',
                                    'depth'           => 0,
                                    'walker'          => ''
                                );

                                wp_nav_menu( $defaults );

                            ?>
        


                            </div>
                            <div class="col-sm-2">
                                <span class="footer-links">
                                      <a href="#">Programas</a><br>
                                </span>

                                <?php wp_nav_menu( array( 'menu' => 'programas', 'link_before' => '<h5><i class="fa fa-angle-right fa-fw fa-lg text-warning pull-left"></i>', 'link_after' => '</h5>' ) ); ?>
                            </div>
                            <div class="col-sm-3">
                                <span class="footer-links">
                                    <a href="#">Quem somos</a><br>
                                </span>
                                <?php wp_nav_menu( array( 'menu' => 'quem-somos', 'link_before' => '<h5><i class="fa fa-angle-right fa-fw fa-lg text-warning pull-left"></i>', 'link_after' => '</h5>' ) ); ?>

                            </div>
                            <div class="col-sm-3">
                                <span class="footer-links">
                                    <?php wp_nav_menu( array( 'menu' => 'contato' ) ); ?>
                                </span>
                            </div>
                            <div class="col-sm-2">
                                <a><i class="fa fa-2x fa-fw text-warning fa-angle-double-up pull-left"></i></a>
                                <span class="footer-links">
                                    <a href="#">Topo</a>
                                </span><br>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
<!--END mapa-site SECTION -->
<!--BEGIN FOOTER SECTION -->
                <footer class="section section-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <span class="footer-highlight">ARTIGO19 Brasil</span><br><br>
                                <span class="footer-text"><i class="fa fa-1x fa-fw fa-map-marker text-inverse"></i>Edifício das Bandeiras Rua João Adolfo, 118 - conjunto 802 - São Paulo/SP</span><br>
                                <span class="footer-text"><i class="fa fa-1x fa-fw fa-phone text-inverse"></i>+55 (11) 3057 0042</span><br>
                                <span class="footer-text"><i class="fa fa-1x fa-fw fa-envelope text-inverse"></i> comunicacao (arroba) artigo19.org</span><br>
                                <br><br>
                            </div>
                        </div>
                                             
                                <div class="row">
                                    <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                                        <a href="https://instagram.com/artigo19"><i class="fa fa-2x fa-fw fa-instagram text-inverse"></i></a>
                                        <a href="https://twitter.com/artigo19"><i class="fa fa-2x fa-fw fa-twitter text-inverse"></i></a>
                                        <a href="https://www.facebook.com/artigo19brasil"><i class="fa fa-2x fa-fw fa-facebook text-inverse"></i></a>
                                        <a href="#RSS"><i class="fa fa-2x fa-fw text-inverse fa-rss-square"></i></a>

                                  <br><br>
                                   </div> 
                                </div>
                          <div class="row">                         
                               <div class="col-md-12 hidden-xs">
                                  <div class="text-left"><a href="http://creativecommons.org/licenses/by/3.0/br/"><img src="https://licensebuttons.net/l/by/3.0/br/80x15.png"></a><span class="copyright"> Licença: Creative Commons - 3.0.</span>
                                  </div> 
                                  <div class="text-right">
                                        <a href="https://instagram.com/artigo19"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                                        <a href="https://twitter.com/artigo19"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                                        <a href="https://www.facebook.com/artigo19brasil"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                                        <a href="#"><i class="fa fa-3x fa-fw text-inverse fa-rss-square"></i></a>
                                   </div>
                                </div>
                                  
                          </div>
                        </div>
                              <!--  </div>
                            </div>
                        </div>-->
                    </div>
                </footer>


<!-- BEGIN FOOTER NEWSLETTER DESKTOP -->
<div id="footer-bar" class="section hidden-xs">
    <div class="section hidden-xs">
     <div id="footer-news-letter">
      <div class="container">
        <div class="row">

          <div class="col-md-12 text-center">
    <p class="newsletter-custom-element newsletter-text text-center">Receba nosso boletim!</p>
    <form role="form">
                <input class="newsletter-custom-element text-center" type="text" placeholder="NOME">
                <input class="newsletter-custom-element text-center" type="text" placeholder="E-MAIL">
                <span class="newsletter-custom-element input-group-btn text-center">
                  <a class="btn-news" type="submit">Assinar!</a>
                </span>
                </form>
         </div>
       </div>
</div>
              <div style=""><span class="button-close-footer fa fa-2x fa-times-circle-o text-inverse" onclick="$('#footer-bar').toggle();"></span></div>
      </div>


<!--
<div id="footer-bar" class="section hidden-xs">
     <div id="footer-news-letter">
      <div class="container">
        <div class="row">

          <div class="col-md-12 text-center">
        <p class="newsletter-custom-element text-center newsletter-text">Receba nosso boletim!</p>
        <form role="form">
                <input class="newsletter-custom-element text-center" type="text" placeholder="NOME">
                <input class="newsletter-custom-element text-center" type="text" placeholder="E-MAIL">
                <span class="newsletter-custom-element input-group-btn text-center">
                    <a class="btn-news" type="submit">Assinar!</a>
                </span>
                </form>

      </div>

     </div>
        </div>
      </div>

    </div>
-->

<!-- FIM FOOTER NEWS LETTER para DESKTOP -->

<!--
            </div>
        </div>
  -->    


<?php wp_footer(); ?>

</body>
</html>
