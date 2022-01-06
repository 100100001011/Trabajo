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
</head>

<body>
    <div>
        <div class="form-group col-md-12">

        <h2 align="center" class="bg-primary text-white">Reporte Empleado</h2>
            

        </div>
     
        <div class="form-group col-md-12 ">
            <table class="table table-hover" id="Reporte">
                <thead>
                    <tr>
                        <th class="bg-info text-white">Nombre</th>
                        <th class="bg-info text-white">Cedula</th>
                        <th class="bg-info text-white">Provincia</th>
                        <th class="bg-info text-white">Fecha Nacimiento</th>
                        <th class="bg-info text-white">Email</th>
                        <th class="bg-info text-white">Observaciones</th>
                        <th class="bg-info text-white">Fecha Ingreso</th>
                        <th class="bg-info text-white">Cargo</th>
                        <th class="bg-info text-white">Departamento</th>
                        <th class="bg-info text-white">Provincia</th>
                        <th class="bg-info text-white">Suledo</th>
                        <th class="bg-info text-white">Jornada</th>
                        <th class="bg-info text-white">Observaciones</th>
                        
                    </tr>
                </thead>
                <tbody id="datos_tablas">

                </tbody>
            </table>
        </div>
        


        <script>
            (function($) {
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
                $.getJSON("../Controller/Leer.php?accion=leer",function(respuesta){
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