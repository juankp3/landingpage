<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- ViewPort -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/newstyle2.css" >
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
            <div class="sf-banner-block02 show-mobile">imagen</div>
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
            <div class=""><h2>¡RENUÉVALO TODO!</h2></div>
            <div class=""><h3>MIRA NUESTROS PROYECTOS REALIZADOS</h3></div>
            <div>GALERIA</div>
        </div>
    </div>

    <section class="sf-container">
        <div class="content">
            <div class=""><h2>PREPARA Y PROTEGE TU CASA</h2></div>
            <div class=""><h3>TENEMOS LA MÁS COMPLETA SOLUCIÓN</h3></div>
        </div>
    </div>

    <section class="sf-container --white">
    
        <div class="content">
            <p class="">¡YA LO SABES!</p>
            <p>CONFÍANOS TU NUEVO PROYECTO</p>
        </div>

        <div class="content">
            <p>Aceptamos todas las formas de pago</p>
            <img src="/assets/img/aceptamos-todas-las-tarjetas.png" alt="Servicios Felix">

            <button class="mainButton btn-content-solid-2" type="submit">SOLICITAR INFORMACIÓN</button>
        </div>
    </div>

    
    <?php Flight::render('_partials/footer2.php'); ?>

</body>
</html>