<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- ViewPort -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/newstyle.css" >
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

    <!-- Google Analytics -->
    <?php Flight::render( '_partials/analytics.php') ?>

</head>
<body>

    <?php Flight::render('_partials/header.php'); ?>
    <?php include '_partials/popup.php' ?>
    
    <section class="sf-title sf-gray-100">
        <div class="content">
            <p>¿Necesitas <strong>Remodelar</strong> o <strong>Ampliar</strong> los ambientes de tu hogar?</p>
        </div>
    </section>

    <section class="sf-container-img-banner show-mobile">
        <div class="content">
            <img src="assets/img/sala.png" alt="">
        </div>
    </section>

    <section class="sf-room">
        <div class="content">
            <div class="sf-container-room">
                <div class="sf-content-description">
                    <h2 class="sf-room-title">¡No te preocupes! <p>Tenemos la más completa solución.</p></h2>
                    <p class="sf-room-description">Realizamos asesorias, proyectos de remodelación y diseño, servicios de mantenimiento e instalación,
                    muebles a medida y más. Todos con precios a tu alcance.</p>
                </div>
                <div class="sf-content-form hide-mobile">
                    <?php include '_partials/form.php' ?>
                </div>
            </div>
        </div>
    </section>


    <section class="sf-room show-mobile">
        <div class="sf-container-room">
            <div class="sf-content-form">
                <?php include '_partials/form.php' ?>
            </div>
        </div>
    </section>

    
    <section class="sf-container-beneficios">
        <div class="content">
            <div class="sf-content-beneficios">
                <div class="sf-beneficio">
                    <div class="sf-image-beneficios">
                        <img src="assets/img/work.png" alt="">
                    </div>
                    <div class="sf-title-beneficios">Trabajo Personalizado</div>
                </div>
                <div class="sf-beneficio">
                    <div class="sf-image-beneficios">
                        <img src="assets/img/service.png" alt="">
                    </div>
                    <div class="sf-title-beneficios">Servicio 100% Profesional</div>
                </div>
                <div class="sf-beneficio">
                    <div class="sf-image-beneficios">
                        <img src="assets/img/security.png" alt="">
                    </div>
                    <div class="sf-title-beneficios">Satisfacción Garantizada</div>
                </div>
            </div>
        </div>
    </section> 


    <section class="sf-container-proyectos-new">
        <?php  include '_partials/gallery.php' ?>
    </section>

    <section class="sf-container-msj-proyectos">
        <div class="content">
            <div class="sf-container-flex-msj-proyectos">
                <div class="sf-msj-proyectos">"<label>Ahora cuenta con nosotros</label> para los cambios que planeabas”</div>
                <div class="sf-msj-button">
                    <button class="btn-content-solid" type="submit">CONTÁCTENOS</button>
                </div>
            </div> 
        </div>
    </section> 

    <section class="sf-container-servicios">
        <div class="content">
            <div class="sf-servicios">
                <div class="sf-data-servicios">
                    <div class="sf-especializados">
                        <div class="sf-title-especializacion">
                            <p>Servicios Especializados</p>
                        </div>
                        <div class="sf-list-especializacion">
                            <ul class="list-especializacion">
                                <li>Preparación de estructuras existentes para caso de sismos</li>
                                <li>Impermeabilización y reparación de cisternas, piscinas, tanques elevados</li>
                                <li>Impermeabilización de techos</li>
                                <li>Estructuras metálicas</li>
                                <li>Cableado eléctrico, data y telefonía</li>
                                <li>Iluminación y rollers</li>
                                <li>Obra civil, sanitarias</li>
                                <li>Drywall y falsos cielos</li>
                                <li>Pintura</li>
                                <li>Ventanas y mamparas de vídrio</li>
                                <li>Escaleras metálicas</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sf-complementarios">
                        <div class="sf-title-complementarios">
                            <p>Servicios Complementarios</p>
                        </div>
                        <div class="sf-list-complementarios">
                            <ul class="list-complementarios">
                                <li>Gasfitería</li>
                                <li>Electricidad</li>
                                <li>Mantenimiento e Instalación</li>
                                <li>Aire acondicionado</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="sf-img-servicios">
                    <img src="assets/img/bg_servicios.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="sf-container-trabaja">
        <div class="content">
            <section class="sf-trabaja-nosotros">
                <div class="sf-content-bgmovil-nosotros">
                    <img src="assets/img/bg_trabaja.png" alt="">
                </div>
                <div class="sf-content-data-nosotros">
                    <div class="sf-title-data-nosotros">
                        <p>¿Por qué trabajar con nosotros?</p>
                    </div>
                    <div class="sf-list-data-nosotros">
                        <ul class="list-nosotros">
                            <li>Tenemos amplia experiencia en el rubro</li>
                            <li>Nuestro personal es altamente capacitado y con gran experiencia</li>
                            <li>Brindamos un servicio rápido y eficiente</li>
                            <li>Manejamos precios justos y competitivos</li>
                        </ul>
                    </div>
                    <div class="sf-button-data-contactenos">
                        <button class="btn-content-solid" type="submit">CONTÁCTENOS</button>
                    </div>
                </div>
            </section>
        </div>
    </section>


    <?php Flight::render('_partials/footer.php'); ?>

</body>
</html>

<script>
$(document).ready(function(){
    $('#popup1').attr('left',-500);
    $('#popup2').attr('right',-600);
    $('#popup3').attr('left',-500);

    $(document).scroll(function() {
        var y = $(this).scrollTop(); 
        if (y > 200) {          
            $('#popup1').removeClass('animation_hide_left');
            $('#popup1').addClass('animation_show_left'); 

            $('#popup2').removeClass('animation_show_right');
            $('#popup2').addClass('animation_hide_right');
        }
        
        if (y > 900) {
            $('#popup2').removeClass('animation_hide_right');
            $('#popup2').addClass('animation_show_right');

            $('#popup1').removeClass('animation_show_left');
            $('#popup1').addClass('animation_hide_left'); 

            $('#popup3').removeClass('animation_show_left');
            $('#popup3').addClass('animation_hide_left'); 
        }
        
        if (y > 1900) {
            $('#popup3').removeClass('animation_hide_left');
            $('#popup3').addClass('animation_show_left'); 

            $('#popup2').removeClass('animation_show_right');
            $('#popup2').addClass('animation_hide_right');
        }
    });

    $('#closebtn1').click( function () {
        $('#popup1').hide();
    });
    $('#closebtn2').click( function () {
        $('#popup2').hide();
    });
    $('#closebtn3').click( function () {
        $('#popup3').hide();
    });

});
</script>