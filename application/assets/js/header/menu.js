$( document ).ready(function() {

    var heightContenido = $("#contenidos").css('height');
    $("#menu").css({ 'height': heightContenido});



    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })

    var ultimo_icono_activo;

    $('.contenido ul').hide();


    $( '.contenido li').click(function (event)
    {

        event.stopPropagation();
        var menu_i = $(this).children('a').children('i');
        var menu_ul = $(this).children('ul');

        if (menu_ul.is( ":hidden" ) )
        {
            menu_ul.stop(true, true).slideDown()
            menu_i.toggleClass("fa-angle-double-down");
            menu_i.toggleClass("fa-angle-double-up");
            console.log(menu_i);
        }
        else
        {
            menu_ul.stop(true, true).slideUp()
            menu_i.toggleClass("fa-angle-double-down");
            menu_i.toggleClass("fa-angle-double-up");
        }
    });

    $(".panel_menu ul li").click(function()
    {
        if ($(this).children("ul.drop-down").is( ":hidden" ) )
        {
            $(".panel_menu ul li ul.drop-down").hide();
            if (ultimo_icono_activo)
            {
                src = $("img[id='" + ultimo_icono_activo + "']").prop("src");
                $("img[id='" + ultimo_icono_activo + "']").prop("src", src.replace("_seleccion.png", ".png"));
            }

            $('.contenido ul').hide();
            var flechas_menu = $('.panel_menu').find('i');
            flechas_menu.addClass("fa-angle-double-down");
            flechas_menu.removeClass("fa-angle-double-up");

            $(this).children("ul.drop-down").show();

            src = $(this).find("img").prop("src");
            $(this).find("img").prop("src", src.replace(".png", "_seleccion.png"));
            ultimo_icono_activo = $(this).find("img").attr("id");
        }
        else
        {
            $(this).children("ul.drop-down").hide();
            src = $(this).find("img").prop("src");
            if (src != undefined) $(this).find("img").prop("src", src.replace("_seleccion.png", ".png"));
        }
    });


    window.addEventListener("orientationchange", function() {

        window.setTimeout(function() {
            var heightContenido = $("#contenidos").css('height');
            $("#menu").css({ 'height': heightContenido});
        }, 200);

    });
});