<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- ViewPort -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/css/newstyle.css" >
    <!-- JS - fontawesome -->
    <script src="https://kit.fontawesome.com/4a94473818.js"></script>

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="/assets/vendors/jquery.min.js"></script>
    <script src="/assets/owlcarousel/owl.carousel.js"></script>
    <script src="/assets/js/init.js?v=1"></script>
    <script src="/assets/js/jquery.validate.js"></script>
    <!-- <script src="assets/js/dist/jquery.validate.js"></script> -->
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

    <!-- Google Analytics -->
    <?php Flight::render( '_partials/analytics.php') ?>

</head>
<body>

    <?php Flight::render('_partials/header.php'); ?>
    
    
    <section class="sf-container-thanks">
        <div class="content">
            <div class="sf-content-thanks">
                <p class="thanks-tit">¡GRACIAS!</p>
                <p class="thanks-desc">Se ha registrado tu solicitud. Tan pronto nos sea posible, nos pondremos en contacto contigo.</p>
                <div class="thanks-subtit">Contáctanos</div>
                <div class="thanks-whatsapp">
                    <a class="sf-btn -whatsapp -web" href="https://api.whatsapp.com/send?phone=51997360983&amp;text=_*Hola!*_">
                        <i class="fab fa-whatsapp mr5" aria-hidden="true"></i>
                        <span>997-360-983</span>
                    </a>
                </div>
                <div class="thanks-email"><strong>E-mail:</strong> isr200305@outlook.com</div>
                <div class="thanks-btn">
                    <button class="mainButton btn-content-solid-2" type="submit">VOLVER A LA PÁGINA</button>
                </div>
            </div>
        </div>
    </section>
    

    <?php Flight::render('_partials/footer.php'); ?>

</body>
</html>
