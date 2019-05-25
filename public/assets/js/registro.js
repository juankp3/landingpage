/**
 * Created by janaq on 02/06/16.
 */
$(document).ready(function () {
    modal.init();
    
    $("#registro_participantes").validate({
        rules: {
            name: {
                required: true,
                regex: /^[A-Za-z\ áéíóúÁÉÍÓÚ]{8,100}$/
            },
            dni: {
                required: true,
                regex: /^\d{8}$/
            },
            email: {
                required: true,
                regex: /^[a-zA-Z0-9+]+(?:([\.\_\-][a-zA-Z0-9+]+))*@(?:([a-zA-Z0-9]+(\-[a-zA-Z0-9]+)*)\.)+[a-zA-Z]+$/
            },
            cell: {
                required: true,
                regex: /^[2-9][0-9]{8}$/
            },
            check: {
                required: true
            }
        },
        messages: {
            name: {
                required: "Este campos es obligatorio.",
                regex: "El nombre debe contener solo caracteres alfanumericos y debe tener minimo 8 caracteres"
            },
            dni: {
                required: "Este campos es obligatorio.",
                regex: "El dni es incorrecto"
            },
            email: {
                required: "Este campos es obligatorio.",
                regex: "Correo no válido"
            },
            cell: {
                required: "Este campos es obligatorio.",
                regex: "Telefono no válido"
            },
            check: {
                required: "Este campos es obligatorio.",
            }
        },
        errorPlacement: function (e, i) {
            e.insertAfter($(i).closest("label").append(e))
        }
    });

    $.validator.addMethod(
        "regex",
        function (value, element, regexp) {
            var re = new RegExp(regexp);
            return this.optional(element) || re.test(value);
        },
        "Please check your input."
    );


$("#registro_participantes").submit(function (event) {
   
    event.preventDefault();
    if ($(this).valid()) {
        var form = $(this);
        var formAttr = form.serializeArray();
        $.ajax({
            data: formAttr,
            url: "/registro",
            type: 'POST',
            dataType: "json",
            success: function (data, textStatus, jqXHR) {

                if (data.response) {
                    $("#user").find("h1").html(data.error.dni)
                    modal._openModal('#user');
                    console.log(data.data)
                } else {
                    $("#user").find("h1").html(data.data.nombre)
                    modal._openModal('#user');
                    form[0].reset();
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            }
        });
    }
});

});