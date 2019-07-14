<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- ViewPort -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/newstyle2.css?v=4" >
    <!-- JS - fontawesome -->
    <script src="https://kit.fontawesome.com/4a94473818.js"></script>



    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>
    <script src="assets/js/init.js?v=1"></script>

    <!-- SEO -->
    <title>Servicios Felix</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Image icon -->
    <?php Flight::render( '_partials/favicon.php') ?>

    <!-- Properties for social -->
    <meta property="og:site_name" content="Entel Perú"/>
    <meta property="og:title" content="Ofertas y promociones"/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content="">
    <meta property="og:type" content="page"/>
    <!-- <meta name="google-site-verification" content="" /> -->

    <!-- Google Analytics -->
    <?php Flight::render( '_partials/analytics.php') ?>
    
</head>
<body>

    <?php Flight::render('_partials/header.php'); ?>

    <section class="sf-container-banner">
        <div class="content">
            <div class="sf-banner-block01">
                <div class="block01-title"><h1>PROTEGE LA SEGURIDAD<br /> DE TU <span>FAMILIA</span> Y DE<br /> TU <span>HOGAR</span></h1></div>
                <div class="block01-line"><div class="separatingline"></div></div>
                <div class="block01-subtitle"><h3>Construye y refuerza las zonas seguras de tu casa.</h3></div>
            </div>
        </div>
        <div class="sf-banner-block02 show-mobile">
            <img src="/assets/img/familia-feliz.jpg" alt="">
        </div>
        <div class="content">
            <div class="sf-banner-block03">
                <div class="block03-title"><h2>¿QUÉ HACEMOS?</h2></div>
                <div><div class="separatingline"></div></div>
                <div>Realizamos asesorías, proyectos de remodelación y diseño, servicios de mantenimiento e instalación, muebles a medida y más. Todos con precios a tu alcance.</div>
            <div class="sf-banner-block04">
                formulario
            </div>
        </div>
    </section>

    <section class="sf-container">
        <div class="content">
            <h2>¡RENUÉVALO TODO!</h2>
            <h3>MIRA NUESTROS PROYECTOS REALIZADOS</h3>
            <div>GALERIA</div>
        </div>
    </section>

    <section class="sf-container">
        <div class="content">
            <h2>PREPARA Y PROTEGE TU CASA</h2>
            <h3>TENEMOS LA MÁS COMPLETA SOLUCIÓN</h3>
        </div>
    </section>

    <section class="sf-container">
        <div class="content">
            <div>
                <h2> <span>PREPARACIÓN</span> DE ESTRUCTURAS DE TU CASA PARA CASOS DE <span>SISMOS.</span></h2>
                <div class="block01-line"><div class="separatingline"></div></div>
                <h4>Realízalo en estos 3 pasos:
                    Estudio Estructural - Visita técnica, planos, escaneos, etc.
                    Diagnóstico y presupuesto - Informe y valorización de la solución.
                    Ejecución de obra - Ponemos en marcha la solución.</h4>
            </div>
            <div>imagen</div>            
        </div>
    </section>
    
    <section class="sf-container --gray">
        <div class="content">
            <h2><span>IMPERMEABILIZACIÓN</span> Y <span>REPARACIÓN</span> DE CISTERNAS, PICINAS Y TANQUES ELEVADOS</h2>
            <p>Evita que las lluvias y las fugas deteriore tu cisterna, piscina o tanque elevado. 
                Restaurarlas te ayudará a evitar el consumo excesivo de agua. </p>
            <img src="/assets/img/plomero1.jpg" alt="Impermebilización y reparación de cisternas, piscinas y tanques elevados">
        </div>
    </section>

    <section class="sf-container --gray">
        <div class="content">
            <h2><span>IMPERMEABILIZACIÓN</span> DE TECHOS</h2>
            <p>Protege tu inmueble de las lluvias. Ten un ambiente más saludable para ti y tu familia. 
                Evita las filtraciones, manchas de humedad y moho en muros y techos.</p>
            <img src="/assets/img/plomero1.jpg" alt="Impermebilización de techos">
        </div>
    </section>
    
    <section class="sf-container --gray">
        <div class="content">
            <h2>SERVICIOS <span>ESPECIALIZADOS</span></h2>
            <ul>
                <li>Estructuras metálicas</li>
                <li>Cableado eléctrico, data y telefonía</li>
                <li>Iluminación y rollers</li>
                <li>Obra civil, sanitarias</li>
                <li>Drywall y falsos cielos</li>
                <li>Pintura</li>
                <li>Ventanas y mamparas de vídrio</li>
                <li>Escaleras metálicas</li>
                <li>Servicios Complementarios</li>
            </ul>
            <img src="/assets/img/plomero1.jpg" alt="Servicios Complementarios">
        </div>
    </section>

    <section class="sf-container --gray">
        <div class="content">
            <h2>SERVICIOS <span>COMPLEMENTARIOS</span></h2>
            <ul>
                <li>Gasfitería</li>
                <li>Electricidad</li>
                <li>Mantenimiento e instalaciones</li>
                <li>Aire acondicionado</li>
            </ul>
            <img src="/assets/img/plomero1.jpg" alt="Servicios Complementarios">
        </div>
    </section>

    <section class="sf-container ">
        <div class="content">
            <h2>ALGUNOS DE NUESTROS CLIENTES</h2>
            <p>Hemos realizado más de 650 trabajos sobre remodelación, reforzamientos sísmicos, estructuras metálicas, impermeabilización de cisternas, 
                piscinas y tanques, en casas, edificios y oficinas. </p>
                <ul>
                    <?php for($i = 1; $i <= 6; $i++): ?>
                        <li>
                            <img src="/assets/img/qsi.jpg" alt="QSI">
                        </li>
                    <?php endfor ?>
                </ul>
        </div>
    </section>

    <section class="sf-container --gray">
        <div class="content">
            <h2>¿POR QUÉ TRABAJAR CON NOSOTROS?</h2>
            <p>Tenemos más de 15 años de experiencia en el rubro de la construcción y estamos siempre pensando en las necesidades de nuestros clientes. 
                Es por ello que te ofrecemos la más amplia solución en servicios para tu casa, departamento u oficina.</p>
                <ul>
                    <?php for($i = 1; $i <= 4; $i++): ?>
                        <li>
                            <img src="/assets/img/epps.jpg" alt="Aceptamos todas las formas de pago">
                            <p>Manejamos altos estándares de seguridad</p>
                        </li>
                    <?php endfor ?>
                </ul>
        </div>
    </section>

    <section class="sf-container">
        <div class="content">
            <p class="">¡YA LO SABES!</p>
            <p>CONFÍANOS TU NUEVO PROYECTO</p>
        </div>

        <div class="content">
            <button class="mainButton btn-content-solid-rectagle-organge" type="submit">SOLICITAR INFORMACIÓN</button>
            <p>Aceptamos todas las formas de pago</p>
            <img src="/assets/img/aceptamos-todas-las-tarjetas.png" alt="Aceptamos todas las formas de pago">

        </div>
    </section>

    
    <?php Flight::render('_partials/footer2.php'); ?>

</body>
</html>