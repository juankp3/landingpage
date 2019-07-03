function landing() {
    var dom, catchDom, suscribeEvents, events, fn, init,

    dom = {}
    catchDom = function () {
        dom.gallery = $('ul.list-categories')
        dom.actionGallery = $('ul.list-categories li a')
        dom.actionButton = $('.btn-content-solid')
        dom.actionButtonPopup = $('.--more-information')
        dom.form = $('#mainForm')
        dom.actionMainButton = $('#mainButton')
    }

    suscribeEvents = function () {
        console.log('Test event')
        dom.actionGallery.on('click', events.onClickActionGallery)
        dom.actionButton.on('click', events.onClickActionButton)
        dom.actionButtonPopup.on('click', events.onClickActionButtonPopup)
        dom.actionMainButton.on('click', events.onClickActionMainButton)
    }

    events = {}
    events.onClickActionMainButton = function(e) {
        // validate signup form on keyup and submit
        dom.form.validate({
            rules: {
                name: {
                    required: true,
                    minlength: 3
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    minlength: 7
                },
                message: {
                    required: true,
                    minlength: 7
                },
            },
            messages: {
                name: {
                    required: "Ingrese su nombre",
                    minlength: "Ingrese su nombre completo"
                },
                email: "Ingrese un correo valido",
                phone: {
                    required: "Ingrese su telefono",
                    minlength: "Telefono incorrecto"
                },
                message: {
                    required: "Ingrese un mensaje",
                    minlength: "Por favor detalle el servicio"
                },
            }
        });

    }

    events.onClickActionGallery = function (e) {
        let id = $(this).data('id')
        dom.actionGallery.removeClass('active')
        $(this).addClass('active')

        $( '.load' ).fadeIn(function() {
            // debugger
            setTimeout(function(){
                $('.owl-carousel').hide().addClass('owl-hidden')
                setTimeout(function(){
                    $( '#gallery_'+id ).show()
                    setTimeout(function(){
                        $( '.load' ).fadeOut()
                    }, 10);
                }, 10);
            }, 10);

        });

        return false
    }

    events.onClickActionButton = function() {
        $('html, body').animate({
            scrollTop: $('body').offset().top
        }, 1000, function(){
            $('input[name]').focus()
        })
    }

    events.onClickActionButtonPopup = function() {
        $('html, body').animate({
            scrollTop: $('body').offset().top
        }, 1000, function(){
            $('input[name]').focus()
        })
    }

    fn = {}
    fn.carousel = function () {
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
            margin: 10,
            nav: true,
            loop: true,
            responsive: {
                0: {
                items: 1
                },
                600: {
                items: 1
                },
                1000: {
                items: 1
                }
            }
            })
        })
    }


    init = function () {
        $(document).ready(function() {
            catchDom()
            suscribeEvents()
            fn.carousel()
        })

    }

    return init()
}

landing()