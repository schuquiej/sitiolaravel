
function menu05() {

    $("#xmenu").empty();
    var d = '';
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
        url: sysapp + '/administracion/listadoper',
        data: things,
        success: function (response) {

            var enc = "";
            var op = "";
            var ops = "";
            var conta = 0;
            var sub = "";
            var sub2 = "";
            var data = jQuery.parseJSON(response);

            $.each(data, function (i, item) {

                sub = "";
                $.each(data, function (ii, itemm) {
                    
                    if (item.d4 == itemm.d10) {

                        if (ops != itemm.d3) {
                            sub2 = "";
                            $.each(data, function (ii2, itemm2) {
                                if (itemm.d3== itemm2.d0) {
                                    sub2 +=
                                        '<li>' +
                                        '<a class="dropdown-item" href="' + sysapp + itemm2.d8 + '">' + itemm2.d7 + '</a>' +
                                        '</li>';
                                }
                            });

                            sub += '<li class="divider"></li>' +
                                '<li class="dropdown-submenu">' +

                                '<a class="nav-link dropdown-toggle" href="#">' + itemm.d5 + '</a>' +
                                '<ul class="dropdown-menu">' +
                                sub2+
                                '</ul>' +
                                '</li>';
                            
                        }
                        
                        ops = itemm.d3;
                    }
                });


                if (op != item.d10) {

                    d +=
                        '<li class="nav-item dropdown">' +
                        '<div class="dropdown">' +
                        '<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="/page.html">' +
                    item.d11 + '<span class="caret"></span>' +
                    '</a>' +
                        '<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">' +
                    sub+
                        '</ul>'+
                        '</div>' +
                        '</li>';
                    sub = "";
                    
                }

                op = item.d10;

            });
            $("#xmenu").append(d);

            

        }

    });

}
