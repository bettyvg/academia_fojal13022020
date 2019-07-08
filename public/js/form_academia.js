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

    /* busqueda*/
    $("#fecha1").change(function () {
        var desde = $("#fecha1").val();
        var hasta = $("#fecha2").val();

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "./BuscarEvaCapacitadores/",
            dataType : 'json',
            type: "POST",
            data:'fecha1='+desde+'fecha2='+hasta,
            success: function (data) {
                $('#tbl_buscar').empty();
                /*$("#tbl_buscar").append('<option value="">Seleccionar puesto..</option>');
                for (var i = 0; i < data.length; i++) {
                    $("#puesto").append('<option value="' + data[i].id_puesto + '">' + data[i].nom_puesto + '</option>');
                }*/
            }

        });
        return false;
    });

    $("#fecha2").change(function () {
        var desde = $("#fecha1").val();
        var hasta = $("#fecha2").val();

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "./BuscarEvaCapacitadores/",
            dataType : 'json',
            type: "POST",
            data:'fecha1='+desde+'fecha2='+hasta,
            success: function (data) {
                $('#tbl_buscar').empty();
                /*$("#tbl_buscar").append('<option value="">Seleccionar puesto..</option>');
                for (var i = 0; i < data.length; i++) {
                    $("#puesto").append('<option value="' + data[i].id_puesto + '">' + data[i].nom_puesto + '</option>');
                }*/
            }

        });
        return false;
    });



});
