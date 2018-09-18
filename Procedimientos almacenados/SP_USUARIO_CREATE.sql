DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_USUARIO_CREATE`(
 usuario varchar(45),
 password varchar(45),
 id_perfil int(11)
)
BEGIN
 insert into tb_usuarios(usuario,password,tb_perfiles_id_perfil) values (usuario,password,id_perfil);
END$$
DELIMITER ;
