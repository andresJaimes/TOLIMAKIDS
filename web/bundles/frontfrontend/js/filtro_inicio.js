$(document).ready(function() {
    
    LoadMap();
    cargarCategorias();
    //cargarDepartamentos();
    cargarCategoriasServicios();
    
    $('#select_departamentos').change(function() {
        cargarMunicipios($(this).val());
    });
    
    $('#select_servicio_categorias').change(function() {
        cargarSubcategoriasServicio($(this).val());
    });
    
    
    $('#select_consulta').change(function() {
        gestionarSelectBySeccion($(this).val());
    });
    
    $('#button_clean').click(function(){
        limpiarFiltroBusqueda();
    });

    $('#button_buscar').click(function(){
        $('#div_button_back').show();
        $('#div_resultado_actividad').html('');
        
        switch($("#select_consulta").val())
        {
            case 'activity':
                cargar_places = false;
                cargar_activity = true;
                to_iframe = false;
                cargarItems();
                break;
                
            default:
                cargar_lugares = true;
                cargar_servicios = true;
                to_iframe = false;
                cargarItems();
        }
    });
    $("#filter").keypress(function(e) {
        if(e.keyCode == 13){
            $('#div_resultado_activity').html('');
            $('#div_button_back').show();
            switch($("#select_consulta").val())
            {

                case 'activity':
                    cargar_pĺaces = false;
                    cargar_activity = true;
                    to_iframe = false;
                    cargarItems();
                    break;
                default:
                    cargar_places = true;
                    cargar_activity= true;
                    to_iframe = false;
                    cargarItems();
            }
        }
    });
    
});

function gestionarSelectBySeccion(seccion){
    
    switch(seccion)
    {
        case 'servicio':
            $('#fields_categorias_lugar').hide();
            $('#fields_servicios').show();
            break;
        case 'lugar':
            $('#fields_categorias_lugar').show();
            $('#fields_servicios').hide();
            break;
        default:
            $('#fields_categorias_lugar').hide();
            $('#fields_servicios').hide();
    }
}
