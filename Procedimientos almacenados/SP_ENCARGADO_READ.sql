DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ENCARGADO_READ`()
BEGIN
	select * from tb_encargado;
END$$
DELIMITER ;
