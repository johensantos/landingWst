<!--
 - Created by PhpStorm.
 - Developer: Johen Guevara Santos.
 - Email: mguevara@enfocussoluciones.com
 - Date: 11/02/2020
 - Time: 17:03
-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/7a2abb6de2.js" crossorigin="anonymous"></script>
    <title>Work Safety Tech</title>
    <link rel="stylesheet" href="library/css/bootstrap.min.css">
    <link rel="stylesheet" href="library/css/animate.min.css">
    <script src="library/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <style>


        html {
            scroll-behavior: smooth;
            --scrollbarBG: #CFD8DC;
            --thumbBG: #eb5b25;
        }

        body::-webkit-scrollbar {
            width: 11px;
        }

        body {
            scrollbar-width: thin;
            scrollbar-color: var(--thumbBG) var(--scrollbarBG);
        }

        body::-webkit-scrollbar-track {
            background: var(--scrollbarBG);
        }

        body::-webkit-scrollbar-thumb {
            background-color: var(--thumbBG);
            border-radius: 6px;
            border: 3px solid var(--scrollbarBG);
        }


        /*  // Extra small devices (portrait phones, less than 576px)*/
        @media (max-width: 575.98px) {
            #banner {
                background: url(img/bannerLanding.png) no-repeat center center;
                background-size: cover;
                height: 200px
            }

            .divider-vertical-second-menu {
                display: none;
            }

            .itemsMenu {
                text-align: center;
                background-color: white;
                border-bottom: 6px double #17a2b8;
            }

            .itemsMenu .nav-item a.nav-link {
                color: var(--thumbBG) !important;
            }

            .botonOcultoNavBar {
                display: block;
            }

            .quitarEnMovil {
                display: none;
            }
        }

        /* // Small devices (landscape phones, 576px and up)*/
        @media (min-width: 576px) and (max-width: 767.98px) {
            #banner {
                background: url(img/bannerLanding.png) no-repeat center center;
                background-size: cover;
                height: 500px
            }

            .divider-vertical-second-menu {
                display: none;
            }

            .itemsMenu {
                text-align: center;
                background-color: white;
                border-bottom: 6px double #17a2b8;
            }

            .itemsMenu .nav-item a.nav-link {
                color: var(--thumbBG) !important;
            }

            .botonOcultoNavBar {
                display: none;
            }

            .botonOcultoNavBar {
                display: block;
            }

            .quitarEnMovil {
                display: none;
            }
        }

        /*// Medium devices (tablets, 768px and up)*/
        @media (min-width: 768px) and (max-width: 991.98px) {
            #banner {
                background: url(img/bannerLanding.png) no-repeat center center;
                background-size: cover;
                height: 600px
            }

            .divider-vertical-second-menu {
                display: none;
            }

            .itemsMenu {
                text-align: center;
                background-color: white;
                border-bottom: 6px double #17a2b8;
            }

            .itemsMenu .nav-item a.nav-link {
                color: var(--thumbBG) !important;
            }

            .botonOcultoNavBar {
                display: block;
            }

            .quitarEnMovil {
                display: none;
            }
        }

        /*// Large devices (desktops, 992px and up)*/
        @media (min-width: 992px) and (max-width: 1199.98px) {
            #banner {
                background: url(img/bannerLanding.png) no-repeat center center;
                background-size: cover;
                height: 800px
            }

            .botonOcultoNavBar {
                display: none;
            }

            .quitarEnMovil {
                display: block;
            }
        }

        /*  // Extra large devices (large desktops, 1200px and up)*/
        @media (min-width: 1200px) {
            #banner {
                background: url(img/bannerLanding.png) no-repeat center center;
                background-size: cover;
                height: 800px
            }

            .botonOcultoNavBar {
                display: none;
            }

            .quitarEnMovil {
                display: block;
            }
        }

        .divider-vertical-second-menu {
            height: 40px;
            width: 1px;
            margin: 0 5px;
            overflow: hidden;
            background-color: #DDD;
            border-right: 2px solid #FFF;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E") !important;
        }

        .navbar-toggler {
            border-color: rgb(255, 255, 255) !important;
        }

        .colorBarraNavegacion {
            background-color: var(--thumbBG) !important;
        }
    </style>
</head>
<body>
<header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top animated fadeIn fast" id="barraNavegacion"
         style="transition: all 0.5s ease-in;">
        <div class="container-fluid">
            <a class="navbar-brand bg-white" href="#" style="border: 10px solid white;">
                <img class="" style="width: 100px; " src="img/logo_wst.png" alt="">

            </a>
            <a class="btn text-white botonOcultoNavBar " data-toggle="modal" data-target="#exampleModalCenter"
               style="border: 1px solid white">
                Log In
            </a>

            <div class="dropdown">
                <a class="btn text-white botonOcultoNavBar dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false" style="border: 1px solid white">
                    <i class="fas fa-globe-americas"></i>
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Español</a>
                    <a class="dropdown-item" href="#">Ingles</a>
                </div>
            </div>


            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarColor03"
                    aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav ml-auto itemsMenu ">
                    <li class="nav-item active">
                        <a style="font-size: 1.1em" class="nav-link text-white  active" href="#quienesSomos">About Us</a>
                    </li>
                    <li class="divider-vertical-second-menu sm"></li>
                    <li class="nav-item">
                        <a style="font-size: 1.1em" class="nav-link text-white" href="#nuestrosCursos">Our courses</a>
                    </li>
                    <li class="divider-vertical-second-menu sm"></li>
                    <li class="nav-item">
                        <a style="font-size: 1.1em" class="nav-link text-white" href="#nuestrosClientes">Our Clients</a>
                    </li>
                    <li class="divider-vertical-second-menu sm"></li>
                    <li class="nav-item">
                        <a style="font-size: 1.1em" class="nav-link text-white" href="#preguntasFrecuentes">Frequent Questions</a>
                    </li>

                    <li class="divider-vertical-second-menu sm"></li>


                    <li class="nav-item">

                        <div class="dropdown">
                            <a style="font-size: 1.1em"
                               class=" quitarEnMovil dropdown-toggle btn btn-lg mx-2  btn-warning text-white"
                               data-toggle="dropdown" aria-haspopup="true">
                                <i class="fas fa-globe-americas"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Español</a>
                                <a class="dropdown-item" href="#">Ingles</a>
                            </div>
                        </div>


                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a style="font-size: 1.1em"
                               class="btn btn-lg  quitarEnMovil  btn-info text-white mb-lg-0 mb-xl-0 mb-md-3 mb-sm-3 mb-3"
                               data-toggle="modal" data-target="#exampleModalCenter">
                                Log In
                            </a>
                        </div>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    <div class="row px-0 mx-0 animated fadeIn" id="banner" style="">
        <div class="col-12 row px-0 mx-0">
        </div>
    </div>
</header>
<div class="container">
    <main id="quienesSomos">
        <div class="row">
            <div class="col">
                <h1 class="animated fadeIn slow">Welcome</h1>
                <hr>
                <p class="text-justify wow fadeIn">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit incidunt iure nulla
                    provident quis, rem tenetur. Beatae debitis deleniti dolorum ducimus eos id ipsum nihil numquam
                    saepe similique! Veniam!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium animi atque
                    blanditiis, consequatur cupiditate deserunt dicta eius explicabo impedit laborum laudantium non
                    obcaecati praesentium provident quis repudiandae soluta velit.
                </p>
            </div>
        </div>
    </main>
    <section class="wow fadeIn">
        <div class="row">
            <div class="col-6 text-center p-2 p-sm-4 p-md-4 p-lg-5 p-xl-5">
                <img class="img-fluid" src="img/icono-wst.png" alt="">
                <a style="font-size: 1.3em;background-color: #eb5b25"
                   class="btn btn-lg  btn-block btn-outline-primary text-white mb-lg-0 mb-xl-0 mb-md-3 mb-sm-3 mb-3"
                   data-toggle="modal" data-target="#exampleModalCenter">
                    Log In
                </a>
            </div>
            <div class="col-6 text-center p-2 p-sm-4 p-md-4 p-lg-5 p-xl-5">
                <img class="img-fluid" src="img/worker-min.png" alt="">
            </div>
        </div>
    </section>

    <section id="nuestrosCursos" class="wow fadeInUp">
        <div class="row my-5">
            <div class="col-12 ">
                <h2 class="text-center">Our Courses</h2>
                <div class="row my-5">
                    <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">
                        <img style="width: 500px" src="img/basicCourseIcon.png" class="img-fluid" alt="">
                        <h5>Basic Safety Course</h5>
                    </div>
                    <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">
                        <img style="width: 500px" src="img/carpentryIcon.png" class="img-fluid" alt="">
                        <h5>Carpentry</h5>
                    </div>
                    <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">
                        <img style="width: 500px" src="img/paintIcon.png" class="img-fluid" alt="">
                        <h5>Painter</h5>
                    </div>
                    <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 text-center">
                        <img style="width: 500px" src="img/trim.png" class="img-fluid" alt="">
                        <h5>Trim</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="nuestrosClientes" class="wow fadeInUp">
        <div class="row my-5">
            <div class="col-12 ">
                <h2 class="text-center">Our clients</h2>
                <div class="row my-5">
                    <div class="col">
                        <img src="https://placeimg.com/500/500/any/grayscale" class="img-fluid" alt="">
                    </div>
                    <div class="col">
                        <img src="https://placeimg.com/500/500/any/grayscale" class="img-fluid" alt="">
                    </div>
                    <div class="col">
                        <img src="https://placeimg.com/500/500/any/grayscale" class="img-fluid" alt="">
                    </div>
                    <div class="col">
                        <img src="https://placeimg.com/500/500/any/grayscale" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="preguntasFrecuentes" class="wow fadeIn">
        <div class="row" style="">
            <div class="col">
                <h2 class="text-center">Frequent Questions</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, beatae consequuntur
                    cupiditate, dolores enim est hic ipsam labore laborum odit officia placeat quo quod reprehenderit
                    rerum tempora, voluptate! Expedita, harum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, beatae consequuntur
                    cupiditate, dolores enim est hic ipsam labore laborum odit officia placeat quo quod reprehenderit
                    rerum tempora, voluptate! Expedita, harum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, beatae consequuntur
                    cupiditate, dolores enim est hic ipsam labore laborum odit officia placeat quo quod reprehenderit
                    rerum tempora, voluptate! Expedita, harum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, beatae consequuntur
                    cupiditate, dolores enim est hic ipsam labore laborum odit officia placeat quo quod reprehenderit
                    rerum tempora, voluptate! Expedita, harum.</p>
            </div>
        </div>
    </section>

</div>
<!-- Footer -->
<div class="row p-0 m-0" id="footerHeading">
    <div class="col px-0 px-md-3 px-lg-5 px-xl-5 py-0 m-0 text-center">
        <img class="img-fluid w-50 " src="img/obreros-min.png" alt="">

    </div>
</div>
<footer id="footer" style=" background-color: #eb5b25">
    <div class="container wow fadeIn slow">


        <div class="row pt-4">
            <div class="col text-center">
                <h1 class="text-white">Work Safety Tech</h1>
            </div>
        </div>


        <div class="row px-0 py-5">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
                <H2 class="text-white"><i class="fas fa-location-arrow"></i></H2>
                <h6 class="text-white">1394 Indian Trail-Lilburn Road, Suite 202,
                    Norcross, Ga 30093</h6>

            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
                <h2 class="text-white">
                    <i class="fas fa-envelope"></i>
                </h2>
                <h6 class="text-white">contact@worksafetytech.com</h6>

            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
                <H2 class="text-white"><i class="fas fa-phone-alt"></i></H2>
                <h6 class="text-white">Tel:(770)9637521</h6>

            </div>
        </div>
    </div>

</footer>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <h5 class="text-center">Company <i class="fas fa-building"></i></h5>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-6 col-md-6 text-center">
                            <a href="https://worksafetytech.com/login.php?ext=x#swipe-1" class="btn btn-primary">Log In</a>
                        </div>
                        <div class="col-6 col-md-6 text-center">
                            <a href="https://worksafetytech.com/registerCompany.php" class="btn btn-outline-primary">Sign Up</a>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h5 class="text-center">Worker <i class="fas fa-hard-hat"></i></h5>
                        </div>
                    </div>

                    <div class="row mt-3 mb-5">
                        <div class="col-6 col-md-6 text-center">
                            <a href="https://worksafetytech.com/login.php?ext=x#swipe-2" class="btn btn-primary">Log In</a>
                        </div>
                        <div class="col-6 col-md-6 text-center">
                            <a href="https://worksafetytech.com/register.php" class="btn btn-outline-primary">Sign Up</a>
                        </div>

                    </div>
                </div>
            </div>
            <!--     <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Save changes</button>
                 </div>-->
        </div>
    </div>
</div>

<script src="library/js/jquery.slim.min.js"></script>
<script src="library/js/popper.min.js"></script>
<script src="library/js/bootstrap.min.js"></script>
<script>
    let pageHeight = 150;

    $(window).scroll(function () {
        if ($("#barraNavegacion").offset().top > pageHeight) {
            console.log(pageHeight);

            $("#barraNavegacion").removeClass("bg-transparent");
            $("#barraNavegacion").removeClass("navbar-dark");

            $("#barraNavegacion").addClass("colorBarraNavegacion");
            $("#barraNavegacion").addClass("navbar-dark");

        } else {

            $("#barraNavegacion").addClass("bg-transparent");
            $("#barraNavegacion").addClass("navbar-dark");
            $("#barraNavegacion").removeClass("colorBarraNavegacion");

        }
    });

</script>
</body>
</html>
