<?php 
    include('conexion.php');
    require 'Modulo/header.php';
    require 'Modulo/left_panel.php';


    if (isset($_POST["btn_eliminar_encargado"]))
    {
        $btn=$_POST["btn_eliminar_encargado"];
        if($btn == "Eliminar encargado")
        {
            $id_encargado=$_POST['id_encargado'];
          
            
            $query = "CALL SP_ENCARGADO_DELETE('$id_encargado')";
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
                                <strong>Datos del Encargado</strong> 
                            </div>
                            
                            <form name="fu" action="" method="POST">
                             
                                <div class="form-group">
                                    <label class=" form-control-label">Id del Encargado</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input class="form-control" name ="id_encargado">
                                    </div>
                                    
                                </div>
                    

                                     <input type="submit" name="btn_eliminar_encargado" value="Eliminar encargado" />
                                
                                </form>
                            
                        </div>
                    </div>
                     <div class="col-xs-6 col-sm-6">
                         <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Encargados existentes</strong>
                        </div>
                        <div class="card-body">
                                <?php
                                        include ("conexion.php");
                                        $query = "CALL SP_ENCARGADO_READ";
                                        $res = mysqli_query($conn, $query);
                                        if (!$res) {
                                            echo "No se puede mostrar los datos desde la consulta $query !!";
                                            exit;
                                        }
                                        echo "<table id='bootstrap-data-table' class='table table-striped table-bordered'>";
                                        echo "
                                        <thead>
                                            <tr>
                                                <th>ID ENCARGADO </th>
                                                <th>NOMBRES</th>
                                                <th>PRIMER APELLIDO </th>
                                                <th>SEGUNDO APELLIDO</th>

                                            </tr>
                                        <thead>
                                            ";
                                        while ($row=mysqli_fetch_object($res)) {
                                            echo "
                                            <tbody>
                                                <tr>
                                                    <td>$row->id_encargado</td>
                                                    <td>$row->nombres</td>
                                                    <td>$row->primer_apellido</td>
                                                    <td>$row->segundo_apellido</td>
                                                   
                                                </tr>
                                            </tbody>
                                            ";
                                        }
                                        echo "</table>";
                                ?>
                            
                        </div>
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