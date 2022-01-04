<!DOCTYPE html>
<html lang="en">

<head>
    <!-- JQREY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- BOOTSTARP -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

</head>

<body>
    <div class="container">
        <div class="form-group col-md-4">

            <label>Nombre</label>
            <input type="text" class="form-control" id="inp_buscarNombre" placeholder="Buscar">

        </div>
        <div class="form-group col-md-4">

            <label>Cedula</label>
            <input type="text" class="form-control" id="inp_buscarCedula" placeholder="Buscar">

        </div>
        <div class="form-group col-md-4">
            <br>
            <button id="btBuscar" type="button" class="btn btn-primary">Sign in</button>

        </div>
        <div class="form-group col-md-10">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cedula</th>
                    <th>Cargo</th>
                </tr>
            </thead>
            <tbody id="datos_tablas">

            </tbody>
        </table>
    </div>
    <script>

        $('#btBuscar').click(function(e) {
            buscar();
        });

        window.onload = function() {
            buscar();
        }

        $("#datos_tablas").empty();

        function buscar() {
            /*
            $(document).ready(function(){
                $('#inp_buscar').keyup(function(){
                    var buscar = $(this).val();
                    console.log(buscar); 
                })
            })
            */

            var datos = new FormData();
            datos.append('b_nombre', $('#inp_buscarNombre').val());
            datos.append('b_cedula', $('#inp_buscarCedula').val());
            

            $.ajax({
                type: "post",
                url: "./Controller/Select.php?accion=buscar",
                data: datos,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function(respuesta) {
                    console.log(respuesta);
                    var array = [];
                    //bucle para recorrer los datos index-valor
                    $.each(respuesta, function(llave, valor) {

                        if (llave >= 0) {
                            var tabla = "<tr onclick='Actualizar()'>";
                            tabla += "<td>" + valor.Nombre + " " + valor.Apellido + "</td>";
                            tabla += "<td>" + valor.Cedula + "</td>";
                            tabla += "<td>" + valor.Cargo + "</td>";
                            tabla += "</tr>";
                            console.log(valor.Nombre);
                            array.push(tabla);
                        }
                    });
                    //inserta los datos en la tabla
                    $("#datos_tablas").append(array.join(""));
                    console.log(datos);

                }
            });
            $("#datos_tablas").empty();
        }


        function Actualizar(){
            alert("hola");
        }
    </script>

</body>

</html>