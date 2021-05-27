USE formularios;

DELIMITER |

CREATE PROCEDURE IF NOT EXISTS insertar_en_bolsa_de_trabajo( IN nombre VARCHAR(255), IN email VARCHAR(255), IN telefono VARCHAR(255), IN mensaje VARCHAR(255) )
BEGIN
    INSERT INTO bolsa_de_trabajo VALUES( null, CURRENT_DATE(), CURRENT_TIME(), nombre, email, telefono, mensaje );
END |

CREATE PROCEDURE IF NOT EXISTS insertar_en_cotiza_ahora( IN nombre VARCHAR(255), IN email VARCHAR(255), IN telefono VARCHAR(255), IN mensaje VARCHAR(255), IN como_te_enteraste VARCHAR(255) )
BEGIN
    INSERT INTO cotiza_ahora VALUES( null, CURRENT_DATE(), CURRENT_TIME(), nombre, email, telefono, mensaje, como_te_enteraste );
END |

CREATE PROCEDURE IF NOT EXISTS insertar_en_danos_tu_opinion( IN nombre VARCHAR(255), IN email VARCHAR(255), IN telefono VARCHAR(255), IN mensaje VARCHAR(255), IN como_te_enteraste VARCHAR(255) )
BEGIN
    INSERT INTO danos_tu_opinion VALUES( null, CURRENT_DATE(), CURRENT_TIME(), nombre, email, telefono, mensaje, como_te_enteraste );
END |

CREATE PROCEDURE IF NOT EXISTS insertar_en_eventos_sociales( IN nombre VARCHAR(255), IN email VARCHAR(255), IN telefono VARCHAR(255), IN mensaje VARCHAR(255), IN como_te_enteraste VARCHAR(255), IN fecha_del_evento DATE, IN hora_de_inicio TIME, IN hora_de_fin TIME )
BEGIN
    INSERT INTO eventos_sociales VALUES( null, CURRENT_DATE(), CURRENT_TIME(), nombre, email, telefono, mensaje, como_te_enteraste, fecha_del_evento, hora_de_inicio, hora_de_fin );
END |

CREATE PROCEDURE IF NOT EXISTS insertar_en_fiestas_corporativas( IN nombre VARCHAR(255), IN email VARCHAR(255), IN telefono VARCHAR(255), IN mensaje VARCHAR(255), IN como_te_enteraste VARCHAR(255), IN nombre_de_la_empresa VARCHAR(255), IN numero_de_asistentes SMALLINT, IN fecha_del_evento DATE, IN hora_de_inicio TIME, IN hora_de_fin TIME )
BEGIN
    INSERT INTO fiestas_corporativas VALUES( null, CURRENT_DATE(), CURRENT_TIME(), nombre, email, telefono, mensaje, como_te_enteraste, nombre_de_la_empresa, numero_de_asistentes, fecha_del_evento, hora_de_inicio, hora_de_fin );
END |

CREATE PROCEDURE IF NOT EXISTS insertar_en_fiestas_para_adultos( IN nombre VARCHAR(255), IN email VARCHAR(255), IN telefono VARCHAR(255), IN mensaje VARCHAR(255), IN como_te_enteraste VARCHAR(255), IN nombre_del_festejado VARCHAR(255), IN edad_del_festejado TINYINT, IN numero_de_invitados SMALLINT, IN fecha_del_evento DATE, IN hora_de_inicio TIME, IN hora_de_fin TIME )
BEGIN
    INSERT INTO fiestas_para_adultos VALUES( null, CURRENT_DATE(), CURRENT_TIME(), nombre, email, telefono, mensaje, como_te_enteraste, nombre_del_festejado, edad_del_festejado, numero_de_invitados, fecha_del_evento, hora_de_inicio, hora_de_fin );
END |

CREATE PROCEDURE IF NOT EXISTS insertar_en_fiestas_infantiles( IN nombre VARCHAR(255), IN email VARCHAR(255), IN telefono VARCHAR(255), IN mensaje VARCHAR(255), IN como_te_enteraste VARCHAR(255), IN nombre_del_festejado VARCHAR(255), IN edad_del_festejado TINYINT, IN numero_de_invitados SMALLINT, IN fecha_del_evento DATE, IN hora_de_inicio TIME, IN hora_de_fin TIME )
BEGIN
    INSERT INTO fiestas_infantiles VALUES( null, CURRENT_DATE(), CURRENT_TIME(), nombre, email, telefono, mensaje, como_te_enteraste, nombre_del_festejado, edad_del_festejado, numero_de_invitados, fecha_del_evento, hora_de_inicio, hora_de_fin );
END |

CREATE PROCEDURE IF NOT EXISTS insertar_en_newsletter( IN nombre VARCHAR(255), IN email VARCHAR(255), IN estado VARCHAR(255), IN edad TINYINT )
BEGIN
    INSERT INTO newsletter VALUES( null, CURRENT_DATE(), CURRENT_TIME(), nombre, email, estado, edad );
END |