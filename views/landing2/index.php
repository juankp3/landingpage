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
    <script src="assets/js/init2.js?v=1"></script>

    <!-- SEO -->
    <title>Protege la seguridad de tu familia y de tu hogar | Servicios Felix</title>
    <meta name="description" content="Preparación de estructuras de tu casa para casos de sismos, Impermeabilización y preparación de cisternas, picinas y tanques elevados, impermebilización de techos, servicios especializados, servicios complementarios">
    <meta name="keywords" content="sismos,creparación de cisternas, picinas,impermebilización de techos, servicios especializados, servicios complementarios">

    <!-- Image icon -->
    <?php Flight::render( '_partials/favicon.php') ?>

    <!-- Properties for social -->
    <meta property="og:site_name" content="Servicios Felix"/>
    <meta property="og:title" content="Protege la seguridad de tu familia y de tu hogar"/>
    <meta property="og:description" content="Preparación de estructuras de tu casa para casos de sismos, Impermeabilización y preparación de cisternas, picinas y tanques elevados, impermebilización de techos, servicios especializados, servicios complementarios"/>
    <meta property="og:image" content="/assets/img/familia-feliz.jpg">
    <meta property="og:type" content="page"/>
    <!-- <meta name="google-site-verification" content="" /> -->

    <!-- Google Analytics -->
    <?php Flight::render( '_partials/analytics.php') ?>
    
</head>
<body>

    <?php Flight::render('_partials/header.php'); ?>

    <section class="sf-container banner">
        <div class="content">
            <div class="sf-banner-block01">
                <div class="b01">
                    <div class="block01-title"><h1>PROTEGE LA SEGURIDAD<br /> DE TU <span>FAMILIA</span> Y DE<br /> TU <span>HOGAR</span></h1></div>
                    <hr class="separatingline" />
                    <div class="block01-subtitle"><h3>Construye y refuerza las zonas seguras de tu casa.</h3></div>
                </div>
                <div class="b02 hide-mobile">
                    <?php include '_partials/form.php' ?>
                </div>
                
            </div>
        </div>
        <div class="sf-banner-block02 show-mobile">
            <img src="/assets/img/familia-feliz.jpg" alt="">
        </div>

        <div class="sf-quehacemos">
            <div class="content">
                <div class="block-01  p-block-01">
                    <h2>¿QUÉ HACEMOS?</h2>
                    <hr class="separatingline" />
                    <h3>¡Te ofrecemos la más completa solución!</h3>
                    <p>Realizamos asesorías, proyectos de remodelación y diseño, servicios de mantenimiento e instalación, muebles a medida y más. Todos con precios a tu alcance.</p>
                </div>
            </div>
        </div>
        
        <div class="content show-mobile">
            <?php include '_partials/form.php' ?>
        </div>
    </section>

    <section class="sf-container p-block-01">
        <div class="content">
            <div class="block-01">
                <h2>PREPARA Y PROTEGE TU CASA</h2>
                <hr class="separatingline" />
                <p>TENEMOS LA MÁS COMPLETA SOLUCIÓN</p>
            </div>
        </div>
    </section>

    <?php  include '_partials/services.php' ?>

    <section class="sf-container p66 clientes">
        <div class="content">
            <div class="block-01">
                <h2 class="center">ALGUNOS DE NUESTROS CLIENTES</h2>
                <hr class="separatingline mb24" />
                <p>Hemos realizado más de 650 trabajos sobre remodelación, reforzamientos sísmicos, estructuras metálicas, impermeabilización de cisternas, 
                piscinas y tanques, en casas, edificios y oficinas. </p>
            </div>

            <div class="sf-container-ul">
                <ul class="sf-content-item">
                    <?php foreach($customers as $customer): ?>
                        <li>
                            <img src="/assets/img/customer/<?php echo $customer['img'] ?>" alt="<?php echo $customer['name'] ?>">
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>

        
    </section>

    <section class="sf-container --gray p-block-01 gallery">
        <div class="content">
            <div class="block-01">
                <h2>¡RENUÉVALO TODO!</h2>
                <p>MIRA NUESTROS PROYECTOS REALIZADOS</p>
            </div>
            <?php  include '_partials/gallery.php' ?>
        </div>
    </section>

    <section class="sf-container --gray p66">
        <div class="content">
            <div class="block-01">
                <h2>¿POR QUÉ TRABAJAR CON NOSOTROS?</h2>
                <hr class="separatingline mb24"  />
                <p>Tenemos más de 15 años de experiencia en el rubro de la construcción y estamos siempre pensando en las necesidades de nuestros clientes. 
                    Es por ello que te ofrecemos la más amplia solución en servicios para tu casa, departamento u oficina.</p>
            </div>

            <div class="sf-container-ul">
                <ul class="sf-content-item">
                    <?php 
                        foreach($works as $work):
                    ?>
                        <li>
                            <img src="/assets/img/works/<?php echo $work['img'] ?>" alt="<?php echo $work['name'] ?>">
                            <p><?php echo $work['name'] ?></p>
                            <hr class="separatingline">
                        </li>    
                    <?php 
                        endforeach 
                    ?>
                </ul>
            </div>
        </div>
    </section>

    <section class="sf-container  p-block-01">
        <div class="content">
            <div class="block-01">
                <h2>¡YA LO SABES!</h2>
                <p>CONFÍANOS TU NUEVO PROYECTO</p>
            </div>
        </div>

        <div class="form-footer">
            <div class="content">
                <button class="mainButton btn-content-solid-rectagle-organge" type="submit">SOLICITAR INFORMACIÓN</button>
                <p>Aceptamos todas las formas de pago</p>
                <div class="img_cards">
                    <img src="/assets/img/visa.png" alt="" title="visa">
                    <img src="/assets/img/american.png" alt="" title="american">
                    <img src="/assets/img/master.png" alt="" title="master">
                    <img src="/assets/img/paypal.png" alt="" title="paypal">
                </div>
            </div>
        </div>
    </section>

    <?php Flight::render('_partials/footer2.php'); ?>

</body>
</html>