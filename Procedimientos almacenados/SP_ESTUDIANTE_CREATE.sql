DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ESTUDIANTE_CREATE`(
nombres varchar(50),
primer_apellido varchar(45),
segundo_apellido varchar(45),
direccion varchar(45),
telefono varchar(8),
genero varchar(45),
fecha_nacimiento date,
fecha_ingreso date,
id_curso int(11),
id_encargado int (11),
id_usuario int(11)
)
BEGIN
 insert into tb_estudiante(nombres,primer_apellido,segundo_apellido,direccion,telefono,genero,fecha_nacimiento,fecha_ingreso,tb_curso_id_curso,tb_encargado_id_encargado,tb_usuarios_id_usuario) values (nombres,primer_apellido,segundo_apellido,direccion,telefono,genero,fecha_nacimiento,fecha_ingreso,id_curso,id_encargado,id_usuario);
END$$
DELIMITER ;
