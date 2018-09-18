DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ESTUDIANTE_READ`()
BEGIN
 select * from tb_estudiante;
END$$
DELIMITER ;

