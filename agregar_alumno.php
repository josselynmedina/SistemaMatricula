<?php 
    include('conexion.php');
    require 'Modulo/header.php';
    require 'Modulo/left_panel.php';


    if (isset($_POST["btn_nuevo_estudiante"]))
    {
        $btn=$_POST["btn_nuevo_estudiante"];
        if($btn == "Agregar estudiante")
        {
            $nombres=$_POST['nombres'];
            $primer_apellido=$_POST['primer_apellido'];
            $segundo_apellido=$_POST['segundo_apellido'];
            $direccion=$_POST['direccion'];
            $telefono=$_POST['telefono'];
            $fecha_nacimiento=$_POST['fecha_nacimiento'];
            $fecha_ingreso=$_POST['fecha_ingreso'];
            $genero=$_POST['genero'];
            $id_curso=$_POST['id_curso'];
            
            $query = "CALL SP_ESTUDIANTE_CREATE('$nombres','$primer_apellido','$segundo_apellido','$direccion','$telefono','$genero','$fecha_nacimiento','$fecha_ingreso','$id_curso','1','1')";
            $re = mysqli_query($conn, $query);
            if(!$re)
            {echo 'No se pueden mostrar los datos desde la consulta: $query !!';
            exit;}
            
            //echo "<script> alert('Un usuario ha sido Almacenado en la Base de Datos');</script>";
                
        }
    }

?>
    <!-- Right Panel -->

    
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">


                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="Template/images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                  

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">

                    <div class="col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Datos del Estudiante</strong> 
                            </div>
                            <div class="card-body card-block">
                            <form name="fu" action="" method="POST">
                                <div class="form-group">
                                    <label class=" form-control-label">Nombres</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input class="form-control" name ="nombres">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Primer apellido</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input class="form-control" name="primer_apellido">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Segundo apellido</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input class="form-control" name="segundo_apellido">
                                    </div>
                                    
                                </div>

                                 <div class="form-group">
                                    <label class=" form-control-label">Direccion</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-fax"></i></div>
                                        <input class="form-control" name="direccion">
                                    </div>
                               
                               </div>

                                 <div class="form-group">
                                    <label class=" form-control-label">Telefono</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input class="form-control" name="telefono">
                                    </div>
                                    <small class="form-text text-muted">ex. (999) 999-9999</small>
                                </div>

                                   <div class="form-group">
                                    <label class=" form-control-label">Genero</label>
                                    <select name="genero" id="select" class="form-control">
                                        <option value="">Seleccione un Genero</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                        
                                    </select>
                                    
                                </div>
        
                                <div class="form-group">
                                    <label class=" form-control-label">Fecha de nacimiento</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input class="form-control" name="fecha_nacimiento">
                                    </div>
                                    <small class="form-text text-muted">ex. Año/Mes/Dia</small>
                                </div>
                                  <div class="form-group">
                                    <label class=" form-control-label">Fecha de ingreso</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input class="form-control" name="fecha_ingreso">
                                    </div>
                                    <small class="form-text text-muted">ex. Año/Mes/Dia</small>
                                </div>

                                   <div class="form-group">
                                    <label class=" form-control-label">Curso</label>
                                    <select name="id_curso" id="select" class="form-control">
                                        <option value="">Seleccione un Curso</option>
                                        <option value="1">Primero de Ciclo Comun seccion 1</option>
                                        <option value="2">Primero de Ciclo Comun seccion 2</option>
                                        <option value="3">Segundo de Ciclo Comun seccion 2</option>
                                        <option value="4">Segundo de Ciclo Comun seccion 1</option>
                                        <option value="5">Tercero de Ciclo Comun seccion 1</option>
                                        <option value="6">Tercero de Ciclo Comun seccion 2</option>
                                        
                                    </select>
                                    
                                </div>

                                    <input type="submit" name="btn_nuevo_estudiante" value="Agregar estudiante" />
                               </form>
                            </div>
                        </div>
                    </div>

                  


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="Modulo/Template/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="Modulo/Template/assets/js/popper.min.js"></script>
    <script src="Modulo/Template/assets/js/plugins.js"></script>
    <script src="Modulo/Template/assets/js/main.js"></script>
    <script src="Modulo/Template/assets/js/lib/chosen/chosen.jquery.min.js"></script>

    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
        });
    </script>

</body>
</html>