DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_DOCENTE_READ`()
BEGIN
	select * from tb_docente;
END$$
DELIMITER ;
