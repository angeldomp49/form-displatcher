



CREATE TABLE IF NOT EXISTS bolsa_de_trabajo(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    fecha DATE,
    hora TIME,
    nombre VARCHAR(255),
    email VARCHAR(255),
    telefono VARCHAR(255),
    mensaje TEXT,
    PRIMARY KEY (id)
)
ENGINE = INNODB;



CREATE TABLE IF NOT EXISTS cotiza_ahora(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    fecha DATE,
    hora TIME,
    nombre VARCHAR(255),
    email VARCHAR(255),
    telefono VARCHAR(255),
    mensaje TEXT,
    como_te_enteraste VARCHAR(255),
    PRIMARY KEY (id)
)
ENGINE = INNODB;



CREATE TABLE IF NOT EXISTS danos_tu_opinion(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    fecha DATE,
    hora TIME,
    nombre VARCHAR(255),
    email VARCHAR(255),
    telefono VARCHAR(255),
    mensaje TEXT,
    como_te_enteraste VARCHAR(255),
    PRIMARY KEY (id)
)
ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS paquetes_escolares(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    fecha DATE,
    hora TIME,
    nombre VARCHAR(255),
    email VARCHAR(255),
    telefono VARCHAR(255),
    mensaje TEXT,
    sucursal VARCHAR(255),
    escuela VARCHAR(255),
    numero_de_alumnos SMALLINT,
    numero_de_profesores SMALLINT,
    edades VARCHAR(255),
    fecha_del_evento DATE,
    hora_de_inicio TIME,
    hora_de_fin TIME,
    PRIMARY KEY (id)
)
ENGINE = INNODB;


CREATE TABLE IF NOT EXISTS fiestas_corporativas(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    fecha DATE,
    hora TIME,
    nombre VARCHAR(255),
    email VARCHAR(255),
    telefono VARCHAR(255),
    mensaje TEXT,
    como_te_enteraste VARCHAR(255),
    sucursal VARCHAR(255),
    nombre_de_la_empresa VARCHAR(255),
    numero_de_asistentes SMALLINT,
    fecha_del_evento DATE,
    hora_de_inicio TIME,
    hora_de_fin TIME,
    PRIMARY KEY (id)
)
ENGINE = INNODB;



CREATE TABLE IF NOT EXISTS fiestas_para_adultos(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    fecha DATE,
    hora TIME,
    nombre VARCHAR(255),
    email VARCHAR(255),
    telefono VARCHAR(255),
    mensaje TEXT,
    como_te_enteraste VARCHAR(255),
    sucursal VARCHAR(255),
    nombre_del_festejado VARCHAR(255),
    edad_del_festejado TINYINT,
    numero_de_invitados SMALLINT,
    fecha_del_evento DATE,
    hora_de_inicio TIME,
    hora_de_fin TIME,
    PRIMARY KEY (id)
)
ENGINE = INNODB;



CREATE TABLE IF NOT EXISTS fiestas_infantiles(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    fecha DATE,
    hora TIME,
    nombre VARCHAR(255),
    email VARCHAR(255),
    telefono VARCHAR(255),
    mensaje TEXT,
    como_te_enteraste VARCHAR(255),
    sucursal VARCHAR(255),
    nombre_del_festejado VARCHAR(255),
    edad_del_festejado TINYINT,
    numero_de_invitados SMALLINT,
    fecha_del_evento DATE,
    hora_de_inicio TIME,
    hora_de_fin TIME,
    PRIMARY KEY (id)
)
ENGINE = INNODB;



DELIMITER |

CREATE PROCEDURE insertar_en_bolsa_de_trabajo( IN nombre VARCHAR(255), IN email VARCHAR(255), IN telefono VARCHAR(255), IN mensaje VARCHAR(255) )
BEGIN
    INSERT INTO bolsa_de_trabajo VALUES( null, CURRENT_DATE(), CURRENT_TIME(), nombre, email, telefono, mensaje );
END |

CREATE PROCEDURE insertar_en_cotiza_ahora( IN nombre VARCHAR(255), IN email VARCHAR(255), IN telefono VARCHAR(255), IN mensaje VARCHAR(255), IN como_te_enteraste VARCHAR(255) )
BEGIN
    INSERT INTO cotiza_ahora VALUES( null, CURRENT_DATE(), CURRENT_TIME(), nombre, email, telefono, mensaje, como_te_enteraste );
END |

CREATE PROCEDURE insertar_en_danos_tu_opinion( IN nombre VARCHAR(255), IN email VARCHAR(255), IN telefono VARCHAR(255), IN mensaje VARCHAR(255), IN como_te_enteraste VARCHAR(255) )
BEGIN
    INSERT INTO danos_tu_opinion VALUES( null, CURRENT_DATE(), CURRENT_TIME(), nombre, email, telefono, mensaje, como_te_enteraste );
END |

CREATE PROCEDURE insertar_en_paquetes_escolares( IN nombre VARCHAR(255), IN email VARCHAR(255), IN telefono VARCHAR(255), IN mensaje VARCHAR(255), IN sucursal VARCHAR(255),IN escuela VARCHAR(255), IN numero_de_alumnos SMALLINT, IN numero_de_profesores SMALLINT, IN edades VARCHAR(255), IN fecha_del_evento DATE, IN hora_de_inicio TIME, IN hora_de_fin TIME )
BEGIN
    INSERT INTO paquetes_escolares VALUES( null, CURRENT_DATE(), CURRENT_TIME(), nombre, email, telefono, mensaje, sucursal, escuela, numero_de_alumnos, numero_de_profesores, edades, fecha_del_evento, hora_de_inicio, hora_de_fin );
END |

CREATE PROCEDURE insertar_en_fiestas_corporativas( IN nombre VARCHAR(255), IN email VARCHAR(255), IN telefono VARCHAR(255), IN mensaje VARCHAR(255), IN como_te_enteraste VARCHAR(255), IN sucursal VARCHAR(255), IN nombre_de_la_empresa VARCHAR(255), IN numero_de_asistentes SMALLINT, IN fecha_del_evento DATE, IN hora_de_inicio TIME, IN hora_de_fin TIME )
BEGIN
    INSERT INTO fiestas_corporativas VALUES( null, CURRENT_DATE(), CURRENT_TIME(), nombre, email, telefono, mensaje, como_te_enteraste, sucursal, nombre_de_la_empresa, numero_de_asistentes, fecha_del_evento, hora_de_inicio, hora_de_fin );
END |

CREATE PROCEDURE insertar_en_fiestas_para_adultos( IN nombre VARCHAR(255), IN email VARCHAR(255), IN telefono VARCHAR(255), IN mensaje VARCHAR(255), IN como_te_enteraste VARCHAR(255), IN sucursal VARCHAR(255), IN nombre_del_festejado VARCHAR(255), IN edad_del_festejado TINYINT, IN numero_de_invitados SMALLINT, IN fecha_del_evento DATE, IN hora_de_inicio TIME, IN hora_de_fin TIME )
BEGIN
    INSERT INTO fiestas_para_adultos VALUES( null, CURRENT_DATE(), CURRENT_TIME(), nombre, email, telefono, mensaje, como_te_enteraste, sucursal, nombre_del_festejado, edad_del_festejado, numero_de_invitados, fecha_del_evento, hora_de_inicio, hora_de_fin );
END |

CREATE PROCEDURE insertar_en_fiestas_infantiles( IN nombre VARCHAR(255), IN email VARCHAR(255), IN telefono VARCHAR(255), IN mensaje VARCHAR(255), IN como_te_enteraste VARCHAR(255), IN sucursal VARCHAR(255), IN nombre_del_festejado VARCHAR(255), IN edad_del_festejado TINYINT, IN numero_de_invitados SMALLINT, IN fecha_del_evento DATE, IN hora_de_inicio TIME, IN hora_de_fin TIME )
BEGIN
    INSERT INTO fiestas_infantiles VALUES( null, CURRENT_DATE(), CURRENT_TIME(), nombre, email, telefono, mensaje, como_te_enteraste, sucursal, nombre_del_festejado, edad_del_festejado, numero_de_invitados, fecha_del_evento, hora_de_inicio, hora_de_fin );
END |