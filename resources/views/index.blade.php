
<!DOCTYPE html>
<html lang="en">
<head>
     <title>Sysapp</title>
     <link href="../resources/estatico/css/login.css" rel="stylesheet" />
  
   
     @include('Shared.header')


</head>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">


    <div class="card card0 border-0">
        <div class="row d-flex">

            <div class="col-lg-2 text-center">

            </div>

            <div class="col-lg-8 text-center">

                <div class="card2 card border-0 px-4 py-5">
                    <img src="../resources/estatico/imagenes/perfil.jpg" class="img-fluid" style="width:100px;" />

                    <div class="row px-3 mb-4">
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    <h6 class="mb-0 text-sm">Usuario</h6>
                    <div class="row px-3">
                        <input class="mb-4" type="text" name="usuario" id="usuario" placeholder="Ingrese su usuario">
                    </div>
                    <h6 class="mb-0 text-sm">Contraseña</h6>
                    <div class="row px-3">
                        <input type="password" id="pass" name="password" placeholder="Ingrese su Contraseña">
                    </div>

                    <div class="row mb-3 px-3"> <button class="btn btn-blue text-center" onclick="validar();">Ingresar</button> </div>

                </div>
            </div>

            <div class="col-lg-2 text-center">

            </div>


        </div>
    </div>

    <a href="https://www.facebook.com/oswaldo.chuquiej.5" class="fa fa-facebook"></a>
    <a href="https://gt.linkedin.com/in/sergio-chuquiej-a13234158" class="fa fa-linkedin"></a>
    <a href="https://www.instagram.com/sergio_chuquiej_/" class="fa fa-instagram"></a>
   
</div>


<script src="../resources/estatico/js/sysapp.js"></script>
<script>


    function validar() {


        var items = [

            {


                d1: document.getElementById("usuario").value,
                d2: document.getElementById("pass").value,
                d3: 'x',

            }
        ];



        things = JSON.stringify({ 'items': items });
        $.ajax({
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            type: 'POST',
            url: sysapp + '/Home/vistausuario',
            data: things,
            success: function (response) {


                if (response.success) {
                    window.location = sysapp + '/home/' + response.ex;


                } else {
                    // server returns false
                    //alert(response.ex); // alert error message
                    alert(response.ex); // alert error message
                }
            }
        });

    }</script>




<script>
</script>