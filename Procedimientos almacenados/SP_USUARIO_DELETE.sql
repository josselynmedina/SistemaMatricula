DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_USUARIO_DELETE`(Idusuario int(11))
BEGIN
	delete from tb_usuarios where id_usuario = Idusuario;
END$$
DELIMITER ;