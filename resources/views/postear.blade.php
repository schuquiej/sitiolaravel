<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registro</title>

    <link href="../resources/estatico/css/barra.css" rel="stylesheet" />
    <script src="../resources/estatico/js/busqueda.js"></script>
</head>

<body>
@include('Shared.navigation')

    <div class="container main">
        <div class="row">
            <div class="col-12 text-center ">
                <h2 id="stitutlo">CREAR NUEVA PUBLICACIÓN.</h2>
            </div>
        </div>
        <br />


        <div class="row">
            <div class="col-12 ">
                <div class="input-group mb-3">

                    <div class="col-lg-4">
                        <label>NOMBRE POST.</label>
                        <input class="form-control" id="pd1" placeholder="..." >
                    </div>
                    <div class="col-lg-4">
                        <label>DESCRIPCION.</label>
                        <input class="form-control" id="pd2" placeholder="...">
                    </div>

                    <div class="col-lg-4">
                        <label>LINK.</label>
                        <input class="form-control" id="pd3" placeholder="...">
                    </div>

                   


                </div>
            </div>
        </div>
        <button type="button" class="btn btn-link" onclick="act_inf()"><img src="../resources/estatico/imagenes/iconpack/add.png" class="img-fluid" style="max-width:50px; " /></button>
        <label id="saber"></label>
    </div>


</body>
</html>


<script>
    var loadFile = function (event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function () {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>


<script>

    window.addEventListener("load", function (event) {
      
    });

</script>


<script>

    function act_inf() {



        $.ajaxSetup({
            
            headers: {
        "Content-Type":"application/json",
        "Authorization":"bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNjUyNDA1Njg3LCJleHAiOjE2NTI0MDkyODcsIm5iZiI6MTY1MjQwNTY4NywianRpIjoicjZVYVBYb1RHcENHRE5VbCIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.rrF7UXIxcRlJaaNaRHH7sNRWcsDMBP3jqi2fGDe_kqk",

    
    }
        });
      
        var model = new FormData();
    
        model.append("d1", document.getElementById("pd1").value);
        model.append("d2", document.getElementById("pd2").value);
        model.append("d3", document.getElementById("pd3").value);
     
        $.ajax({
            contentType: 'application/json; charset=utf-8',
            dataType: 'json',
            type: 'POST',
            url: sysapp + 'http://127.0.0.1:8000/api/articulos',
            data: { d1 : 'bar', d2 : 'foo' },
            contentType: false,
            processData: false,
            async: true,
            success: function (response) {
            if (success=1) {
                    alert("listo");

                } else {
                    alert(response); // alert error message
                }
            },error: function(xhr, status, error) 
            {
                  
                    alert("error al guardar");
            }
        });

    }



    function act_inf2() {

      
var model = new FormData();

model.append("d1", document.getElementById("pd1").value);
model.append("d2", document.getElementById("pd2").value);
model.append("d3", document.getElementById("pd3").value);

$.ajax({
   
        type:'POST',
        url: sysapp + 'http://127.0.0.1:8000/api/articulos',
               headers: {
"Content-Type":"application/json",
"Authorization":"bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNjUyMzk3MjU5LCJleHAiOjE2NTI0MDA4NTksIm5iZiI6MTY1MjM5NzI1OSwianRpIjoicDE4QWo5Uk9aTkJFNkVRZyIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.s6wPsOrXh49dJTtHCjOqT7i4MAlijBt44ctwRBQiSoU",


},
success:function(data){
           
    CONSOLE.LOG("DATA");
         }


});

}




</script>