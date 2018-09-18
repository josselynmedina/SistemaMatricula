<?php 
    require 'Modulo/header.php';
    require 'Modulo/left_panel.php';
   
?>


    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="Modulo/Template/images/admin.jpg" alt="User Avatar">
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
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Reporte de Maestros</a></li>
                           
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Tabla de Encargados</strong>
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
                                                <th>NOMBRES </th>
                                                <th>PRIMER APELLIDO</th>
                                                <th>SEGUNDO APELLIDO</th>
                                                <th>DIRECCION </th>
                                                <th>TELEFONO</th>

                                            </tr>
                                        <thead>
                                            ";
                                        while ($row=mysqli_fetch_object($res)) {
                                            echo "
                                            <tbody>
                                                <tr>
                                                    <td>$row->nombres</td>
                                                    <td>$row->primer_apellido</td>
                                                    <td>$row->segundo_apellido</td>
                                                    <td>$row->direccion</td>
                                                    <td>$row->telefono</td>
                                                </tr>
                                            </tbody>
                                            ";
                                        }
                                        echo "</table>";
                                ?>
                            
                        </div>
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


    <script src="Modulo/Template/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="Modulo/Template/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="Modulo/Template/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="Modulo/Template/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="Modulo/Template/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="Modulo/Template/assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="Modulo/Template/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="Modulo/Template/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="Modulo/Template/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="Modulo/Template/assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="Modulo/Template/assets/js/lib/data-table/datatables-init.js"></script>


</body>
</html>