DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_USUARIO_READ`()
BEGIN
	select * from tb_usuarios;
END$$
DELIMITER ;