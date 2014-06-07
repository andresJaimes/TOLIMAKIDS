
function mostrarLugar(places) {
    $('#place_name').html(places.name);
    $('#place_description').html(decode(places.description));
}

function mostrarActivity(activity) {
    $('#activity_name').html(activity.name);
    $('#activity_description').html(decode(activity.description));
}

function listaLugaresYActividades(places, activity) {
    var html = '';
    $(places).each(function(i, places) {
        numero_resultados = numero_resultados + 1;
        addMarkerPlaces(places);
        var nombre = recortarTexto(places.name, 20);
        html += '<div class="item_resume">';
        html += "<a  href='javascript:;' title='" + places.name + "' onclick='mapDetalle(" + places.latitude + "," + places.length + ");mapPopUpLugar(" + places.id + ")'>";
        html += '</a>';
        html += "<a href='javascript:;' title='" + places.name + "' onclick='mapDetalle(" + places.latitude + "," + places.length + ");mapPopUpLugar(" + places.id + ")' class='title_resume_item'>" + name + "</a>";
        html += '<p class="description_resume">' + places.municipality_name + ' <br /> ';
        html += '</div>';
    });
    
    $(activity).each(function(i, activity) {
        numero_resultados = numero_resultados + 1;
        addMarkerActivity(activity);
        html += '<div class="item_resume">';
        html += '<a href="javascript:;" title="'+ activity.name +'mapPopUpActivity(' + activity.id + ')" class="title_resume_item">' + activity.name + '</a>';
        html += '<p class="description_resume">' + activity.places_name + '</p>';
        html += '</div>';
    });

    $('#div_resultado_lugares').append(html);
}


function mostrarPlaces(places) {
    $('#places_description').html(places.description);
    $('#places_address').html(places.address);
}

function mostrarDetallePlaces(places){
    
    var detallePlaces = 
        '<div class="informacion">'+
                '<div class="informacion_derecha">';
        
                    
            detallePlaces +=
                    '<div class="titulo_places">'+
                        '<h1>'+ places.name +'</h1>'+
                    '</div>';
            
    
                detallePlaces +=
                        '<div id="contenido_places">'+
                                '<div id="descripcion_places_content">'+
                                    '<ul>';
            
                    if(places.description != '')
                        detallePlaces +=
                                '<li class="label_places">Descripción: </li>'+
                                '<li class="descripcion_places">'+ places.description +'</li>';
                    if(places.address != '')
                        detallePlaces +=
                                '<li class="label_places">Dirección: </li>'+
                                '<li class="descripcion_places">'+ places.address +'</li>';
                       detallePlaces +=
                                '</ul>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>';
    $('#informacion').find('.informacion').html(detallePlaces);
}

function mostrarDetalleActivity(activity){
    
    var detalleActivity = 
        '<div class="informacion">'+
                '<div class="informacion_derecha">';
        
                    
            detalleActivity +=
                    '<div class="titulo_activity">'+
                        '<h1>'+ activity.name +'</h1>'+
                    '</div>';
            
    
                detalleActivity +=
                        '<div id="contenido_activity">'+
                                '<div id="descripcion_servicio_content">'+
                                    '<ul>';

                    if(activity.name != '')
                        detalleActivity +=
                                '<li class="label_activity">Nombre: </li>'+
                                '<li class="descripcion_activity">'+ activity.name +'</li>';
            
                    if(activity.description != '')
                        detalleActivity +=
                                '<li class="label_activity">Descripción: </li>'+
                                '<li class="descripcion_activity">'+ activity.description +'</li>';
                    if(activity.cost != '')
                        detalleActivity +=
                                '<li class="label_activity">Valor: </li>'+
                                '<li class="descripcion_activity">'+ activity.cost +'</li>';
                       detalleActivity +=
                                '</ul>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
            '</div>';
    $('#informacion').find('.informacion').html(detalleActivity);
    
    
function recortarTexto(texto) {
    texto = decode(texto);
    if (texto.length > 100) {
        texto = texto.substr(0, 100) + "...";
    }
    return texto;

}

function recortarTexto(texto, i) {
    texto = decode(texto);
    if (texto.length > i) {
        texto = texto.substr(0, i) + "...";
    }
    return texto;

}
    
 function listaGaleriaActividades(galery_activity) {
    var html = '';
    $(galery_activity).each(function(i, foto_galery) {
        if (foto_galery.activo == 1) {
            html += '<div class="single links">';
            if (foto_galery.es_binaria == '1') {
                html += '<a title="'+ foto_galery.nombre_archivo +'" href="data:image/jpeg;base64,' + foto_galery.nombre_archivo + '" rel="lightbox" class="place" title="">';
                html += '<img class="categorie_imagen"  src="data:image/jpeg;base64,' + foto_galery.nombre_archivo + '" alt="'+ foto_galery.nombre_archivo +'"/>';
                html += '</a>';
            }
            else {
                html += '<a href="' + foto_galery.url_imagen + '" rel="lightbox" class="place" title="">';
                html += '<img src="' + foto_galery.url_imagen + '" alt=""/>';
                html += '</a>';
            }
            html += '</div>';
        }
    });

    if (html == '') {
        $('#div_carrousel').html(html);
    } else {
        $('#div_galery_activity').html(html);
    }
}  
    
    
}