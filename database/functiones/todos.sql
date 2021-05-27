
USE formularios;

DELIMITER |

CREATE PROCEDURE IF NOT EXISTS todo_bolsa_de_trabajo()
BEGIN
    SELECT * FROM bolsa_de_trabajo;
END |

CREATE PROCEDURE IF NOT EXISTS todo_cotiza_ahora()
BEGIN
    SELECT * FROM cotiza_ahora;
END |

CREATE PROCEDURE IF NOT EXISTS todo_danos_tu_opinion()
BEGIN
    SELECT * FROM danos_tu_opinion;
END |

CREATE PROCEDURE IF NOT EXISTS todo_eventos_sociales()
BEGIN
    SELECT * FROM eventos_sociales;
END |

CREATE PROCEDURE IF NOT EXISTS todo_fiestas_corporativas()
BEGIN
    SELECT * FROM fiestas_corporativas;
END |

CREATE PROCEDURE IF NOT EXISTS todo_fiestas_para_adultos()
BEGIN
    SELECT * FROM fiestas_para_adultos;
END |

CREATE PROCEDURE IF NOT EXISTS todo_fiestas_infantiles()
BEGIN
    SELECT * FROM fiestas_infantiles;
END |