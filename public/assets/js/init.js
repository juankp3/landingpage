function landing() {
    var dom, catchDom, suscribeEvents, event, fn, init,

    dom = {}
    catchDom = function () {
        dom.gallery = $('ul.list-categories')
        dom.actionGallery = $('ul.list-categories li a')
    }

    suscribeEvents = function () {
        console.log('Test event')
        dom.actionGallery.on('click', events.onClickActionGallery)
    }

    events = {}
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