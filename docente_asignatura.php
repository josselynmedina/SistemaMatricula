<?php include ("conexion.php"); 
 	require 'Modulo/header.php';
    require 'Modulo/left_panel.php';

	if(isset($_POST["btn_relacionar"])){
		$btn=$_POST["btn_relacionar"];
	    if($btn == "Guardar Cambios")
	    {
	    	$rol = $_POST['roles'];
	    	$user = $_POST['usuarios'];
	    	$query = "SELECT COUNT(*) AS EXISTE FROM TB_DOCENTES_HAS_TB_ASIGNATURA RP WHERE RP.ID_DOCENTE = $rol AND RP.ID_ASIGNATURA = '$user'";
	    	$EXISTE = mysqli_query($conn,$query);
	    	$EXISTE = mysqli_fetch_object($EXISTE);
	    	$EXISTE = $EXISTE->EXISTE + 0;
	    	//echo "<script>alert('EXISTE: ".$EXISTE."');</script>";
	    	//echo "<script>alert('Rol: ".$rol.", Privi: ".$priv."');</script>";
	    	if ($EXISTE == 0) {
	    		$query = "EXECUTE PROCEDURE SP_DOCENTE_ASIGNATURA_CREATE('$user','$rol')";
	    		$re=mysqli_query($conn, $query);
				if(!re)
				{echo 'No se pueden mostrar los datos desde la consulta: $query !!';
				exit;}
				
				echo "<script> alert('Un Rol conectado a un Usuario');</script>";
			
	    	}else{
	    		echo "<script>alert('Ya existe una relacion entre el rol y el usuario seleccionado!');</script>";
	    	}
	    }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="rolToUser" method="post" action="docente_asignatura.php">
		lista de roles:
        <select name='roles'>
            <option value="">--- Select ---</option>
            <?php
            $query = "SELECT * FROM SP_DOCENTE_READ";
            $list = mysqli_query($conn, $query);
            while($row_list=mysqli_fetch_object($list)){
            
	            echo "<option value='$row_list->ID_DOCENTE'>";
	            echo $row_list->NOMBRES;
	            echo "</option>";
            }
            ?>
        </select>

        lista de Usuarios:
        <select name='usuarios'>
            <option value="">--- Select ---</option>
            <?php
            $sql = "SELECT * FROM SP_ASIGNATURA_READ";
            $list_priv = mysqli_query($conn, $sql);
            while($row=mysqli_fetch_object($list_priv)){
            
	            echo "<option value='$row->ID_ASIGNATURA'>";
	            echo $row->ID_ASIGNATURA;
	            echo "</option>";
            }
            ?>
        </select>

        <input id='relacionar' type="submit" name="btn_relacionar" value="Guardar Cambios"/>
	</form>
</body>
</html>