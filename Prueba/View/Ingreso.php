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
    <title>Ingreso</title>

    <style>
        .file {
            visibility: hidden;
            position: absolute;
        }

        textarea {
            resize: none;
        }
    </style>
</head>

<body>

    <div class="container">


        <div role="tabpanel">

            <div class="card-header">
                Ingreso
            </div>

            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"">
                    <a class=" nav-link active" href="#D_Personales" data-toggle="tab">Datos Personales</a>
                </li>
                <li>
                    <a class="nav-link " href="#D_Laborables" data-toggle="tab">Datos Laborables</a>
                </li>
            </ul>

            <form action="javascript:insert();" method="post" class="was-validated">
                <div class="card-body">
                    <div class="tab-content">

                        <!--Etiqueta-->
                        <div role="tabpanel" class="tab-pane active" id="D_Personales">
                            <!--Formulario-->

                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label>Nombres</label>
                                    <input type="text" class="form-control" id="inp_nombres" placeholder="Nombres" maxlength="50" required>
                                    <div class="invalid-feedback">Campo requerido.</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Apellidos</label>
                                    <input type="text" class="form-control" id="inp_apellidos" placeholder="Apellidos" maxlength="50" required>
                                    <div class="invalid-feedback">Campo requerido.</div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Cedula</label>
                                    <input class="form-control" id="inp_cedula" placeholder="Cedula" maxlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                                    <div class="invalid-feedback">Campo requerido.</div>
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
                                    <input type="date" class="form-control" id="inp_fecha" placeholder="aaaa-mm-dd" required>
                                    <div class="invalid-feedback">Campo requerido.</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" id="inp_email" placeholder="Email" required maxlength="50">
                                    <div class="invalid-feedback">Campo requerido.</div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Observaciones</label>

                                    <textarea class="form-control" id="inp_observacion1" rows="3" placeholder="Observaciones" maxlength="100"></textarea>
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




                        </div>

                        <!--Etiqueta-->
                        <div role="tabpanel" class="tab-pane" id="D_Laborables">

                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label>Fecha de ingreso</label>
                                    <input type="date" class="form-control" id="inp_fechaingreso" placeholder="aaaa-mm-dd" required>
                                    <div class="invalid-feedback">Campo requerido.</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Cargo</label>
                                    <input type="text" class="form-control" id="inp_cargo" maxlength="20" required>
                                    <div class="invalid-feedback">Campo requerido.</div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Departamento:</label>
                                    <input type="text" class="form-control" id="inp_departamento" maxlength="20" required>
                                    <div class="invalid-feedback">Campo requerido.</div>
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
                                    <input type="text" class="form-control" id="inp_sueldo" maxlength="10" required>
                                    <div class="invalid-feedback">Campo requerido.</div>
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

                                    <textarea class="form-control" id="inp_obser" rows="3" placeholder="Observaciones" maxlength="100"></textarea>
                                </div>

                            </div>

                            <div class="form-group col-md-12" >
                                <button id="btIngresar" type="submit" class="btn btn-primary">Ingresar</button>

                            </div>



            </form>
        </div>

    </div>
    </div>



    </div>


    </div>

    <script>
        //=======>JQUERY
        /*
        $('#btIngresar').click(function(e) {
            alert("aplasto");
            //insert();
        });
        */
        //Cargar Imagen
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

        //<=========


        function insert() {
            var datos = new FormData();
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
                url: "../Controller/Insertar.php?accion=insertar",
                data: datos,
                processData: false,
                contentType: false,
                success: function(respuesta) {
                    alert(respuesta);

                }
            });

        }
    </script>

</body>

</html>