$(document).ready(function () {
    "use strict";


    /* áreas fojal*/
    $("#area").change(function () {
        var id_area = $("#area").val();

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "./get_puesto/" + id_area,
            dataType : 'json',
            type: "POST",
            data: id_area,
            contentType: false,
            processData: false,
            error: function () {

            },
            success: function (data) {
                $("#puesto").empty();
                $("#puesto").append('<option value="">Seleccionar puesto..</option>');
                for (var i = 0; i < data.length; i++) {
                    $("#puesto").append('<option value="' + data[i].id_puesto + '">' + data[i].nom_puesto + '</option>');


                }
            }

        });
    });

    /*Cambios de clase*/
    $(".MonitoreoEvalucion").change(function () {
        var puntualidad = $("#puntualidad").val();
        var dominiotema = $("#dominiotema").val();
        var exposicion = $("#exposicion").val();
        var ejemplos = $("#ejemplos").val();
        var ejercicios = $("#ejercicios").val();
        var empatia = $("#empatiagrupo").val();
        var fluidez = $("#fluidez").val();
        var todos_temas = $("#todostemas").val();
        var cap_resolucion = $("#capresolver").val();

        var Monitoreolista = [puntualidad,dominiotema,exposicion,ejemplos,ejercicios,empatia,fluidez,todos_temas,cap_resolucion];

        for(var contar = 0; contar < Monitoreolista.length; contar++)
        {
            console.log(Monitoreolista[contar]);
        }


        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "./EvaluacionCapacitadores/",
            dataType : 'json',
            type: "POST",
            data:,
            success: function (data) {
                if()
                $('#monitoreoeva2').empty();
                $("#monitoreoeva2").append();

                }
            }

        });
        return false;
    });


});
