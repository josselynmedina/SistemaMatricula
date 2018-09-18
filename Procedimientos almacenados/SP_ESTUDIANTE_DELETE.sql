DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ESTUDIANTE_DELETE`(Idestudiante int(11))
BEGIN
	delete from tb_estudiante where id_estudiante = Idestudiante;
END$$
DELIMITER ;
