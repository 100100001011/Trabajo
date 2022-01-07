<html>

<head>

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

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .divbotones {

            margin: 1rem;
            padding: 1rem;

            /* IMPORTANTE */
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="card-header">
            <div class="form-group col-md-12 ">
                <h3 align="center" >Reporte Empleado</h3>

            </div>
        </div>
        <div class="card-body">
            <div class="form-group col-md-12 ">
                <!--class="table-bordered"-->
                <table id="Reporte" class="table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Cedula</th>
                            <th class="text-center">Provincia</th>
                            <th class="text-center">Fecha Nacimiento</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Observaciones</th>
                            <th class="text-center">Fecha Ingreso</th>
                            <th class="text-center">Cargo</th>
                            <th class="text-center">Departamento</th>
                            <th class="text-center">Provincia</th>
                            <th class="text-center">Suledo</th>
                            <th class="text-center">Jornada</th>
                            <th class="text-center">Observaciones</th>

                        </tr>
                    </thead>
                    <tbody id="datos_tablas">

                    </tbody>
                </table>
            </div>
            <div class="divbotones">


                <button id="btSalir" type="submit" class="btn btn-danger">Salir</button>
            </div>
        </div>


        <script>
            $('#btSalir').click(function(e) {
                $(location).attr('href', '../index.php');
            });

            
            (function Ordenar($) {
                $.fn.extend({
                    makeSortable: function() {
                        var Mitabla = this;
                        var getCellValue = function(fila, index) {
                            return $(fila).children('td').eq(index).text();
                        };
                        Mitabla.find('th').click(function() {
                            var tabla = $(this).parents('table').eq(0);
                            var fila = tabla.find('tr:gt(0)').toArray().sort(function(a, b) {
                                var index = $(this).index();
                                var valA = getCellValue(a, index),
                                    valB = getCellValue(b, index);
                                return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.localeCompare(valB);
                            });
                            this.asc = !this.asc;
                            if (!this.asc) {
                                fila = fila.reverse();
                            }
                            for (var i = 0; i < fila.length; i++) {
                                tabla.append(fila[i]);
                            }
                        });
                    }
                });
            })(jQuery);


            $(function() {
                $("#Reporte").makeSortable();
            });

            window.onload = function() {
                Buscar();

            }


            function Buscar() {
                $.getJSON("../Controller/Reporte.php?accion=leer", function(respuesta) {
                    console.log(respuesta);
                    var array = [];
                    //bucle para recorrer los datos index-valor
                    $.each(respuesta, function(llave, valor) {

                        if (llave >= 0) {

                            tabla = "<tr>";
                            tabla += "<td>" + valor.Nom + " " + valor.Ape + "</td>";
                            tabla += "<td>" + valor.Ced + "</td>";
                            tabla += "<td>" + valor.Prov1 + "</td>";
                            tabla += "<td>" + valor.FechNa + "</td>";
                            tabla += "<td>" + valor.Email + "</td>";
                            tabla += "<td>" + valor.Observ1 + "</td>";
                            tabla += "<td>" + valor.FechIng + "</td>";
                            tabla += "<td>" + valor.Cargo + "</td>";
                            tabla += "<td>" + valor.Depart + "</td>";
                            tabla += "<td>" + valor.Prov2 + "</td>";
                            tabla += "<td>" + valor.Sueldo + "</td>";
                            tabla += "<td>" + valor.Jornada + "</td>";
                            tabla += "<td>" + valor.Observ2 + "</td>";
                            tabla += "</tr>";
                            //console.log(valor.Nombre);
                            array.push(tabla);
                        }
                    });
                    //inserta los datos en la tabla
                    $("#datos_tablas").append(array.join(""));


                });

                $("#datos_tablas").empty();
            }
        </script>
</body>

</html>