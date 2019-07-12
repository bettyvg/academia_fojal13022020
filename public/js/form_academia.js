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

    /*Evaluación Capacitador cuente cuantas variables tienen Malo y Regular Logistica*/
    $(".MonitoreoLogistica").change(function () {
        var lugar = $("#lugar").val();
        var equipo = $("#equipo").val();

        var Monitoreolista = [lugar, equipo];

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
            $("#monitoreolog1").val('Monitorear');
        }
        else
        {
            $("#monitoreolog1").val('Adecuado');
        }

        if (malo > 1 || regular > 1) {
            $("#monitoreolog2").val('Monitorear');
        }
        else
        {
            $("#monitoreolog2").val('Adecuado');
        }

    });

        /*Evaluación Capacitador cuente cuantas variables tienen Malo y Regular*/
        $(".MonitoreoContenido").change(function () {
            var objetivoscurso = $("#objetivoscurso").val();
            var contenidocurso = $("#contenidocurso").val();
            var contenidocuaderno = $("#contenidocuaderno").val();
            var apoyo = $("#apoyo").val();



            var Monitoreolista = [objetivoscurso,contenidocurso,contenidocuaderno,apoyo];

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
                $("#monitoreocontenido1").val('Monitorear');
            }
            else
            {
                $("#monitoreocontenido1").val('Adecuado');
            }

            if (malo > 2 || regular > 2) {
                $("#monitoreocontenido2").val('Monitorear');
            }
            else
            {
                $("#monitoreocontenido2").val('Adecuado');
            }


    });

    /*Evaluación Capacitador cuente cuantas variables tienen Malo y Regular Organizacion*/
    $(".MonitoreoOrganizacion").change(function () {
        var registroorg = $("#registroorg").val();
        var atencionorg = $("#atencionorg").val();
        var registrocursos = $("#registrocursos").val();


        var Monitoreolista = [registroorg,atencionorg,registrocursos];

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
            $("#monitoreoorg1").val('Monitorear');
        }
        else
        {
            $("#monitoreoorg1").val('Adecuado');
        }

        if (malo > 2 || regular > 2) {
            $("#monitoreoorg2").val('Monitorear');
        }
        else
        {
            $("#monitoreoorg2").val('Adecuado');
        }


    });



});