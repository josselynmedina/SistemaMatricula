DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ENCARGADO_DELETE`(Idencargado int(11))
BEGIN
 delete from tb_encargado where id_encargado = Idencargado;
END$$
DELIMITER ;
