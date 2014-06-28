
function cargarMunicipality() {
    obtenerMunicipality();
}




function cargarActivity(places_id){
    obtenerActivityPorPlaces(places_id);
}




function cargarItems() {

    //Captura de datos

    activity = $('#select_activity').val();
    places = $('#select_places').val();
    palabra_clave = $('#palabra_clave').val();
    
    clearMap();
    limpiarResultados();

    if (cargar_activity) {
        en_consulta = en_consulta + 1;
        obtenerActivity();
    }
}


function limpiarResultados() {
    //Limpieza de valores

    deleteOverlays();
    $('#div_resultado_activity').html('');
    array_places = [];
    array_activity = [];
    cantidad_activity = 0;
    cantidad_places = 0;
    numero_resultados = 0;
    en_consulta = 0;
    $('#msg_sin_resultados').hide();
}


function cargarPlaces() {

    var places_json = obtenerPlaces();
//    var array = new Array();
//    array[0] = places_json;
//    mapDetalle(places_json.latitude, places_json.length);
        mostrarDetallePlaces(places_json);
//    addMarkerPlaces(places_json);
}


function cargarFotosLugares(lugar_id) {
    var fotos_lugar_json = obtenerFotosLugares(lugar_id);
    listaFotosLugares(fotos_lugar_json);
}

function cargarActivity() {

    var activity_json = obtenerActivity();
//    var array = new Array();
//    array[0] = activity_json;
 //   addMarkerActivity(activity_json);
    mostrarDetalleActivity(activity_json);
}


function cargarGaleria(activity_id) {
    var galeria_json =obtenerGaleriaActivity(activity_id);
    listaGaleriaActividades(galeria_json);
}

function cargarMasItems() {


    if (cargar_places == true && cargar_activity == true) {
            obtenerPlaces();    
            obtenerActivity();
        

    } else if (cargar_places == true) {
        obtenerPlaces();

    } else if (cargar_activity == true) {
        obtenerActivity();
    }
}

function limpiarFiltroBusqueda() {
    $("#select_municipality").find('option').remove().end();
    $('#select_places').find('option').remove().end();
    $('#fields_activity').hide();
}



function cargarDetalleLugar(places_id) {
    
    mostrarCargando();
    $.each(array_places, function(index, places) {
        if (places.id == array_places) {
            mostrarDetallePlaces(places);
            return false;
        }
    });
    quitarCargando();
}

function cargarDetalleActivity(activity) {
    mostrarDetalleActivity(obtenerActivity(activity));
}