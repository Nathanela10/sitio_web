$(document).ready(function()
{
    $("#formulariocontacto").validate({
        rules:
        {
            nombre_contacto: 	{ required: true},
            apellido_contacto: 	{ required: true},
            asunto_contacto: 	{ required: true},
            correo_contacto: 	{ required: true, email: true},
            mensaje_contacto:	{ required: true}
        },
        messages:
        {
            nombre_contacto: "por favor ingrese su nombre",
            apellido_contacto: "por favor ingrese su apellido",
            asunto_contacto: "por favor ingrese un asunto",
            correo_contacto: {  required: "por favor ingrese un correo donde podamos contactarlo", email: "por favor ingrese una cuenta de correo válida"},
            mensaje_contacto: "por favor ingrese un mensaje"
        },
        invalidHandler: function(event, validator)
        {
            var errors = validator.numberOfInvalids();
            if (errors)
            {
                alert ("por favor ingrese los campos faltantes");
            }
        },
        submitHandler: function(form)
        {
            var nombre = $("#nombre_contacto").val();
            var apellido = $("#apellido_contacto").val();
            var correo = $("#correo_contacto").val();
            var asunto = $("#asunto_contacto").val();
            var mensaje = $("#mensaje_contacto").val();

            $.ajax({
                url: "/sitio_web/index.php/contacto_controller/enviar_mensaje",
                dataType: "json",
                type: "POST",
                data: {
                    "nombre": nombre,
                    "apellido": apellido,
                    "correo": correo,
                    "asunto": asunto,
                    "mensaje": mensaje
                },
                success: function(response)
                {
                    if(response.error)
                    {
                        $("#div_mensaje_envio").removeClass();
                        $("#div_mensaje_envio").addClass("alert alert-danger");
                        $("#div_mensaje_envio").html(response.mensaje);
                        $("#div_mensaje_envio").show();
                        alert("envio");
                    }
                    else
                    {
                        $("#div_mensaje_envio").removeClass();
                        $("#div_mensaje_envio").addClass("alert alert-success");
                        $("#div_mensaje_envio").html(response.mensaje);
                        $("#div_mensaje_envio").show();
                    }
                }

            });
        }
    });

    $('.modal').on('hidden.bs.modal', function()
    {
        $(this).find('form')[0].reset();
        $("#div_mensaje_envio").removeClass();
        $("#div_mensaje_envio").css('display','none');
    });
});