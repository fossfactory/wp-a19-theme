<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Article_19
 */

get_header(); ?>

	
        

<!-- INICIO carrossel para DESKTOP -->

        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="carroussel-a19" data-interval="3000" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">


                                <div class="item active">
                                    <img src="http://localhost/article19/wp-content/uploads/2015/12/foto2_ultrawide.jpg">

                                    <div class="carousel-text-banner hidden-sm hidden-xs">
                                        <div class="carousel-caption">
                                            <h2 class="text-center"><a href="#">Título completo de notícia em destaque: complemento de título (1)</a></h2>
                                        </div>
                                    </div>
                                    <!-- BEGIN carrossel RESPONSIVE -->
              					  <div class="box-carrossel-responsivo hidden-lg hidden-md">
					                  <div class="carousel-caption-responsivo">
              					      <h4 class="text-center"><a href="#">Título completo de notícia em destaque: complemento de título (1)</a></h4>
					                 </div>
					             </div>
                                    <!-- END carrossel RESPONSIVE -->
                                </div>


                                <div class="item">
                                    <img src="http://localhost/article19/wp-content/uploads/2015/12/foto1_ultrawide.jpg">
                                    <div class="carousel-text-banner hidden-sm hidden-xs">
                                        <div class="carousel-caption">
                                            <h2 class="text-center"><a href="#">Título completo de notícia em destaque: complemento de título (2)</a></h2>
                                        </div>
                                    </div>

					<div class="box-carrossel-responsivo hidden-lg hidden-md">
					  <div class="carousel-caption-responsivo">
					    <h4 class="text-center"><a href="#">Título completo de notícia em destaque: complemento de título (2)</a></h4>
					  </div>
					 </div>

                                </div>

                                <div class="item">
                                    <img src="http://localhost/article19/wp-content/uploads/2015/12/foto1_ultrawide.jpg">
                                    <div class="carousel-text-banner hidden-sm hidden-xs">
                                        <div class="carousel-caption">
                                            <h2 class="text-center"><a href="#">Título completo de notícia em destaque: complemento de título (3)</a></h2>
                                        </div>
                                    </div>

					<div class="box-carrossel-responsivo hidden-lg hidden-md">
					  <div class="carousel-caption-responsivo">
					    <h4 class="text-center"><a href="#">Título completo de notícia em destaque: complemento de título (3)</a></h4>
					  </div>
					 </div>

                                </div>
                                <!-- BEGIN Indicators -->
                                <ol class="carousel-indicators hidden-sm hidden-xs">
                                    <li data-target="#carroussel-a19" data-slide-to="0"></li>
                                    <li data-target="#carroussel-a19" data-slide-to="1"></li>
                                    <li data-target="#carroussel-a19" data-slide-to="2"></li>
                                </ol>
                                <a class="left carousel-control" href="#carroussel-a19" data-slide="prev"><i class="icon-prev fa fa-5x fa-angle-left"></i></a>
                                <a class="right carousel-control" href="#carroussel-a19" data-slide="next"><i class="icon-next fa fa-5x fa-angle-right"></i></a>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
</BR>
<!-- FIM carrossel para DESKTOP -->
<!-- BEGIN SECONDARY HIGHLIGHTS DESKTOP SECTION -->
            <div class="section hidden-xs">
                <div class="container">
                    <div class="row destaque2">
                        <div class="col-md-4">
                            <img src="http://localhost/article19/wp-content/uploads/2015/12/foto_pequena1.jpg" class="img-responsive">
                            <h3>
                                <a href="pagina.html">Monitoramento da Lei de Acesso à Informação Pública em 2014</a>
                            </h3>
                            <p class="a-black">
                                <a href="pagina.html">Relatório que analisa a adequação de 51 órgãos públicos federais à Lei de Acesso à Informação com base em dados de 2014.</a>
                            </p>
                            <div class="date-news">01.10.2015</div>
                        </div>
                        <div class="col-md-4">
                            <img src="http://localhost/article19/wp-content/uploads/2015/12/foto_pequena3.jpg" class="img-responsive">
                            <h3>
                                <a href="pagina.html">Tentativa de assassinato de blogueiro em Pernambuco reacende debate</a>
                            </h3>
                            <p class="a-black">
                                <a href="pagina.html">Ed Soares foi atacado por dois homens quando retornava a sua residência,
              no município de Barreiros. Policia do estado investiga o caso.</a>
                            </p>
                            <div class="date-news">09.09.2015</div>
                        </div>

                        <div class="col-md-4">
                            <img src="http://localhost/article19/wp-content/uploads/2015/12/foto_pequena2.jpg" class="img-responsive">
                            <h3>
                                <a href="pagina.html">ONU escolhe seu primeiro relator sobre o direito à privacidade</a>
                            </h3>
                            <p class="a-black">
                                <a href="pagina.html">Natural de Malta, Joseph Cannataci estará a frente da Relatoria Especial
                sobre o o Direito à Privacidade, criada em março deste ano.</a>
                            </p>
                            <div class="date-news">25.09.2015</div>
                        </div>
                    </div>
                </div>
            </div>
<!-- END SECONDARY HIGHLIGHT DESKTOP SECTION -->
<!-- BEGIN SECONDARY HIGHLIGHT RESPONSIVE SECTION -->
            <div class="section hidden-lg hidden-md">
              <div class="container">
                  <div class="row">
                        <div class="col-md-3 title-box">
                           <ul class="media-list">
                                <li>
                                  <!-- <div class="media-body">-->
                                        <a href="#"><img class="media_secondary_responsive" src="http://localhost/article19/wp-content/uploads/2015/12/secondary_highlight_responsive_1.jpg"></a>

                                        <a href="#"><span class="media-secondary-heading-h4 text-danger">Monitoramento da Lei de Acesso à Informação Pública em 2014</span></a>

                                        <p class="secondary_hg_responsive_date a-black">01.10.2015</p>
                                        <p class="secondary_hg_responsive a-black">Relatório que analisa a adequação de 51 órgãos públicos federais à Lei de Acesso à Informação com base em dados de 2014.</p>
                                   <!-- </div>-->
                                </li>
                                <hr></hr>
                                <li>
                                  <!-- <div class="media-body">-->
                                        <a href="#"><img class="media_secondary_responsive" src="http://localhost/article19/wp-content/uploads/2015/12/secondary_highlight_responsive_2.jpg"></a>

                                        <a href="#"><span class="media-secondary-heading-h4 text-danger">Tentativa de assassinato de blogueiro em Pernambuco reacende debate</a></span>
                                        <p class="secondary_hg_responsive_date">09.09.2015</p>
                                        <p class="secondary_hg_responsive">Ed Soares foi atacado por dois homens quando retornava a sua residência,
              no município de Barreiros. Policia do estado investiga o caso.</p>
                                   <!-- </div>-->
                                </li>
                               <hr></hr>
                                <li>
                                   <!-- <div class="media-body">-->
                                        <a href="#"><img class="media_secondary_responsive" src="http://localhost/article19/wp-content/uploads/2015/12/secondary_highlight_responsive_3.jpg"></a>
                                        <a href="#"><span class="media-secondary-heading-h4 text-danger">ONU escolhe seu primeiro relator sobre o direito à privacidade</span></a>
                                        <p class="secondary_hg_responsive_date">25.09.2015</p>
                                        <p class="secondary_hg_responsive">Natural de Malta, Joseph Cannataci estará a frente da Relatoria Especial sobre o o Direito à Privacidade, criada em março deste ano.</p>
                                   <!-- </div>-->
                                </li>
                                <hr></hr>
                            </ul>
                        </div>
            </div>
          </div>
            </div>  
<!-- END SECONDARY HIGHLIGHT RESPONSIVE SECTION -->
<!-- OLD BEGIN SECONDARY HIGHLIGHT RESPONSIVE SECTION
            <div class="section hidden-md hidden-lg">
                <div class="container">
                    <div class="row destaque2">
                      <hr>
                        <div class="col-md-3">
                            <h3>
                                <a href="pagina.html">Monitoramento da Lei de Acesso à Informação Pública em 2014</a>
                            </h3>
                            <p class="a-black"><span class="">01.10.2015</span>
                            Relatório que analisa a adequação de 51 órgãos públicos federais à Lei de Acesso à Informação com base em dados de 2014.
                            </p>
                        </div>
                        <hr>
                        <div class="col-md-4">
                            <h3>
                                <a href="pagina.html">Tentativa de assassinato de blogueiro em Pernambuco reacende debate</a>
                            </h3>
                            <p class="a-black"><span class="">31.09.2015</span>
                               Ed Soares foi atacado por dois homens quando retornava a sua residência,
              no município de Barreiros. Policia do estado investiga o caso.
                            </p>-->
                        <!--    <div class="date-news">09.09.2015</div>-->
<!-- OLD                        </div>
                        <hr>

                        <div class="col-md-4">
                            <h3>
                                <a href="pagina.html">ONU escolhe seu primeiro relator sobre o direito à privacidade</a>
                            </h3>
                            <p class="a-black"><span class="">31.09.2015</span>
                            Natural de Malta, Joseph Cannataci estará a frente da Relatoria Especial
                sobre o o Direito à Privacidade, criada em março deste ano.
                            </p>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>-->
<!-- END SECONDARY HIGHLIGHT RESPONSIVE SECTION -->
<!-- INICIO Destaque eventual para DESKTOP -->
    <div class="section hidden-xs">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <a href="#" class=""><img src="http://localhost/article19/wp-content/uploads/2015/12/2015_destaque_eventual_desktop_1140x200.png" class="img-responsive"></a>
          </div>
        </div>
      </div>
    </div>

<!-- FIM Destaque eventual para DESKTOP -->
<!-- INICIO Destaque eventual para responsivo -->
    <div class="section hidden-lg hidden-md hidden-sm">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <a href="#" class=""><img src="http://localhost/article19/wp-content/uploads/2015/12/2015_destaque_eventual_responsivo_730x480.png" class="img-responsive"></a>
          </div>
        </div>
      </div>
    </div>
<!--- FIM Destaque eventual para responsivo --->
<!--- INICIO sessão VIDEOS --->
    <div class="section">
      <div class="container">
        <div class="row">

          <div class="col-md-12 box-orange-artigo">
            <a href="#" class=""><img style="width:250px;" src="images/logo_artigo19tv.svg" class=""></a>
          </div>

          <div class="col-md-12">
            <p></p>
          </div>

          <div class="col-md-8">
           <div class="embed-responsive embed-responsive-16by9">
             <iframe src="https://www.youtube.com/embed/aQU-NVuV_EQ" 
		allowfullscreen="" frameborder="0"></iframe>
            </div>
	  </div>

          <div class="col-md-4">

           <div class="embed-responsive embed-responsive-16by9 hidden-sm hidden-xs">
             <iframe src="https://www.youtube.com/embed/aQU-NVuV_EQ" 
		allowfullscreen="" frameborder="0"></iframe>
            </div>
		<p></p>
           <div class="embed-responsive embed-responsive-16by9 hidden-sm hidden-xs">
             <iframe src="https://www.youtube.com/embed/aQU-NVuV_EQ" 
		allowfullscreen="" frameborder="0"></iframe>
            </div>

	  </div>

        </div>
      </div>
    </div>

<!--- FIM sessão VIDEOS --->
<!-- BEGIN Publicacoes SECTION -->
            <div class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 title-box">
                            <h3>
                                <b>
                                    <a href="categoria.html">PUBLICAÇÕES</a>
                                </b>
                            </h3>
                            <div class="box-publicacoes">
                                <ul class="media-list">
                                    <li class="media">
                                        <a><i class="fa fa-2x fa-fw text-muted fa-file-text pull-left"></i></a>
                                        <div class="media-body">
                                            <h3 class="media-heading text-danger">
                                                <a href="pagina.html">Monitoramento da Lei de Acesso à Informação Pública em 2014</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a><i class="fa fa-2x fa-fw text-muted fa-file-text pull-left"></i></a>
                                        <div class="media-body">
                                            <h3 class="media-heading text-danger">
                                                <a href="pagina.html">Violações à Liberdade de Expressão – Relatório Anual 2015</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a><i class="fa fa-2x fa-fw text-muted fa-file-text pull-left"></i></a>
                                        <div class="media-body">
                                            <h3 class="media-heading text-danger">
                                                <a href="pagina.html">Violações à Liberdade de Expressão – Relatório Anual 2016</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a><i class="fa fa-2x fa-fw text-muted fa-file-text pull-left"></i></a>
                                        <div class="media-body">
                                            <h3 class="media-heading text-danger">
                                                <a href="pagina.html">Violações à Liberdade de Expressão – Relatório Anual 2017</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <a><i class="fa fa-2x fa-fw text-muted fa-file-text pull-left"></i></a>
                                        <div class="media-body">
                                            <h3 class="media-heading text-danger">
                                                <a href="pagina.html">Violações à Liberdade de Expressão – Relatório Anual 2018</a>
                                            </h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
<!-- END PUBLICACOES SECTION -->
<!-- BEGIN IMPRENSA SECTION -->
                        <div class="col-md-3 title-box">
                            <h3>
                                <b>
                                    <a href="categoria.html">ARTIGO19 NA MÍDIA</a>
                                </b>
                            </h3>
                            <ul class="media-list">
                                <li class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="http://localhost/article19/wp-content/uploads/2015/12/foto_pequena9_na_imprensa1.jpg" height="64" width="64"></a>
                                    <div class="media-body">
                                        <a href="#"><h4 class="media-heading text-danger">
                    Entidades denunciam à OEA casos de abuso policial durante manifestações
                  </h4></a>
                                    </div>
                                </li>
                                <li class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="http://localhost/article19/wp-content/uploads/2015/12/foto_pequena9_na_imprensa2.jpg" height="64" width="64"></a>
                                    <div class="media-body">
                                        <a href="#"><h4 class="media-heading text-danger">Os abusos policiais durante os protestos no Brasil chegam ao cenário
                    internacional</h4></a>
                                    </div>
                                </li>
                                <li class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="http://localhost/article19/wp-content/uploads/2015/12/foto_pequena9_na_imprensa3.jpg" height="64" width="64"></a>
                                    <div class="media-body">
                                        <a href="#"><h4 class="media-heading text-danger">Brasil é acusado na OEA de violar direitos humanos em protestos</h4></a>
                                    </div>
                                </li>
                                <li class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="http://localhost/article19/wp-content/uploads/2015/12/foto_pequena9_na_imprensa3.jpg" height="64" width="64"></a>
                                    <div class="media-body">
                                        <a href="#"><h4 class="media-heading text-danger">Brasil é acusado na OEA de violar direitos humanos em protestos</h4></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
<!--END IMPRENSA SECTION -->
<!-- BEGIN FORMS SECTION -->
                        <div class="col-md-3">
                				<h3><br> </h3>
                            <a href="#"><img src="http://localhost/article19/wp-content/uploads/2015/12/2015_banner_horizontal_640x400.png" class="img-responsive"></a><br>
                            <a href="#"><img src="http://localhost/article19/wp-content/uploads/2015/12/2015_banner_horizontal_640x400-2.png" class="img-responsive"></a>
                        </div>
                    </div>
                </div>
            </div>
<!-- END FORMS SECTION -->
<!--- INICIO sessão PROJETO --->
    <div class="section">
      <div class="container">
         <div class="row">
           <div class="col-md-12 title-box">
             <h3><b><a href="categoria.html">PROJETOS</a></b></h3>
	   </div>
          
	<div class="col-md-12 title-box">                        
          <div class="col-md-3-projetos">
            <div class="min-3md-box-home">
             <a href="#"><img src="images/2015_banner_site_400x240_peca01.png" class="img-responsive"></a>
                <p class="title"><b>CENTRO DE REFERÊNCIA LEGAL</b></p>
		<p>Descrição site. Descrição site. Descrição site. Descrição.&nbsp;</p>
            </div>
	  </div>
          <div class="col-md-3-projetos">
	    <div class="min-3md-box-home">
              <a href="#"><img src="images/2015_banner_site_400x240_peca02.png" class="img-responsive"></a>
               <p class="title"><b>LIBERDADE DIGITAL</b></p>
	       <p>Descrição site. Descrição site. Descrição site. Descrição.&nbsp;</p>
             </div>
	  </div>
          <div class="col-md-3-projetos">
             <div class="min-3md-box-home">
               <a href="#"><img src="images/2015_banner_site_400x240_peca03.png" class="img-responsive"></a>
               <p class="title"><b>LIVRE ACESSO</b></p>
	       <p>Descrição site. Descrição site. Descrição site. Descrição.&nbsp;</p>
             </div>
          </div>
          <div class="col-md-3-projetos">
	    <div class="min-3md-box-home">
              <a href="#"><img src="images/2015_banner_site_400x240_peca04.png" class="img-responsive"></a>
              <p class="title"><b>VIOLAÇÕES A LIBERDADE DE EXPRESSÃO</b></p>
	       <p>Descrição site. Descrição site. Descrição site. Descrição.&nbsp;</p>
            </div>
	  </div>
	</div>
	
        </div>
      </div>
    </div>
<!-- END PROJETO SECTION -->
<?php
get_footer();