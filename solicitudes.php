<?php
include_once("Pixelsiete/Bowlero/Util.php");

use Pixelsiete\Bowlero\Util;
global $formData;

$copiasOcultas = [
    COPY_ONE,
    COPY_TWO
];

return $solicitudesArr = [
    "bolsa-de-trabajo" => [
        'tabla' => "bolsa_de_trabajo",
        'valores' => [
            Util::comillas($formData['nombre']),
            Util::comillas($formData['email']),
            Util::comillas($formData['telefono']),
            Util::comillas($formData['mensaje'])
        ],
        'emailConfig' => [
            'host' => EMAIL_HOST,
            'userName' => EMAIL_USER,
            'password' => EMAIL_PASSWORD,
            'fromName' => EMAIL_FROM_NAME,
            'emailTemplate' => EMAIL_TEMPLATE,
            'receptores' => [
                "nmerlos@amf.com",
                $formData['email']
            ],
            'copiasOcultas' => $copiasOcultas,
            'data' => [
                'asunto' => EMPRESA_NOMBRE . " - ". Util::asunto( "Bolsa De Trabajo" ) ."",
                'nombre' => $formData['nombre'], 
                'email' => $formData['email'],
                'telefono' => $formData['telefono'],
                'mensaje' => $formData['mensaje']
            ]
        ]
    ],
    "cotiza-ahora" => [
        'tabla' => "cotiza_ahora",
        'valores' => [
            Util::comillas($formData['nombre']),
            Util::comillas($formData['email']),
            Util::comillas($formData['telefono']),
            Util::comillas($formData['mensaje']),
            Util::comillas($formData['como_te_enteraste'])
        ],
        'emailConfig' => [
            'host' => EMAIL_HOST,
            'userName' => EMAIL_USER,
            'password' => EMAIL_PASSWORD,
            'fromName' => EMAIL_FROM_NAME,
            'emailTemplate' => EMAIL_TEMPLATE,
            'receptores' => [
                "fceballos@amf.com",
                "lvazquez@amf.com",
                "jhernandez@amf.com",
                $formData['email']
            ],
            'copiasOcultas' => $copiasOcultas,
            'data' => [
                'asunto' => EMPRESA_NOMBRE . " - ". Util::asunto( "Cotiza Ahora" ) ."",
                'nombre' => $formData['nombre'], 
                'email' => $formData['email'],
                'telefono' => $formData['telefono'],
                'mensaje' => $formData['mensaje'],
                'como_te_enteraste' => $formData['como_te_enteraste'],
            ]
        ]
    ],
    "danos-tu-opinion" => [
        'valores' => [
            Util::comillas($formData['nombre']),
            Util::comillas($formData['email']),
            Util::comillas($formData['telefono']),
            Util::comillas($formData['mensaje']),
            Util::comillas($formData['como_te_enteraste'])
        ],
        'tabla' => "danos_tu_opinion",
        'emailConfig' => [
            'host' => EMAIL_HOST,
            'userName' => EMAIL_USER,
            'password' => EMAIL_PASSWORD,
            'fromName' => EMAIL_FROM_NAME,
            'emailTemplate' => EMAIL_TEMPLATE,
            'receptores' => [
                "josornio@amf.com",
                "jhernandez@amf.com",
                $formData['email']
            ],
            'copiasOcultas' => $copiasOcultas,
            'data' => [
                'asunto' => EMPRESA_NOMBRE . " - ". Util::asunto( "Danos Tu Opinion" ) ."",
                'nombre' => $formData['nombre'], 
                'email' => $formData['email'],
                'telefono' => $formData['telefono'],
                'mensaje' => $formData['mensaje'],
                'como_te_enteraste' => $formData['como_te_enteraste'],
            ]
        ]
    ],
    "eventos-sociales" => [
        'tabla' => "eventos_sociales",
        'valores' => [
            Util::comillas($formData['nombre']),
            Util::comillas($formData['email']),
            Util::comillas($formData['telefono']),
            Util::comillas($formData['mensaje']),
            Util::comillas($formData['como_te_enteraste']),
            Util::nuevoFormatoFecha($formData['fecha_del_evento']),
            Util::comillas($formData['hora_de_inicio']),
            Util::comillas($formData['hora_de_fin'])
        ],
        'emailConfig' => [
            'host' => EMAIL_HOST,
            'userName' => EMAIL_USER,
            'password' => EMAIL_PASSWORD,
            'fromName' => EMAIL_FROM_NAME,
            'emailTemplate' => EMAIL_TEMPLATE,
            'receptores' => [
                "fceballos@amf.com",
                "lvazquez@amf.com",
                "jhernandez@amf.com",
                $formData['email']
            ],
            'copiasOcultas' => $copiasOcultas,
            'data' => [
                'asunto' => EMPRESA_NOMBRE . "- ". Util::asunto( "Eventos Sociales" ) ."",
                'nombre' => $formData['nombre'],
                'email' => $formData['email'],
                'telefono' => $formData['telefono'],
                'mensaje' => $formData['mensaje'],
                'sucursal' => $formData['como_te_enteraste'],
                'fecha_del_evento' => $formData['fecha_del_evento'],
                'hora_de_inicio' => $formData['hora_de_inicio'],
                'hora_de_fin' => $formData['hora_de_fin']
            ]
        ]
    ],
    "eventos-corporativos" => [
        'tabla' => "fiestas_corporativas",
        'valores' => [
            Util::comillas($formData['nombre']),
            Util::comillas($formData['email']),
            Util::comillas($formData['telefono']),
            Util::comillas($formData['mensaje']),
            Util::comillas($formData['como_te_enteraste']),
            Util::comillas($formData['nombre_de_la_empresa']),
            $formData['numero_de_asistentes'],
            Util::nuevoFormatoFecha($formData['fecha_del_evento']),
            Util::comillas($formData['hora_de_inicio']),
            Util::comillas($formData['hora_de_fin'])
        ],
        'emailConfig' => [
            'host' => EMAIL_HOST,
            'userName' => EMAIL_USER,
            'password' => EMAIL_PASSWORD,
            'fromName' => EMAIL_FROM_NAME,
            'emailTemplate' => EMAIL_TEMPLATE,
            'receptores' => [
                "fceballos@amf.com",
                "lvazquez@amf.com",
                "jhernandez@amf.com",
                $formData['email']
            ],
            'copiasOcultas' => $copiasOcultas,
            'data' => [
                'asunto' => EMPRESA_NOMBRE . " - ". Util::asunto( "Eventos Corporativos" ) ."",
                'nombre' => $formData['nombre'],
                'email' => $formData['email'],
                'telefono' => $formData['telefono'],
                'mensaje' => $formData['mensaje'],
                'como_te_enteraste' => $formData['como_te_enteraste'],
                'nombre_de_la_empresa' => $formData['nombre_de_la_empresa'],
                'numero_de_asistentes' => $formData['numero_de_asistentes'],
                'fecha_del_evento' => $formData['fecha_del_evento'],
                'hora_de_inicio' => $formData['hora_de_inicio'],
                'hora_de_fin' => $formData['hora_de_fin'],
            ]
        ]
    ],
    "fiestas-para-adultos" => [
        'tabla' => "fiestas_para_adultos",
        'valores' => [
            Util::comillas($formData['nombre']),
            Util::comillas($formData['email']),
            Util::comillas($formData['telefono']),
            Util::comillas($formData['mensaje']),
            Util::comillas($formData['como_te_enteraste']),
            Util::comillas($formData['nombre_del_festejado']),
            $formData['edad_del_festejado'],
            $formData['numero_de_invitados'],
            Util::nuevoFormatoFecha($formData['fecha_del_evento']),
            Util::comillas($formData['hora_de_inicio']),
            Util::comillas($formData['hora_de_fin'])
        ],
        'emailConfig' => [
            'host' => EMAIL_HOST,
            'userName' => EMAIL_USER,
            'password' => EMAIL_PASSWORD,
            'fromName' => EMAIL_FROM_NAME,
            'emailTemplate' => EMAIL_TEMPLATE,
            'receptores' => [
                "fceballos@amf.com",
                "lvazquez@amf.com",
                "jhernandez@amf.com",
                $formData['email']
            ],
            'copiasOcultas' => $copiasOcultas,
            'data' => [
                'asunto' => EMPRESA_NOMBRE . " - ". Util::asunto( "Fiestas Para Adultos" ) ."",
                'nombre' => $formData['nombre'],
                'email' => $formData['email'],
                'telefono' => $formData['telefono'],
                'mensaje' => $formData['mensaje'],
                'como_te_enteraste' => $formData['como_te_enteraste'],
                'nombre_del_festejado' => $formData['nombre_del_festejado'],
                'edad_del_festejado' => $formData['edad_del_festejado'],
                'numero_de_invitados' => $formData['numero_de_invitados'],
                'fecha_del_evento' => $formData['fecha_del_evento'],
                'hora_de_inicio' => $formData['hora_de_inicio'],
                'hora_de_fin' => $formData['hora_de_fin'],
            ]
        ]
    ],
    "fiestas-infantiles" => [
        'tabla' => "fiestas_infantiles",
        'valores' => [
            Util::comillas($formData['nombre']),
            Util::comillas($formData['email']),
            Util::comillas($formData['telefono']),
            Util::comillas($formData['mensaje']),
            Util::comillas($formData['como_te_enteraste']),
            Util::comillas($formData['nombre_del_festejado']),
            $formData['edad_del_festejado'],
            $formData['numero_de_invitados'],
            Util::nuevoFormatoFecha($formData['fecha_del_evento']),
            Util::comillas($formData['hora_de_inicio']),
            Util::comillas($formData['hora_de_fin'])
        ],
        'emailConfig' => [
            'host' => EMAIL_HOST,
            'userName' => EMAIL_USER,
            'password' => EMAIL_PASSWORD,
            'fromName' => EMAIL_FROM_NAME,
            'emailTemplate' => EMAIL_TEMPLATE,
            'receptores' => [
                "fceballos@amf.com",
                "lvazquez@amf.com",
                "jhernandez@amf.com",
                $formData['email']
            ],
            'copiasOcultas' => $copiasOcultas,
            'data' => [
                'asunto' => EMPRESA_NOMBRE . " - ". Util::asunto( "Fiestas Infantiles" ) ."",
                'nombre' => $formData['nombre'],
                'email' => $formData['email'],
                'telefono' => $formData['telefono'],
                'mensaje' => $formData['mensaje'],
                'como_te_enteraste' => $formData['como_te_enteraste'],
                'nombre_del_festejado' => $formData['nombre_del_festejado'],
                'edad_del_festejado' => $formData['edad_del_festejado'],
                'numero_de_invitados' => $formData['numero_de_invitados'],
                'fecha_del_evento' => $formData['fecha_del_evento'],
                'hora_de_inicio' => $formData['hora_de_inicio'],
                'hora_de_fin' => $formData['hora_de_fin'],
            ]
        ]
    ],
    "newsletter" => [
        'valores' => [
            Util::comillas($formData['nombre']),
            Util::comillas($formData['email']),
            Util::comillas($formData['estado']),
            $formData['edad']
        ],
        'tabla' => "newsletter",
        'emailConfig' => [
            'host' => EMAIL_HOST,
            'userName' => EMAIL_USER,
            'password' => EMAIL_PASSWORD,
            'fromName' => EMAIL_FROM_NAME,
            'emailTemplate' => EMAIL_TEMPLATE,
            'asuntoDelMail' => "Boliches AMF - ". Util::asunto( "Newsletter" ) ."",
            'receptores' => [
            ],
            'copiasOcultas' => $copiasOcultas
        ]
    ],
];