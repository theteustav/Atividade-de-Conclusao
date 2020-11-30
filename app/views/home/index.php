<?php

$this->view('home/cabecalho');

?>

<body id="page-top">
    <!-- Navigation-->
    <?php

    $this->view('home/menu');

    ?>

    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="assets/img/matheus.jpeg" alt="" />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Matheus Tavares</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">Artista Gráfico - Web Designer - Cadista Topográfico -
                Agente de Turismo</p>
        </div>
    </header>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Lugares</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/aurora.jpg" alt="" />
                    </div>
                </div>
                <!-- Portfolio Item 2-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/jalapao.jpg" alt="" />
                    </div>
                </div>
                <!-- Portfolio Item 3-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/lagoadaconfusao.jpg" alt="" />
                    </div>
                </div>
                <!-- Portfolio Item 4-->
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/lajeado.jpg" alt="" />
                    </div>
                </div>
                <!-- Portfolio Item 5-->
                <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/natividade.jpg" alt="" />
                    </div>
                </div>
                <!-- Portfolio Item 6-->
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/taquarucu.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section-->
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">Tocantins</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="lead">Fazer turismo no Tocantins é ter a oportunidade de explorar
                        a fundo o Cerrado brasileiro e a savana com maior diversidade de todo o
                        mundo, além de conhecer o estado mais jovem do nosso país.</p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="lead">São muitas as belezas do Tocantins que justificam a fama crescente no estado para
                        turismo no Brasil: lagoas de água cristalina, cachoeiras paradisíacas, grandes savanas e muito
                        mais!</p>
                </div>
            </div>

        </div>
    </section>
    <!-- Contact Section-->
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Fale Conosco</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                    <?php

                    $this->view('home/form');

                    ?>

                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Nosso Endereço</h4>
                    <p class="lead mb-0">
                        Avenida Cônego João Lima, 882
                        <br />
                        Centro, Araguaína-TO
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Nossas Redes Sociais</h4>
                    <a class="btn btn-outline-light btn-social mx-1"
                        href="https://www.facebook.com/matheus.tavares.39108"><i
                            class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1"
                        href="https://www.instagram.com/tavares.matheus17/?hl=pt-br"><i
                            class="fab fa-fw fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1"
                        href="https://api.whatsapp.com/qr/JAVVKPDEPALSB1"><i class="fab fa-fw fa-whatsapp"></i></a>

                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">Sobre Matheus Tavares</h4>
                    <p class="lead mb-0">
                        Matheus Tavares é um site desenvolvido para quem gosta de turismo no
                        <a href="https://turismo.to.gov.br/">Tocantins</a>
                        .
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright © Mathesu Tavares dos Santos 2020</small></div>
    </div>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <div class="scroll-to-top d-lg-none position-fixed">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i
                class="fa fa-chevron-up"></i></a>
    </div>
    <!-- Portfolio Modals-->
    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    id="portfolioModal1Label">Aurora - TO</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/aurora.jpg" alt="" />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">A cidade de Aurora recebeu esse nome por uma curiosidade: a cerca de 535
                                    quilômetros de distância da capital, Palmas, é a última cidade do Tocantins a ver o
                                    nascer do sol. Isso acontece porque o município fica localizado atrás das formações
                                    rochosas que formam as Serras Gerais.
                                </p>
                                <p class="mb-5">Além do nascer do sol “atrasado”, Aurora se destaca por ter o menor rio
                                    de todo o mundo, o Rio Azuis, com águas de cor azul turquesa, cristalinas, e uma
                                    impressionante quantidade de grutas e cavernas: são mais de 280 catalogadas!
                                </p>
                                <button class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Fechar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    id="portfolioModal2Label">Jalapão - TO</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/jalapao.jpg" alt="" />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">Além da capital, nenhuma outra região do Tocantins é tão conhecida como
                                    o Jalapão! Na verdade, o principal ponto turístico de todo o estado é o Parque
                                    Estadual do Jalapão, que tem mais de 34 mil km² e concentra inúmeros rios de água
                                    cristalina, cachoeiras, dunas, chapadas e corredeiras.
                                </p>
                                <p class="mb-5">A boa notícia é que é fácil fazer o trajeto de Palmas para Jalapão, e o
                                    percurso é feito em meio à paisagem típica do Cerrado, com direito a muitas
                                    cachoeiras e rios para se refrescar no caminho!
                                </p>
                                <button class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Fechar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal3Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    id="portfolioModal3Label">Lagoa da Confusão - TO</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/lagoadaconfusao.jpg"
                                    alt="" />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">A Lagoa da Confusão é a principal porta de entrada para o Parque
                                    Nacional do Araguaia e a Ilha do Bananal. A região é riquíssima em fauna e flora,
                                    pois fica localizada bem na transição entre Cerrado, Mata e Pantanal, tornando o
                                    destino ideal para os amantes da natureza.
                                </p>
                                <p class="mb-5">Na cidade existe uma lagoa com o mesmo nome, onde os visitantes podem se
                                    refrescar e curtir dias de sol em praias com boa infraestrutura.
                                </p>
                                <button class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Fechar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 4-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal4Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    id="portfolioModal4Label">Lajeado - TO</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/lajeado.jpg" alt="" />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">Lajeado é uma pequena cidade com uma forte tradição artesanal, a pouco
                                    mais de 50 quilômetros de Palmas. As belezas naturais da região surgem logo ao
                                    chegar à cidade: ainda na estrada é possível avistar os imponentes morros do Leão e
                                    do Segredo, que parecem um imenso vulcão inativo.
                                </p>
                                <p class="mb-5">Para quem quer encher o álbum de fotos, a dica é visitar o Mirante da
                                    Serra do Lajeado, que oferece vista panorâmica de toda a região, e a Ponte Padre
                                    Cícero José de Sousa. Outro destaque de Lajeado é o Sítio Arqueológico da Serra, que
                                    preserva pinturas rupestres e um mirante que serve como ponto de partida para voos
                                    de parapente e asa-delta, a mais de 360 metros de altura.
                                </p>
                                <button class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Fechar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 5-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal5Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    id="portfolioModal5Label">Natividade - TO</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/natividade.jpg" alt="" />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">Natividade é um vilarejo com forte movimento de turismo religioso: é ali
                                    que acontecem as tradicionais romarias e os festejos em honra do Nosso Senhor do
                                    Bonfim e do Divino Espírito Santo.
                                </p>
                                <p class="mb-5">Mas o visitante não precisa limitar suas atividades turísticas à
                                    religiosidade: além de um charmoso centro histórico, a cidade tem diversas
                                    cachoeiras, trilhas e praias fluviais.
                                </p>
                                <button class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Fechar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 6-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal6Label" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i></span>
                </button>
                <div class="modal-body text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    id="portfolioModal6Label">Taquaruçu - TO</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/taquarucu.jpg" alt="" />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">A menos de 30 quilômetros de Palmas, a cidade de Taquaruçu surge como
                                    uma boa alternativa para quem não tem muito tempo disponível para a viagem. O
                                    pequeno distrito concentra mais de 80 cachoeiras ideais para ecoturismo ou turismo
                                    de aventura — como a Cachoeira da Roncadeira, cuja queda de mais de 70 metros de
                                    altura é bastante procurada para a prática de rapel.
                                </p>
                                <p class="mb-5">A cidade se destaca pela boa infraestrutura e pela grande quantidade de
                                    rios e trilhas disponíveis para visita.
                                </p>
                                <button class="btn btn-primary" data-dismiss="modal">
                                    <i class="fas fa-times fa-fw"></i>
                                    Fechar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

    $this->view('home/rodape');

    ?>