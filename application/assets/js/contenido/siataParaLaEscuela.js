let urlBaseRecursos = "/sitio_web/application/assets/img/contenido/estrategiasEducacion/siataParaLaEscuela/";


let imagesExperimento = {"queSignificaVivirEnUnValle": [
    {
        src  : urlBaseRecursos + "queSignificaVivirEnUnValle.jpg",
        opts : { thumb : urlBaseRecursos + "queSignificaVivirEnUnValle.jpg" }
    }
],

"comoSeProducenLasDescargas": [
    {
        src  : urlBaseRecursos + "comoSeProducenLasDescargas.jpg",
        opts : { thumb : urlBaseRecursos + "comoSeProducenLasDescargas.jpg" }
    }
],

"porQueSeProducenLosMovimientos": [
    {
        src  : urlBaseRecursos + "porQueSeProducenLosMovimientos.jpg",
        opts : { thumb : urlBaseRecursos + "porQueSeProducenLosMovimientos.jpg" }
    }
],

"porQueEsImportanteMonitorear": [
    {
        src  : urlBaseRecursos + "porQueEsImportanteMonitorear.jpg",
        opts : { thumb : urlBaseRecursos + "porQueEsImportanteMonitorear.jpg" }
    }
],

"tenemosEstacionesClimaticas": [
    {
        src  : urlBaseRecursos + "tenemosEstacionesClimaticas.jpg",
        opts : { thumb : urlBaseRecursos + "tenemosEstacionesClimaticas.jpg" }
    }
],

"porQueTenemosTemporadas": [
    {
        src  : urlBaseRecursos + "porQueTenemosTemporadas.jpg",
        opts : { thumb : urlBaseRecursos + "porQueTenemosTemporadas.jpg" }
    }
],

"enTemporadaSecaTambienLlueve": [
    {
        src  : urlBaseRecursos + "enTemporadaSecaTambienLlueve.jpg",
        opts : { thumb : urlBaseRecursos + "enTemporadaSecaTambienLlueve.jpg" }
    }
],

"fenomenoDeElNiño": [
    {
        src  : urlBaseRecursos + "fenomenoDeElNiño.png",
        opts : { thumb : urlBaseRecursos + "fenomenoDeElNiño.png" }
    }
],

"fenomenoDeLaNiña": [
    {
        src  : urlBaseRecursos + "fenomenoDeLaNiña.png",
        opts : { thumb : urlBaseRecursos + "fenomenoDeLaNiña.png" }
    }
]
}

$(".open_fancybox").click(function() {
    console.log($(this).attr("id"));
    let idExperimento = $(this).attr("id");
    $.fancybox.open(imagesExperimento[idExperimento], {
        loop : true,
    });
    return false;
});



