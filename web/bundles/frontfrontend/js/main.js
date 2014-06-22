var webservice_domain = window.location.hostname;
var cm = 0;

//Variables de búsqueda
//Lugar
var limite = 40;
var limite_destinos = 8;
var pagina_places = 1;
var pagina_activity= 1;
var municipio;
var activity;
var palabra_clave = '';

//Servicio


var cargar_places = false;
var cargar_activity = false;
var to_iframe = false;

var url_activity = '';
var url_places = '';

var cantidad_activity = 0;
var cantidad_places = 0;
var en_consulta = 0;
var numero_resultados = 0;

var array_places = new Array();
var array_activity = new Array();

//Opciones de spin (circulo de carga)
var opts = {
    lines: 20, // The number of lines to draw
    length: 30, // The length of each line
    width: 4, // The line thickness
    radius: 30, // The radius of the inner circle
    corners: 1, // Corner roundness (0..1)
    rotate: 0, // The rotation offset
    direction: 1, // 1: clockwise, -1: counterclockwise
    color: '#FFF', // #rgb or #rrggbb
    speed: 2, // Rounds per second
    trail: 60, // Afterglow percentage
    shadow: false, // Whether to render a shadow
    hwaccel: false, // Whether to use hardware acceleration
    className: 'spinner', // The CSS class to assign to the spinner
    zIndex: 2e9, // The z-index (defaults to 2000000000)
    top: 'auto', // Top position relative to parent in px
    left: 'auto' // Left position relative to parent in px
};

function mostrarCargando(){
    if($('.preview').length){
        cm++;
        $('.content_preview').show();
        $('.preview').spin(opts);
    }
    
}


function quitarCargando(){
    if( $('.preview').length ){
        cm--;
        if(0 == cm){
            $('.preview').spin(false);
            $('.content_preview').hide();
        }
    }
}