DELIMITER |

CREATE PROCEDURE IF NOT EXISTS todo_bolsa_de_trabajo()
BEGIN
    SELECT id, fecha, nombre, email, telefono, mensaje FROM bolsa_de_trabajo;
END |