DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_DOCENTE_DELETE`(Iddocente int(11))
BEGIN
   delete from tb_docente where id_docente = Iddocente;
END$$
DELIMITER ;
