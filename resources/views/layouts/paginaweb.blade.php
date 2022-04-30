<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <title>Academia Unión Científica</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/headers/" />
    <link rel="stylesheet" href=".\css\bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href=".\css\bootstrap4\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href=".\css\fontawesome-free-5.0.1\css\fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href=".\css\OwlCarousel2-2.2.1\owl.carousel.css">
    <link rel="stylesheet" type="text/css" href=".\css\OwlCarousel2-2.2.1\owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href=".\css\OwlCarousel2-2.2.1\animate.css">
    <link rel="stylesheet" type="text/css" href=".\css\main_styles.css">
    <link rel="stylesheet" type="text/css" href=".\css\responsive.css">

    <link rel="stylesheet" href=".\css\animate\animate.min.css">
    <link rel="stylesheet" href=".\css\owlcarousel\assets\owl.carousel.min.css">
    <link rel="stylesheet" href=".\css\bootstrap2.min.css">
    <link rel="stylesheet" href=".\css\style.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <link href="headers.css" rel="stylesheet" />
</head>
<body name="top">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>Bootstrap</title>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
            </path>
        </symbol>
        <symbol id="home" viewBox="0 0 16 16">
            <path
                d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
        </symbol>
        <symbol id="speedometer2" viewBox="0 0 16 16">
            <path
                d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
            <path fill-rule="evenodd"
                d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
        </symbol>
        <symbol id="table" viewBox="0 0 16 16">
            <path
                d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </symbol>
        <symbol id="grid" viewBox="0 0 16 16">
            <path
                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
        </symbol>
    </svg>
    <main>
        <nav class="container navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <h2 class="m-0 text-primary">
                    <img src=".\img\LogoAUC.png" alt="" class="bi me-2" width="45" height="45" role="img">
                </h2>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="#" class="nav-item nav-link active">INICIO</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">NOSOTROS</a>
                        <div class="dropdown-menu fade-down m-0">
                            <a href="/v1" class="dropdown-item"><u>Quienes Somos?</u></a>
                            <a href="/v2" class="dropdown-item"><u>Nuestros Exitos</u></a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">SERVICIOS</a>
                        <div class="dropdown-menu fade-down m-0">
                            <a href="/v3" class="dropdown-item"><u>Ciclos</u></a>
                        </div>
                    </div>
                    <a href="/v4" class="nav-item nav-link">NOTICIAS</a>
                    <a href="#" class="nav-item nav-link">CONTACTANOS</a>
                    <a href="#" class="nav-item nav-link active">|</a>
                    <a href="#" class="nav-item nav-link active">INTRANET</a>
                </div>
                <h2 class="m-0 text-primary">
                    <img src=".\img\LogoAUC2.jpg" alt="" class="bi me-2" width="180" height="45" role="img">
                </h2>
            </div>
        </nav>
        <div class="super_container">
            <!--Slider-->
            <div class="home">
                <div class="hero_slider_container">
                    <div class="hero_slider owl-carousel">
                        <div class="hero_slide">
                            <div class="hero_slide_background" style="background-image:url(./img/AUC01.jpg)"></div>
                            <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                                <div class="hero_slide_content text-center">
                                    <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Mejor plana <span style="background-color:#b7292f;">Docente</span></h1>
                                </div>
                            </div>
                        </div>
                        <div class="hero_slide">
                            <div class="hero_slide_background" style="background-image:url(./img/AUC02.jpg)"></div>
                            <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                                <div class="hero_slide_content text-center">
                                    <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><span style="background-color:#b7292f;">Líderes</span> en Huancán!</h1>
                                </div>
                            </div>
                        </div>
                        <div class="hero_slide">
                            <div class="hero_slide_background" style="background-image:url(./img/AUC03.jpg)"></div>
                            <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                                <div class="hero_slide_content text-center">
                                    <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Alto <span style="background-color:#b7292f;">Nivel</span> Academico</h1>
                                </div>
                            </div>
                        </div>
                        <div class="hero_slide">
                            <div class="hero_slide_background" style="background-image:url(./img/AUC04.jpg)"></div>
                            <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                                <div class="hero_slide_content text-center">
                                    <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Estudia con los <span style="background-color:#b7292f;">Mejores</span>!</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero_slider_left hero_slider_nav trans_200" style="background-color:#ffffff;">
                        <span class="fa fa-arrow-left text-primary me-2" style="color:b7292f;"></span>
                    </div>
                    <div class="hero_slider_right hero_slider_nav trans_200" style="background-color:#ffffff;">
                        <span class="fa fa-arrow-right text-primary me-2" style="color:b7292f;"></span>
                    </div>
                </div>
            </div>
            <div class="hero_boxes">
                <div class="hero_boxes_inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 hero_box_col">
                                <div class="hero_box d-flex flex-row align-items-center justify-content-start" style="background-color:#b7292f; opacity:0.75;">
                                    <img src="./img/books.svg" class="svg" alt="">
                                    <div class="hero_box_content">
                                        <h2 class="hero_box_title">Clases</h2>
                                        <h2 class="hero_box_title">Presenciales</h2>
                                        <a href="#" class="hero_box_link">Ver más</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 hero_box_col">
                                <div class="hero_box d-flex flex-row align-items-center justify-content-start" style="background-color:#b7292f; opacity:0.75;">
                                    <img src="./img/placeholder.svg" class="svg" alt="">
                                    <div class="hero_box_content">
                                        <h2 class="hero_box_title">Ambientes</h2>
                                        <h2 class="hero_box_title">Confortables</h2>
                                        <a href="#" class="hero_box_link">Ver más</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 hero_box_col">
                                <div class="hero_box d-flex flex-row align-items-center justify-content-start" style="background-color:#b7292f; opacity:0.75;">
                                    <img src="./img/professor.svg" class="svg" alt="">
                                    <div class="hero_box_content">
                                        <h2 class="hero_box_title">Docentes de</h2>
                                        <h2 class="hero_box_title">Amplia</h2>
                                        <h2 class="hero_box_title">Experiencia</h2>
                                        <a href="#" class="hero_box_link">Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Hero boxes-->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="img-fluid position-absolute w-100 h-100" src=".\img\somos.jpg" alt="" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                            <h6 class="section-title bg-white text-start text-primary pe-3">Nosotros</h6>
                            <h1 class="mb-4">Academia Unión Científica</h1>
                            <p class="mb-4" style="color:#000000;">Somos una Institución Educativa con gran servicio a la educación del pueblo, sin fines de lucro, generando una formación integral en sus estudiantes que prioriza un alto rendimiento académico, sólida formación en valores, a fin de formar personas responsables con compromiso social, teniendo como base en su vida: el respeto, empatía y el amor a los demás.</p>
                            <p class="mb-4" style="color:#000000;">Brindamos una educación de calidad, con profesionales de amplia experiencia que garantizan el aprendizaje para formar profesionales competentes.</p>
                            <div class="row gy-2 gx-4 mb-4">
                                <div class="col-sm-6">
                                    <p class="mb-0" style="color:#000000;"><i class="fa fa-arrow-right text-primary me-2"></i><u>Ciclo Vacacional</u></p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0" style="color:#000000;"><i class="fa fa-arrow-right text-primary me-2"></i><u>Ciclo Superintensivo</u></p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0" style="color:#000000;"><i class="fa fa-arrow-right text-primary me-2"></i><u>Ciclo Semestral</u></p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0" style="color:#000000;"><i class="fa fa-arrow-right text-primary me-2"></i><u>Ciclo Anual</u></p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0" style="color:#000000;"><i class="fa fa-arrow-right text-primary me-2"></i><u>Ciclo de Primera Seleccin</u></p>
                                </div>
                            </div>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="/v3">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Galeria-->
            <div class="container-xxl py-5 category">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center text-primary px-3">Galería</h6>
                        <h1 class="mb-5">Actividades</h1>
                    </div>
                    <div class="row g-3">
                        <div class="col-lg-7 col-md-6">
                            <div class="row g-3">
                                <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                                    <a class="position-relative d-block overflow-hidden" href="">
                                        <img class="img-fluid" src="./img/Actividades1.jpg" alt="">
                                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px; opacity:0.75;">
                                            <h5 class="m-0">Actividades</h5>
                                            <small class="text-primary">Deportivas</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                                    <a class="position-relative d-block overflow-hidden" href="">
                                        <img class="img-fluid" src="./img/Actividades4.jpg" alt="">
                                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px; opacity:0.75;">
                                            <h5 class="m-0">Preparacion</h5>
                                            <small class="text-primary">Preuniversitaria</small>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                                    <a class="position-relative d-block overflow-hidden" href="">
                                        <img class="img-fluid" src="./img/Actividades3.jpg" alt="">
                                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px; opacity:0.75;">
                                            <h5 class="m-0">Simulaciones</h5>
                                            <small class="text-primary">Semanales</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                            <a class="position-relative d-block h-100 overflow-hidden" href="">
                                <img class="img-fluid position-absolute w-100 h-100" src="./img/Actividades2.jpg" alt="" style="object-fit: cover;">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px; opacity:0.75;">
                                    <h5 class="m-0">Celebración</h5>
                                    <small class="text-primary">Cachimbo</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Ciclos-->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center text-primary px-3">Ciclos</h6>
                        <h1 class="mb-5">Populares Ciclos</h1>
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="./img/Ciclo1.jpg" alt="">
                                    <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Ver más</a>
                                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Matricúlate</a>
                                    </div>
                                </div>
                                <div class="text-center p-4 pb-0">
                                    <h3 class="mb-0">Ciclo Pre Primaria</h3>
                                    <!-- <div class="mb-3">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small>(123)</small>
                                    </div> -->
                                    <!-- <h5 class="mb-4">Web Design & Development Course for Beginners</h5> -->
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Raúl</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>3 meses</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Estudiantes</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="course-item bg-light">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="./img/Ciclo2.jpg" alt="">
                                    <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Ver más</a>
                                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Matricúlate</a>
                                    </div>
                                </div>
                                <div class="text-center p-4 pb-0">
                                    <h3 class="mb-0">Ciclo Repaso</h3>
                                    <!-- <div class="mb-3">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small>(123)</small>
                                    </div> -->
                                    <!-- <h5 class="mb-4">Web Design & Development Course for Beginners</h5> -->
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Raúl</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>3 meses</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Estudiantes</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="course-item bg-light">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="./img/Cliclo3.jpg" alt="">
                                    <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Ver más</a>
                                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Matricúlate</a>
                                    </div>
                                </div>
                                <div class="text-center p-4 pb-0">
                                    <h3 class="mb-0">Ciclo Anual</h3>
                                    <!-- <div class="mb-3">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small>(123)</small>
                                    </div> -->
                                    <!-- <h5 class="mb-4">Web Design & Development Course for Beginners</h5> -->
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>Raúl</small>
                                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>3 meses</small>
                                    <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Estudiantes</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            <!--Personal-->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center text-primary px-3">Docente</h6>
                        <h1 class="mb-5">Plana Docente</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item bg-light">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="./img/P1.jpg" alt="">
                                </div>
                                <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                    <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                        <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <h5 class="mb-0">Hugo Parejas Suasnabar</h5>
                                    <small>Director</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item bg-light">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="./img/P2.jpg" alt="">
                                </div>
                                <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                    <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                        <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <h5 class="mb-0">Raúl Crispín de la Peña</h5>
                                    <small>Coordinador</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="team-item bg-light">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="./img/P3.jpg" alt="">
                                </div>
                                <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                    <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                        <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <h5 class="mb-0">Yesenia Roque Castillo</h5>
                                    <small>Secretaria</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="team-item bg-light">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" src="./img/P4.jpg" alt="">
                                </div>
                                <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                                    <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                        <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <h5 class="mb-0">Diego Vilcahuamán Quispe</h5>
                                    <small>Docente</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Contacto y prematricula-->
            <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" name="contact">
                <div class="container">
                    <div class="text-center">
                        <h6 class="section-title bg-white text-center text-primary px-3">Contáctanos</h6>
                    </div>
                    <div class="register wow fadeInUp">
                        <div class="container-fluid">
                            <div class="row row-eq-height">
                                <div class="col-lg-6 nopadding" style="background-image:url(.\img\search_background.jpg);">
                                    <div class="register_section d-flex flex-column align-items-center justify-content-center">
                                        <div class="register_content text-center">
                                            <h1 class="register_title">Información de contacto</h1>
                                            <h2 class="register_title">Central Telefonica</h2>
                                            <p class="register_text">983686131 - 984751930</p>
                                            <h2 class="register_title">Correo</h2>
                                            <p class="register_text">contactanos@academiaunioncientifica.com</p>
                                            <h2 class="register_title">Ubiquenos</h2>
                                            <p class="register_text">Plaza Principal de Huancán</p>
                                            <p class="register_text">Av. Principal Sur Nro.1775</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 nopadding">
                                    <div class="search_section d-flex flex-column align-items-center justify-content-center">
                                        <div class="search_background" style="background-image:url(./img/search_background.jpg);"></div>
                                        <div class="search_content text-center">
                                            <h1 class="search_title">Prematrícula</h1>
                                            <form id="search_form" class="search_form" action="post">
                                                <input id="search_form_name" class="input_field search_form_name" type="text" placeholder="Apellido y Nombre" required="required" data-error="name is required.">
                                                <input id="search_form_category" class="input_field search_form_category" type="number" placeholder="Celular">
                                                <input id="search_form_degree" class="input_field search_form_degree" type="email" placeholder="Correo electrónico">
                                                <button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">Aceptar</button>
                                            </form>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer-->
            <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6">
                            <h4 class="text-white mb-3">Vínculo rápido</h4>
                            <a class="btn btn-link" href="#top">Inicio</a>
                            <a class="btn btn-link" href="/v1">Nosotros</a>
                            <a class="btn btn-link" href="/v3">Servicios</a>
                            <a class="btn btn-link" href="/v4">Noticias</a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h4 class="text-white mb-3">Contactos</h4>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Distrito de Huancán - Huancayo</p>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Plaza principal de Huancán - Av. Panamericana Sur #1175</p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>983 686 131</p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>984 751 930</p>
                            <p class="mb-2"><i class="fa fa-calendar me-3"></i>7:30 am. - 6:30pm. De Lunes a Viernes</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom" href="https://academiaunioncientifica.com">Academia Unión Científica</a>®
                                FIS UNCP
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <div class="footer-menu">
                                    <a href="">Inicio</a>
                                    <a href="">Nosotros</a>
                                    <a href="">Ciclos</a>
                                    <a href="">Recursos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src=".\js\bootstrap.js"></script>

    <script src=".\js\jquery-3.2.1.min.js"></script>
    <script src=".\js\bootstrap4\popper.js"></script>
    <script src=".\js\bootstrap4\bootstrap.min.js"></script>
    <script src=".\js\greensock\TweenMax.min.js"></script>
    <script src=".\js\greensock\TimelineMax.min.js"></script>
    <script src=".\js\scrollmagic\ScrollMagic.min.js"></script>
    <script src=".\js\greensock\animation.gsap.min.js"></script>
    <script src=".\js\greensock\ScrollToPlugin.min.js"></script>
    <script src=".\js\OwlCarousel2-2.2.1\owl.carousel.js"></script>
    <script src=".\js\scrollTo\jquery.scrollTo.min.js"></script>
    <script src=".\js\easing\easing.js"></script>
    <script src=".\js\custom.js"></script>

    <script src=".\js\wow\wow.min.js"></script>
    <script src=".\js\easing\easing.min.js"></script>
    <script src=".\js\waypoints\waypoints.min.js"></script>
    <script src=".\js\owlcarousel\owl.carousel.min.js"></script>
    <script src=".\js\main.js"></script>
</body>

</html>
