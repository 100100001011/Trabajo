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
        window.onload = function() {
            consultar();
        }

        $("#datos_tablas").empty();

        function consultar() {
            //Recoge los datos del json
            $.getJSON("./Controller/empleados.php", function(datos) {
                
                var array = [];
                //bucle para recorrer los datos index-valor
                $.each(datos, function(llave, valor) {
                    
                    if (llave >= 0) {
                        var tabla = "<tr>";
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

            });
        }
    </script>

</body>

</html>