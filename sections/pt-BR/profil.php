<!-- DÉBUT SECTION PROFIL -->
<section id="profile" class="section">
    <div class="container section-wrapper">
        <div class="section-content">
            <div class="row">
                
                <!-- DÉBUT PHOTO PROFIL -->
                <div class="col-md-4 hidden-xs hidden-sm match-height pp-wrapper">
                    <div class="profile-picture style-two">
                        <img src="../assets/images/photo.jpg" alt="Kiyoshi Mukai" class="img-responsive"/>
                        
                        <h4 class="title">Kiyoshi Mukai</h4>
                    </div>
                </div>
                <!-- //FIN PHOTO PROFIL -->
                
                <div class="col-md-8 match-height">

                    <!-- DÉBUT TEXTE PROFIL -->
                    <div class="profile-text padding-left-yes">
                        <div class="btn-group">
                                  <button class="btn btn-md btn-custom dropdown-toggle" type="button" data-toggle="dropdown">Escolha Su País
                                  <span class="caret"></span></button>
                                <?php require "pays.php"; ?>
                                </div>
                                <br />
                        <div class="row">
                            <div class="col-md-12">
                                <img src="/assets/images/drapeaux/mx.png" alt="Bandera de México" class="drapeaux" />

                                <br />

                                <h2 style="clear:both;" class="section-title">Óla, me chamo Kiyoshi Mukai (Grant em inglés).</h2>

                                <p>
                                    Meu nome é Kiyoshi Mukai e sou o produtor e gerente de conteúdo da Web à <a href='https://www.aps.org'>Sociedade americana de física</a> no estado de Maryland, Estados Unidos da América.
                                </p>

                                <span class="divider"></span>

                                <p>Para a Sociedade de Física, é minha responsabilidade é atualizar o conteúdo dos sites, levando em consideração o comportamento dos usuários para melhorar a organização das informações. Também estou criando o design e a estrutura depois de analisar o conteúdo existente e fazer propostas sobre como podemos nos conectar melhor com o nosso público.</p>

                                <p>Antes de assumir essa posição, gerenciei a transição do nosso site e escrevia comunicados de imprensa e artigos para exibir programas em todo o mundo. Também fui responsável pela conceituação da estratégia da Web para melhorar a usabilidade do site e aumentar a pesquisa orgânica.</a>
                                
                                <p>Também trabalhei na <a href="https://www.apsanet.org">Associação Americana de Ciência Política</a>, onde ajudei minha equipe a gerenciar o site público da associação e vários sites WordPress para promover ciência política e seções de interesse especializado na organização de redes. Também fui responsável pelo gerenciamento de banco de dados, análise estatística e geração de formulários de dados. Realizei essas tarefas, oferecendo excelente atendimento ao cliente em inglês, francês e espanhol</p>

                                <p>Eu me formei em jornalismo televisivo após quatro anos de estudo na <a href='https://www.bu.edu/com'> Escola de Comunicação </a> da Universidade de Boston, com especialização em idioma e literatura francesas.</p>
								
                                <p class="text-grey">
                                    Cordialemente,
                                </p>
								
								<img src='assets/images/signatures/signature_kiyoshimukai_blanc.png' alt='Firma de Kiyoshi Mukai' class="signature" />
								
                                <p class="text-grey">
                                    Kiyoshi Mukai
                                </p>
								
                            </div>
                            <!-- //.col-md-12 -->
                        </div>
                        <!-- //.row -->
                    </div>
                    <!-- //FIN TEXTE PROFIL -->

                    <!-- DÉBUT COORDONNÉES -->
                    <div class="contact-details padding-left-yes">
                        <div class="row">
                            <div class="col-sm-6 col-md-5">
                                <h4>Detalhes do contato</h4>

                                <ul class="list-unstyled text-grey">
                                    <li>Kiyoshi Mukai</li>
                                    <li>Washington, Distrito de Columbia, Estados Unidos</li>
                                    <li>+1 202 656 8317</li>
                                    <li>ola@grantmukai.com</li>
                                    <li>www.grantmukai.com/brasil</li>
                                </ul>
                            </div>
                            <!-- //.col-md-5 -->

                            <div class="col-sm-6 col-md-7">
                            <?php
							$boutonTelechargerWeb = "Baixar CV Web";
							$boutonTelechargerCom = "Baixar CV Comunicações";
							$cvMiseajour = "Indisponível";
                            $IdTelechargerWebDoc = "webdoccvptbr";
                            $IdTelechargerWebPdf = "webpdfcvptbr";
                            $IdTelechargerComDoc = "comdoccvptbr";
                            $IdTelechargerComPdf = "compdfcvptbr";
							/*$nomFamille = "Perez";*/
							include "profil_base.php";
                            ?>
                            </div>
                            <!-- //.col-md-6 -->
                        </div>
                        <!-- //.row -->
                    </div>
                    <!-- //FIN COORDONNÉES -->

                </div>
                <!-- //.col-md-8 -->
            </div>
            <!-- //.row -->
        </div>
        <!-- //.section-content -->
    </div>
    <!-- //.container -->
</section>
<!-- //FIN SECTION PROFIL -->