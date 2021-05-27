
USE formularios;

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

USE formularios;

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

USE formularios;

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
--------------------------------------------------------------------------------------
USE formularios;

CREATE TABLE IF NOT EXISTS eventos_sociales(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    fecha DATE,
    hora TIME,
    nombre VARCHAR(255),
    email VARCHAR(255),
    telefono VARCHAR(255),
    mensaje TEXT,
    como_te_enteraste VARCHAR(255),
    fecha_del_evento DATE,
    hora_de_inicio TIME,
    hora_de_fin TIME,
    PRIMARY KEY (id)
)
ENGINE = INNODB;

USE formularios;

CREATE TABLE IF NOT EXISTS fiestas_corporativas(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    fecha DATE,
    hora TIME,
    nombre VARCHAR(255),
    email VARCHAR(255),
    telefono VARCHAR(255),
    mensaje TEXT,
    como_te_enteraste VARCHAR(255),
    nombre_de_la_empresa VARCHAR(255),
    numero_de_asistentes SMALLINT,
    fecha_del_evento DATE,
    hora_de_inicio TIME,
    hora_de_fin TIME,
    PRIMARY KEY (id)
)
ENGINE = INNODB;

USE formularios;

CREATE TABLE IF NOT EXISTS fiestas_para_adultos(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    fecha DATE,
    hora TIME,
    nombre VARCHAR(255),
    email VARCHAR(255),
    telefono VARCHAR(255),
    mensaje TEXT,
    como_te_enteraste VARCHAR(255),
    nombre_del_festejado VARCHAR(255),
    edad_del_festejado TINYINT,
    numero_de_invitados SMALLINT,
    fecha_del_evento DATE,
    hora_de_inicio TIME,
    hora_de_fin TIME,
    PRIMARY KEY (id)
)
ENGINE = INNODB;

USE formularios;

CREATE TABLE IF NOT EXISTS fiestas_infantiles(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    fecha DATE,
    hora TIME,
    nombre VARCHAR(255),
    email VARCHAR(255),
    telefono VARCHAR(255),
    mensaje TEXT,
    como_te_enteraste VARCHAR(255),
    nombre_del_festejado VARCHAR(255),
    edad_del_festejado TINYINT,
    numero_de_invitados SMALLINT,
    fecha_del_evento DATE,
    hora_de_inicio TIME,
    hora_de_fin TIME,
    PRIMARY KEY (id)
)
ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS newsletter(
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    fecha DATE,
    hora TIME,
    nombre VARCHAR(255),
    email VARCHAR(255),
    estado VARCHAR(255),
    edad TINYINT,
    PRIMARY KEY (id)
)
ENGINE = INNODB;