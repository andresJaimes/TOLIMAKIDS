

function obtenerPlaces() {
    
    url_places = 'http://' + webservice_domain + '/api/places/?';
    url_places += municipality !== null ? '&municipality_id=' + encodeURIComponent(municipality) : '';

    jQuery.ajax({
        async: true,
        url: url_places,
        dataType: 'json',
        beforeSend: function() {
            mostrarCargando();
        },
        success: function(json_content) {
console.log(json_content);
            if (json_content.places.length > 0) {
                listaLugaresYActividades(json_content.places, new Array());
            }
            cantidad_places = json_content.cantidad;
            callMore(false);
        },
        complete: function() {
            quitarCargando();
            $('.filter fieldset').hide('fast').delay(100);
            $('.resume').css('top', '0');
            $('.searchicon').show('fast');
            $('.resume').animate({
                top: 0
            }, 300);
            $('.resume').show('fast');
        },
        error: function(i, e) {
            console.log('error' + e);
        }
    });
}


function obtenerPlaces() {
    var places_respuesta;
    jQuery.ajax({
        async: false,
        url: 'http://' + webservice_domain + '/api/places/',
        dataType: 'json',
        beforeSend: function() {
            mostrarCargando();
        },
        complete: function() {
            quitarCargando();
        },
        success: function(json_content) {
            addMarkerPlaces(json_content);
        },
        error: function(i, e) {
            console.log('error' + e);
        }
    });
    return places_respuesta;
}


function obtenerPlacesConsulta() {
    var places_respuesta;
    jQuery.ajax({
        async: false,
        url: 'http://' + webservice_domain + '/api/places/',
        dataType: 'json',
        beforeSend: function() {
            mostrarCargando();
        },
        complete: function() {
            quitarCargando();
        },
        success: function(json_content) {
            places_respuesta = json_content.places;
        },
        error: function(i, e) {
            console.log('error' + e);
        }
    });
    return places_respuesta;
}

function obtenerActivity() {
    url_activity = 'http://' + webservice_domain + '/api/activity/?';
    url_activity += places != null ? '&places_id=' + encodeURIComponent(places) : '';

    jQuery.ajax({
        async: true,
        url: url_activity,
        dataType: 'json',
        beforeSend: function() {
            mostrarCargando();
        },
        success: function(json_content) {

            if (json_content.activity.length > 0) {
                listaLugaresYActividades(new Array(), json_content.activity);
            }
            callMore(false);
        },
        complete: function() {
            quitarCargando();
            $('.filter fieldset').hide('fast').delay(100);
            $('.resume').css('top', '0');
            $('.searchicon').show('fast');
            $('.resume').animate({
                top: 0
            }, 300);
            $('.resume').show('fast');
        },
        error: function(i, e) {
            console.log('error' + e);
        }
    });
}





function sinResultados(){
    setTimeout(function () {
        if(en_consulta == 0 && numero_resultados == 0)
            $('#msg_sin_resultados').show();
        else
            $('#msg_sin_resultados').hide();
    }, 2000);
}

function obtenerPlacesConsulta() {
    var places_respuesta;
    jQuery.ajax({
        async: false,
        url: url_places,
        dataType: 'json',
        beforeSend: function() {
            mostrarCargando();
        },
        complete: function() {
            quitarCargando();
        },
        success: function(json_content) {
            places_respuesta = json_content;
        },
        error: function(i, e) {
            console.log('error' + e);
        }
    });
    return places_respuesta;
}


function obtenerActivityConsulta() {
    var activity_respuesta;
    jQuery.ajax({
        async: false,
        url: url_activity,
        dataType: 'json',
        beforeSend: function() {
            mostrarCargando();
        },
        success: function(json_content) {
            activity_respuesta = json_content.servicios;
        },
        complete: function() {
            quitarCargando();
        },
        error: function(i, e) {
            console.log('error' + e);
        }
    });
    return activity_respuesta;
}



function obtenerActivity() {
     var activity_respuesta;
    jQuery.ajax({
        async: false,
        url: 'http://' + webservice_domain + '/api/activity/',
        dataType: 'json',
        beforeSend: function() {
            mostrarCargando();
        },
        complete: function() {
            quitarCargando();
        },
        success: function(json_content) {
            activity_respuesta = json_content;
        },
        error: function(i, e) {
            console.log('error' + e);
        }
    });
    return activity_respuesta;
}


function obtenerGaleriaActivity(activity_id) {

    var url = 'http://' + webservice_domain + '/api/galery'
    url += activity_id != null ? '?activity_id=' + activity_id : '';
    var fotos_activity;
    jQuery.ajax({
        async: false,
        url: url,
        dataType: 'json',
        success: function(json_content) {
            fotos_activity = json_content.galery_activity;
        },
        error: function(i, e) {
            console.log('error' + e);
        }
    });

    return fotos_activity;
}
