<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>B.boy Iron</title>
    <link rel="icon" href="{{ asset('image/iron.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alkalami&family=Fira+Sans:wght@500&family=Kanit:wght@600&family=Montserrat:ital,wght@1,300&family=Oswald:wght@700&family=Poppins:wght@200;300;400;500;700;900&family=Roboto:wght@500&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body>
    <div id="content">
        <div class="scroll-up-btn">
            <a id="generate-pdf" href="{{ url('/exportar-pdf') }}" title="Exportar este portfólio"><i
                    class='bx bxs-file-pdf'></i></a>
        </div>
        <nav class="navbar">
            <div class="max-width">
                <div class="logo"><a href="#">Portfó<span>lio</span></a></div>
                <ul class="menu">
                    <li><a href="#home" class="menu-btn">Home</a></li>
                    <li><a href="#Sobre" class="menu-btn">Sobre</a></li>
                    <li><a href="#Serviços" class="menu-btn">Serviços</a></li>
                    <li><a href="#YouTube" class="menu-btn">YouTube</a></li>
                    <li><a href="#Experiências" class="menu-btn">Experiências</a></li>
                    <li><a href="#Contato" class="menu-btn">Contato</a></li>
                </ul>
                <div class="menu-btn">
                    <i class='bx bx-menu'></i>
                </div>
            </div>
        </nav>

        <!-- home section start -->
        <section class="home" id="home">
            <div class="max-width">
                <div class="home-content">
                    <div class="text-1">Me chamo Flávio Frank, mais conhecido como</div>
                    <div class="text-2">B.boy Iron</div>
                    <div class="text-3">Faço parte do grupo <span class="typing"></span></div>
                    <a href="#Contato">Contato</a>
                </div>
            </div>
        </section>

        <!-- about section start -->
        <section class="about" id="Sobre">
            <div class="max-width">
                <h2 class="title">Sobre</h2>
                @component('.Fotos._components.sobre')
                @endcomponent
                <!-- READ MORE/LESS BUTTON -->
                <button id="read_button">Ver mais...</button>
            </div>
            <a href="#Contato">Fale comigo</a>
    </div>
    </div>
    </div>
    </section>

    <!-- services section start -->
    <section class="services" id="Serviços">
        <div class="max-width">
            <h2 class="title">Serviços</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class='bx bxs-group'></i>
                        <div class="text">Aulas de Break</div>
                        <p>Ensino os fundamentos do estilo, incluindo movimentos, história e cultura. Os alunos
                            desenvolvem habilidades de dança e expressão criativa através do break.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class='bx bx-trophy'></i>
                        <div class="text">Campeonatos</div>
                        <p>Campeonatos de break reúno dançarinos em competições que destacam habilidades e
                            criatividade, impulsionando a cultura e evolução do breakdance.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class='bx bxs-music'></i>
                        <div class="text">Shows e Oficinas</div>
                        <p>Faço shows e oficinas de breakdance promovendo a cultura do break que envolvem entusiastas da
                            dança com apresentações dinâmicas e aprendizado prático.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="YouTube">
        <div class="max-width">
            <h2 class="title">Youtube</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Conheça o meu canal no YouTube</div>
                    <p>Conheça o meu canal de B-boy no YouTube, um espaço dedicado à cultura do breaking. Conheça a
                        minha dança, minha criatividade e um pouco do meu B-boying. Junte-se a mim, compartilhe meus
                        momentos incríveis e ajude-me a celebrar minha paixão e a sua pelo breaking. Inscreva-se agora
                        no meu canal e faça parte dessa família de B-boys e B-girls!</p>
                    <a href="https://www.youtube.com/@flaviofrank4191" target="_blank">YouTube</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <iframe src="https://www.youtube.com/embed/qdpWy2kIlEU?si=o0MevZugKF3MyWHk"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="Experiências">
        <div class="max-width">
            @component('.Fotos._components.momentos')
            @endcomponent
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="Contato">
        <div class="max-width">
            <h2 class="title">Contato</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Entrar em contato</div>
                    <p>Você tem alguma dúvida, crítica ou sugestão para mim? Entre em contato para eu lhe ajudar. Terei
                        um prazer em responder!</p>
                    <div class="icons">
                        <div class="row">
                            <i class='bx bxs-user'></i>
                            <div class="info">
                                <div class="head">Nome</div>
                                <div class="sub-title">Flávio Frank</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class='bx bxs-map'></i>
                            <div class="info">
                                <div class="head">Endereço</div>
                                <div class="sub-title">Macapá, Amapá, Brasil</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class='bx bxs-envelope'></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">flavio.frb.ap@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Envie sua mensagem</div>
                    @component('.layouts._components.formulario')
                    @endcomponent
                </div>
            </div>
        </div>
    </section>
    <div class="redes">
        <a href="https://www.youtube.com/@flaviofrank4191" target="_blank"><i class='bx bxl-youtube'></i></a>
        <a href="https://www.facebook.com/ffrankilin/" target="_blank"><i class='bx bxl-facebook-square'></i></a>
        <a href="https://www.instagram.com/flavio_frank98/" target="_blank"><i class='bx bxl-instagram-alt'></i></a>
    </div>
    <!-- footer section start -->
    <footer>
        <span>Criado por <a href="https://www.linkedin.com/in/flavio-frank/" target="_blank">Flávio Frank</a> | <span
                class="far fa-copyright"></span> 2024 All rights reserved.</span>
    </footer>
    </div>


    <script src="js/pdf.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
</body>

</html>
