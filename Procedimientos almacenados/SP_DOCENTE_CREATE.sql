DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_DOCENTE_CREATE`(
nombres varchar(50),
primer_apellido varchar(45),
segundo_apellido varchar(45),
direccion varchar(45),
telefono varchar(8),
fecha_nacimiento date,
fecha_ingreso date,
genero varchar(45),
id_usuario int(11)
)
BEGIN
	insert into tb_docente(nombres,primer_apellido,segundo_apellido,direccion,telefono,fecha_nacimiento,fecha_ingreso,genero,tb_usuarios_id_usuario) values (nombres,primer_apellido,segundo_apellido,direccion,telefono,fecha_nacimiento,fecha_ingreso,genero,id_usuario);
END$$
DELIMITER ;
