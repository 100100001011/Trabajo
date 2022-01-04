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
        <div class="form-group col-md-6">
        <button id="btPrueba" type="button" class="btn btn-primary">Sign in</button>
            <label>Buscar</label>
            <input type="text" class="form-control" id="inp_buscar" placeholder="Buscar">
        </div>
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
        $('#btPrueba').click(function(e) {
            buscar();
        });

        function buscar() {
            var datos = new FormData();
            datos.append('b_nombre', $('#inp_buscar').val());
            
            $.ajax({
                type: "post",
                url: "../Controller/empleados.php?accion=buscar",
                data: datos,
                processData: false,
                contentType: false,
                dataType : "json",
                success: function(respuesta) {
                    console.log(respuesta);

                }
            });

        }
    </script>

</body>

</html>