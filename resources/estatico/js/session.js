
function validar() {


    $.ajax({
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        type: 'POST',
        url: sysapp+ "/Home/validar",
        data: '',
        success: function (response) {

            if (response.success) {

                //listacolaboradores();


            } else {
                alert(response.ex);
                window.location = sysapp+"/home";
            }
        }
    });

}
