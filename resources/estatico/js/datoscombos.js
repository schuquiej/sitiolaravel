

function area00() {

    $("#area").empty();
    var d = '<option value="0">Opción</option>';
    var operacionx = 1;
    var items = [
        {
            operacion: operacionx,
        }
    ];

    things = JSON.stringify({ 'items': items });
    $.ajax({
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        type: 'POST',
        url: sysapp + '/administracion/vistaarea',
        data: things,
        success: function (response) {
            var data = jQuery.parseJSON(response);
            $.each(data, function (i, item) {

                d += '<option value="' + item.d0 + '">' + item.d1 + '</option>';

            });
            $("#area").append(d);
        }

    });

}



function unidad00() {

    $("#unidad").empty();
    var d = '<option value="0">Opción</option>';
    var operacionx = 1;
    var items = [
        {
            operacion: operacionx,
        }
    ];

    things = JSON.stringify({ 'items': items });
    $.ajax({
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        type: 'POST',
        url: sysapp + '/administracion/vistaunidad',
        data: things,
        success: function (response) {
            var data = jQuery.parseJSON(response);
            $.each(data, function (i, item) {

                d += '<option value="' + item.d0 + '">' + item.d1 + '</option>';

            });
            $("#unidad").append(d);
        }

    });



}




function procesos(valor) {


    $("#fprocesos").empty();
    var d = '';
    var escala = "";
    var unidad = "";
    var operacionx = valor;
    var items = [
        {
            d1: operacionx,
        }
    ];

    things = JSON.stringify({ 'items': items });
    $.ajax({
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        type: 'POST',
        url: sysapp + '/gestiones/verprocesos',
        data: things,
        success: function (response) {
            var data = jQuery.parseJSON(response);
            $.each(data, function (i, item) {


                if (item.d3 == 0) {

                    escala = "Hora";
                }
                else {
                    escala = "Dia";
                }


                if (item.d4 > 1) {

                    escala = escala + "s";
                }


                d += '<option value="' + item.d0 + '">' + item.d1 + ' -- ' + item.d4 + ' ' + escala + '</option>';

            });
            $("#fprocesos").append(d);
        }

    });

}




function infocolaborador(valor) {

    var datoss = "";

    var operacionx = valor;
    var items = [
        {
            d1: operacionx,
        }
    ];

    things = JSON.stringify({ 'items': items });
    $.ajax({
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        type: 'POST',
        async: false,
        url: sysapp + '/Colaboradores/editarcolaborador',
        data: things,
        success: function (response) {
            var data = jQuery.parseJSON(response);
            var info = "";
            $.each(data, function (i, item) {
                console.log(item.d3);
                info = item.d3;
                datoss = item.d3 + " " + item.d5;
            });


        }

    });

    return datoss;


}
