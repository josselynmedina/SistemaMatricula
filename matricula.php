<?php 
    include('conexion.php');
    require 'Modulo/header.php';
    require 'Modulo/left_panel_alumno.php';


    if (isset($_POST["btn_nuevo_matricula"]))
    {
        $btn=$_POST["btn_nuevo_matricula"];
        if($btn == "Agregar matricula")
        {
        
            $id_curso=$_POST['id_curso'];
            
            $query = "CALL SP_MATRICULA_CREATE('1','$id_curso','2000')";
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

        <!-- Right Panel -->
        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">

                    <div class="col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Matricula</strong> 
                            </div>
                            
                            <form name="fu" action="" method="POST">

                                  <div class="form-group">
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

                                  <div class="form-group">
                                    <label class=" form-control-label">Costo</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input class="form-control" name ="costo" disabled="" value="2,000.00">
                                    </div>

                                     <input type="submit" name="btn_nuevo_matricula" value="Agregar matricula" />
                                     <a href="pagos.php">Pago Online</a></li>
                                </form>
                            
                        </div>
                    </div>

              



            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->
    



    <script src="Modulo/Template/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="Modulo/Template/assets/js/popper.min.js"></script>
    <script src="Modulo/Template/assets/js/plugins.js"></script>
    <script src="Modulo/Template/assets/js/main.js"></script>
    <script src="Modulo/Template/assets/js/lib/chosen/chosen.jquery.min.js"></script>



</body>
</html>