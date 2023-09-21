<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Iotec Solutions</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-dark navbar-dark py-1 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="display-4 text-white text-uppercase m-0">Iotec</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto py-0">
                <a href="#home" class="nav-item nav-link active">Inicio</a>
                <a href="#about" class="nav-item nav-link">LoraWAN</a>
                <a href="#service" class="nav-item nav-link">Nuestro servicio</a>
                
            </div>
            <a href="index.html" class="navbar-brand bg-primary px-4 mx-3 d-none d-lg-block">
                <h1 class="display-4 text-white text-uppercase m-0">Iotec</h1>
            </a>
            <div class="navbar-nav mr-auto py-0">
                <a href="#project" class="nav-item nav-link">Proyecto</a>
                <!--a href="#team" class="nav-item nav-link">Equipo</a>-->
                <a href="#faqs" class="nav-item nav-link">Preguntas</a>
                <a href="/dashboard" class="nav-item nav-link">Plataforma</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5" id="home">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/fondo.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Iotec Solutions</h4>
                            <h3 class="display-2 font-secondary text-white mb-4">Administra tus dispositivos desde cualquier lugar</h3>
                            <a class="btn btn-light font-weight-bold py-3 px-5 mt-2 btn-scroll" href="/register">¡Unete!</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/fondo2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Iotec Solutions</h4>
                            <h3 class="display-2 font-secondary text-white mb-4">Controla tus activos en tiempo real donde sea que estén</h3>
                            <a class="btn btn-light font-weight-bold py-3 px-5 mt-2 btn-scroll" href="/register">¡Unete!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid mb-4 mb-lg-0" src="img/mb.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Acerca de LoRa</h6>
                    <h1 class="display-4 mb-3">Utilizamos LoRa<span class="text-primary">WAN</span></h1>
                    <p>La tecnología LoRa permite una transmisión de datos de larga distancia y de bajo consumo de energía, lo que significa que los dispositivos pueden monitorear y transmitir datos de forma remota desde cualquier lugar en tiempo real, lo que los convierte en una herramienta valiosa para la supervisión y el control de activos en distintos sectores.</p>
                    <a class="btn btn-primary font-weight-bold py-3 px-5 mt-2" type="button" data-toggle="modal" data-target="#exampleModalLong">Leer más</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid py-5" id="service">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Servicios</h6>
                <h1 class="font-secondary display-4">Ofrecemos soluciones en</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="product-item mb-2">
                        <div class="product-img">
                            <img class="img-fluid" src="img/monit.jpg" alt="">
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h3 class="m-0">Monitoreo de dispositivos</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="product-item mb-2">
                        <div class="product-img">
                            <img class="img-fluid" src="img/sec.jpg" alt="">
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h3 class="m-0">Dispositivos de seguridad</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3">
                    <div class="product-item mb-2">
                        <div class="product-img">
                            <img class="img-fluid" src="img/tres.jpg" alt="">
                            <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                <i class="fa fa-2x fa-plus text-white"></i>
                            </a>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h3 class="m-0">Control remoto de dispositivos</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    
    <!-- FAQs Start -->
    <div class="container-fluid py-5" id="faqs">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Algunas ventajas</h6>
                <h1 class="display-4">De la tecnologia <span class="text-primary">LoRa</span></h1>
            </div>
            <div class="row">
                <div class="col-md-6 border-right border-primary">
                    <div class="text-center text-md-right mr-md-3 mb-4 mb-md-0">
                        <h3 class="mb-4">Para tu empresa</h3>
                        <h5 class="mb-3"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Conectividad de larga distancia</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Ahorro de costos</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Monitoreo en tiempo real</h5>
                        <h5 class="mb-0"><i class="fa fa-check text-success float-md-right mr-2 mr-md-0 ml-md-2"></i>Personalización</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-left ml-md-3">
                        <h3 class="mb-4">Para tu hogar</h3>
                        <h5 class="mb-3"><i class="fa fa-check text-success mr-2"></i>Mejora de la calidad de vida</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-success mr-2"></i>Accesibilidad</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-success mr-2"></i>Seguridad</h5>
                        <h5 class="mb-0"><i class="fa fa-check text-success mr-2"></i>Ahorro de energía</h5>
                    </div>
                </div>
                <div class="col-md-12 text-center pt-3">
                    <a class="btn btn-primary font-weight-bold py-3 px-5 mt-4 btn-scroll" href="#contact">¡Contactanos!</a>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->

    <div class="container-fluid bg-dark text-white text-center border-top py-4 px-sm-3 px-md-5" style="margin-top: 90px;border-color: rgba(256, 256, 256, .05) !important;">
        <p class="m-0 text-white">&copy; <a href="#">Iotec</a> All Rights Reserved. Designed by <a href="https://htmlcodex.com">HTML Codex</a></p>
    </div>
    <!-- Footer End -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">¿Qué es LoRaWAN y cómo funciona?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid mb-4" src="img/lora.png" alt="">
	<p>LoRaWAN es un protocolo de comunicación inalámbrica de bajo consumo de energía utilizado en Internet de las Cosas (IoT) para conectar dispositivos a través de redes de área amplia de baja potencia (LPWAN). Fue desarrollado por la compañía francesa Semtech en 2014 y se ha convertido en una tecnología popular en la industria de IoT debido a su bajo consumo de energía, su alcance de larga distancia y su capacidad para soportar una gran cantidad de dispositivos.</p>
	<p>El término "LoRa" significa "Long Range" (Larga distancia), y se refiere a la capacidad de la tecnología de comunicar a larga distancia con bajo consumo de energía. El protocolo utiliza una modulación de espectro ensanchado (CSS) para transmitir datos a través del espectro de radio, lo que permite que los dispositivos se comuniquen a distancias de hasta varios kilómetros sin la necesidad de amplificadores de potencia costosos.</p>
	<p>LoRaWAN funciona mediante el uso de una topología de red de estrella, donde los dispositivos finales (sensores, actuadores, etc.) se comunican con uno o varios gateways que actúan como puntos de acceso a la red. Los gateways reciben los datos de los dispositivos finales y los transmiten a través de una red de backhaul (generalmente una red de área amplia, como LTE) a un servidor central, que luego procesa y almacena los datos.</p>
	<p>Una de las ventajas de LoRaWAN es su bajo consumo de energía, lo que lo hace ideal para aplicaciones de IoT que requieren largos períodos de vida de la batería. Los dispositivos finales pueden funcionar durante varios años con una sola batería debido a la eficiencia energética del protocolo.</p>
	<p>Algunas de las aplicaciones prácticas de LoRaWAN incluyen:</p>
	<ul>
		<li>Monitorización y control de infraestructuras inteligentes, como edificios, ciudades y redes de transporte.</li>
		<li>Monitorización de la calidad del aire y del agua.</li>
		<li>Monitorización de la salud y el bienestar, como seguimiento de pacientes o monitoreo de la actividad física.</li>
		<li>Agricultura de precisión, para el seguimiento y la optimización de los cultivos.</li>
		<li>Gestión de residuos, para la monitorización y optimización de la recolección de residuos.</li>
	</ul>
	<p>En resumen, LoRaWAN es una tecnología de comunicación inalámbrica de bajo consumo de energía que se utiliza en IoT para conectar dispositivos a través de redes de área amplia de baja potencia. Su eficiencia energética, larga distancia y capacidad para soportar una gran cantidad de dispositivos lo hacen ideal para aplicaciones de IoT en una amplia variedad de industrias.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!-- Scripts -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>
    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>