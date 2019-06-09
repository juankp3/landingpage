function landing() {
    var dom, catchDom, suscribeEvents, events, fn, init,

    dom = {}
    catchDom = function () {
        dom.cboReminder = $('.js-id_reminder')
    }

    suscribeEvents = function () {
        // dom.btnPaymentConfirmation.on('click', events.onClickbtnPaymentConfirmation)
    }

    events = {}
    events.onClickbtnPaymentConfirmation = function (e) {
        return fn.checkReminder(e);
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
        catchDom()
        suscribeEvents()
        fn.carousel()

    }

    return init()
}

landing()