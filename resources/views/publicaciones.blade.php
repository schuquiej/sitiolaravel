<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro</title>

    <link href="../resources/estatico/css/estpat.css" rel="stylesheet" />

    <link href="../resources/estatico/css/piedepagina.css" rel="stylesheet" />


</head>

<body>
    @include('Shared.navigation')

    <div class="container main">
        <div class="row">
            <div class="col-12 text-center ">
                <h2 id="stitutlo">VISTA DE PUBLICACIONES.</h2>
            </div>
        </div>
        <br />
        <div class="container">
            <br />
            <br />
            <div id="datos" class="row">

           </div>

        </div>


        <label id="saber"></label>
    </div>


</body>
</html>


<script>

    window.addEventListener("load", function (event) {
        inf_suc();
    });




    function inf_suc() {

$("#datos").empty();
var d = '';

var model = new FormData();
model.append("d1", "");


$.ajax({
    contentType: 'application/json; charset=utf-8',
    dataType: 'json',
    type: 'GET',
    headers: {
        "Content-Type":"application/json",
        "Authorization":"bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNjUyNDA1Njg3LCJleHAiOjE2NTI0MDkyODcsIm5iZiI6MTY1MjQwNTY4NywianRpIjoicjZVYVBYb1RHcENHRE5VbCIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.rrF7UXIxcRlJaaNaRHH7sNRWcsDMBP3jqi2fGDe_kqk"
    },
    url: sysapp + 'http://127.0.0.1:8000/api/articulos',
    data: model,
    contentType: false,
    processData: false,
    async: true,
    success: function (response) {
        console.log(response.d1);
       $.each(response.d1, function (i, item) {

        console.log(item.d1);
            
            d+=' <div class="col-lg-12 text-center ">'+
            '       <br />'+
            '    <h2 class="titulo">'+item.d2+'</h2>'+
            '       <div class="card">'+
            '           <div class="content">'+
            '               <h4>'+item.d3+'</h4>'+
            '               <br />'+
            '               <h4>'+item.d4+'</h4>'+
            '               <h6>'+item.d6+'</h6>'+
            '           </div>'+
            '       </div>'+
            '   </div>'+
            '       <br />';

     
        });

        $("#datos").append(d);

    }
});

}


</script>

