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
            dataType: 'json',
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

    /*Evaluación Capacitador cuente cuantas variables tienen Malo y Regular*/
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


        var Monitoreolista = [puntualidad, dominiotema, exposicion, ejemplos, ejercicios, empatia, fluidez, todos_temas, cap_resolucion];

        var malo = 0;
        var regular = 0;

        for (var contar = 0; contar < Monitoreolista.length; contar++) {
            if (Monitoreolista[contar] == 'Malo') {
                malo++;
            }

            if (Monitoreolista[contar] == 'Regular') {
                regular++;
            }
        }

        if (malo > 0 || regular > 0) {
            $("#monitoreoeva1").val('Monitoriar');
        }
        else
        {
            $("#monitoreoeva1").val('Adecuado');
        }

        if (malo > 2 || regular > 2) {
            $("#monitoreoeva2").val('Monitoriar');
        }
        else
        {
            $("#monitoreoeva2").val('Adecuado');
        }


    });

    /*Evaluación Capacitador cuente cuantas variables tienen Malo y Regular*/
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


        var Monitoreolista = [puntualidad, dominiotema, exposicion, ejemplos, ejercicios, empatia, fluidez, todos_temas, cap_resolucion];

        var malo = 0;
        var regular = 0;

        for (var contar = 0; contar < Monitoreolista.length; contar++) {
            if (Monitoreolista[contar] == 'Malo') {
                malo++;
            }

            if (Monitoreolista[contar] == 'Regular') {
                regular++;
            }
        }

        if (malo > 0 || regular > 0) {
            $("#monitoreoeva1").val('Monitorear');
        }
        else
        {
            $("#monitoreoeva1").val('Adecuado');
        }

        if (malo > 2 || regular > 2) {
            $("#monitoreoeva2").val('Monitorear');
        }
        else
        {
            $("#monitoreoeva2").val('Adecuado');
        }


    });



});