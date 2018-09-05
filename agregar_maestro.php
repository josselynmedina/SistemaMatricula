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
                                <strong>Datos del maestro</strong> 
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class=" form-control-label">Primer nombre</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input class="form-control">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Segundo nombre</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input class="form-control">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Primer apellido</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input class="form-control">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Segundo apellido</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input class="form-control">
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Fecha de nacimiento</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input class="form-control">
                                    </div>
                                    <small class="form-text text-muted">ex. 10/06/1995</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Telefono</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input class="form-control">
                                    </div>
                                    <small class="form-text text-muted">ex. (999) 999-9999</small>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">Direccion</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-fax"></i></div>
                                        <input class="form-control">
                                    </div>
                               
                               </div>
        
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Genero</strong>
                            </div>
                            <div class="card-body">

                                  <select data-placeholder="Seleccione el Genero del alumno.." class="standardSelect" tabindex="1">
                                    <option value=""></option>
                                    <option value="Femenino">Femenino</option>
                                    <option value="Masculino">Masculino</option>
                                  
                                </select>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Ingreso</strong>
                            </div>
                          <div class="form-group">
                           <div class="form-group">
                                    <label class=" form-control-label">Fecha de nacimiento</label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                        <input class="form-control">
                                    </div>
                                    <small class="form-text text-muted">ex. 10/06/1995</small>
                                </div>
                        </div>    

                    </div>

                    <div class="card">
                        <input type="submit" name = "" value="Agregar" />
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