var webservice_domain = window.location.hostname;
var cm = 0;

//Variables de búsqueda
//Lugar
var limite_activity = 3;
var pagina_activity = 0;

var scrolled=0;

$(document).ready(function() {
    cargarMasActivity();
});


function cargarMasActivity(){
    pagina_activity = pagina_activity + 1
    obtenerActivity();
    scrolled=scrolled+100;
    $("#seccion_activity").scrollTop(scrolled);
}