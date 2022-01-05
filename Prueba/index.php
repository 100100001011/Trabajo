<!DOCTYPE html>
<html lang="en">

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
    <title>Index</title>

</head>

<body>
    <!-- TABLA RESULTADOS =====> -->
    <section id="1">

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
                <button id="btBuscar" type="button" class="btn btn-primary">Buscar</button>

            </div>
            <div class="form-group col-md-10">
                <table class="table table-hover">
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
            <div class="form-group col-md-6">
            <button id="btInsertar" type="button" class="btn btn-primary">Crear</button>
            <button id="btReporte" type="button" class="btn btn-primary">Reporte</button>
            </div>
           
    </section>
    <!-- <====================== -->

    <!-- FORMULARIO EMPLEADO =====> -->

    <section id='2'>

        <div class="container">


            <div role="tabpanel">

                <div class="card-header">
                    Ingreso
                </div>

                <ul class="nav nav-tabs" role="tablist">
                    <li class="active">
                        <a href="#D_Personales" data-toggle="tab">Datos Personales</a>
                    </li>
                    <li>
                        <a href="#D_Laborables" data-toggle="tab">Datos Laborables</a>
                    </li>
                </ul>

                <div class="card-body">
                    <div class="tab-content">
                        <!--Etiqueta Datos Pesonales-->
                        <div role="tabpanel" class="tab-pane active" id="D_Personales">
                            <!--Formulario-->
                            <form action="" method="post">
                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label>Nombres</label>
                                        <input type="text" class="form-control" id="inp_nombres" placeholder="Nombres">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Apellidos</label>
                                        <input type="text" class="form-control" id="inp_apellidos" placeholder="Apellidos">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Cedula</label>
                                        <input type="text" class="form-control" id="inp_cedula" placeholder="Cedula">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Provincia</label>
                                        <select class="form-control" id="inp_provincia1">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Fecha de nacimientos</label>
                                        <input type="date" class="form-control" id="inp_fecha" placeholder="aaaa-mm-dd">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" id="inp_email" placeholder="Email">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Observaciones</label>
                                        <input type="text" class="form-control" id="inp_observacion1" placeholder="Comentario u obsercvacion">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Fotografia</label>
                                        <input type="file" name="img[]" class="file" accept="image/*" id="file_image">

                                        <div>
                                            <img src="" width="100" height="100" id="prevista" class="img-circle">
                                            <button type="button" class="browse btn btn-primary">Cargar</button>
                                        </div>

                                    </div>

                                </div>

                            </form>
                        </div>

                        <!--Etiqueta Datos Laborables-->
                        <div role="tabpanel" class="tab-pane" id="D_Laborables">
                            <form action="" method="post">
                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label>Fecha de ingreso</label>
                                        <input type="date" class="form-control" id="inp_fechaingreso" placeholder="aaaa-mm-dd">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Cargo</label>
                                        <input type="text" class="form-control" id="inp_cargo">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Departamento:</label>
                                        <input type="text" class="form-control" id="inp_departamento">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Provincia</label>
                                        <select class="form-control" id="inp_provincia2">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Sueldo:</label>
                                        <input type="text" class="form-control" id="inp_sueldo">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label>Jornada Parcial:</label>
                                        <br>
                                        <div class="form-group row-md-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="rad_jornada1" value="S">
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="rad_jornada2" value="N">
                                                <label class="form-check-label">No</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="inputAddress2">Observaciones</label>
                                        <input type="text" class="form-control" id="inp_obser" placeholder="Apartment, studio, or floor">
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
            <button id="btActualizar" type="button" class="btn btn-primary">Actualizar</button>
        </div>

        </section>

        <!-- <========================= -->


        <script>
            var idUp;
            //=======>JQUERY
            //AL CARGAR LA PAGINA
            window.onload = function() {
                Buscar();
                $('#2').hide();
            }

            //Cambiar de archivo
            $('#btInsertar').click(function(e) {
                $(location).attr('href','./View/Ingreso.php');

            });

            //Clic btn ingresar
            $('#btActualizar').click(function(e) {
                Actualizar();
                //Ocultar
                $('#2').hide();
                //Mostrar
                $('#1').show();
                //Recargar Sitio
                location.reload()

            });
            //Cargar Imagen ficha
            $(document).on("click", ".browse", function() {
                var file = $(this).parents().find(".file");
                file.trigger("click");
            });
            $('input[type="file"]').change(function(e) {
                var fileName = e.target.files[0].name;
                $("#file").val(fileName);

                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById("prevista").src = e.target.result;
                };
                reader.readAsDataURL(this.files[0]);
            });
            //Clic btn buscar
            $('#btBuscar').click(function(e) {
                Buscar();
            });
            //Vaciar la tabla
            $("#datos_tablas").empty();

            //<=========

            function Buscar() {
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
                                //var tabla = "<tr onclick='Actualizar(id)'>";
                                var tabla = "<tr <a href='#' onclick = \" Enviar_Datos( \n\
                            '" + (valor.id) + "',\n\
                            '" + (valor.Nom) + "',\n\
                            '" + (valor.Ape) + "',\n\
                            '" + (valor.Ced) + "',\n\
                            '" + (valor.Prov1) + "',\n\
                            '" + (valor.FechNa) + "',\n\
                            '" + (valor.Email) + "',\n\
                            '" + (valor.Observ1) + "',\n\
                            '" + (valor.Foto) + "',\n\
                            '" + (valor.FechIng) + "',\n\
                            '" + (valor.Cargo) + "',\n\
                            '" + (valor.Depart) + "',\n\
                            '" + (valor.Prov2) + "',\n\
                            '" + (valor.Sueldo) + "',\n\
                            '" + (valor.Jornada) + "',\n\
                            '" + (valor.Observ2) + "') \" >Editar";

                                tabla += "</a>";
                                tabla += "<td>" + valor.Nom + " " + valor.Ape + "</td>";
                                tabla += "<td>" + valor.Ced + "</td>";
                                tabla += "<td>" + valor.Cargo + "</td>";
                                tabla += "</tr>";
                                //console.log(valor.Nombre);
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




            function Actualizar() {
                alert(idUp);
                var datos = new FormData();
                datos.append('id', idUp);
                datos.append('nombres', $('#inp_nombres').val());
                datos.append('apellidos', $('#inp_apellidos').val());
                datos.append('cedula', $('#inp_cedula').val());
                datos.append('provincia', $('#inp_provincia1').val());
                datos.append('fec_na', $('#inp_fecha').val());
                datos.append('email', $('#inp_email').val());
                datos.append('observaciones1', $('#inp_observacion1').val());
                datos.append('foto', $('#file_image').val());
                datos.append('fec_ingre', $('#inp_fechaingreso').val());
                datos.append('cargo', $('#inp_cargo').val());
                datos.append('departamento', $('#inp_departamento').val());
                datos.append('provincia2', $('#inp_provincia2').val());
                datos.append('sueldo', $('#inp_sueldo').val());
                datos.append('jornada', $('#rad_jornada1').val());
                datos.append('observaciones2', $('#inp_obser').val());


                $.ajax({
                    type: "post",
                    url: "./Controller/Actualizar.php?accion=insertar",
                    data: datos,
                    processData: false,
                    contentType: false,
                    success: function(respuesta) {
                        alert(respuesta);

                    }
                });

            }

            function Enviar_Datos(id, nom, ape, ced, prov1, fechna, email, observ1, foto, feching, cargo, depart, prov2, sueldo, jornada, observ2) {
                //$(location).prop('href', './View/Ingreso.php')  
                alert(feching);
                $('#1').hide();
                $('#2').show();
                $("#inp_nombres").val(nom);
                $("#inp_apellidos").val(ape);
                $("#inp_cedula").val(ced);
                $("#inp_provincia1").val(prov1);
                $("#inp_fecha").val(fechna);
                $("#inp_email").val(email);
                $("#inp_observacion1").val(observ1);
                //$("#file_image").val(foto);
                $("#inp_fechaingreso").val(feching);
                $("#inp_cargo").val(cargo);
                $("#inp_departamento").val(depart);
                $("#inp_provincia2").val(prov2);
                $("#inp_sueldo").val(sueldo);
                $("#rad_jornada1").val(jornada);
                $("#inp_obser").val(observ2);
                idUp = id
            }
        </script>


    

</body>

</html>