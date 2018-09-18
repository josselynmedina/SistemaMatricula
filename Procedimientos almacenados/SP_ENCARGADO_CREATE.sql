DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ENCARGADO_CREATE`(
nombres varchar(50),
primer_apellido varchar(45),
segundo_apellido varchar(45),
direccion varchar(45),
telefono varchar(8),
genero varchar(45),
parentesco varchar(45)
)
BEGIN
	insert into tb_encargado(nombres,primer_apellido,segundo_apellido,direccion,telefono,genero,parentesco) values (nombres,primer_apellido,segundo_apellido,direccion,telefono,genero,parentesco);
END$$
DELIMITER ;
