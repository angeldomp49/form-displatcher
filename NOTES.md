
*debug*

    bowlero.mx/bowlero-test/procesa-contactanos-test.php

*Para insertar en las tablas:*

bolsa_de_trabajo:
    nombre
    email
    telefono
    mensaje

cotiza_ahora
    nombre
    email
    telefono
    mensaje
    como_te_enteraste

danos_tu_opinion
    nombre
    email
    telefono
    mensaje
    como_te_enteraste

paquetes_escolares
    nombre
    email
    telefono
    mensaje
    sucursal
    escuela
    numero_de_alumnos
    numero_de_profesores
    edades
    fecha_del_evento
    hora_de_inicio
    hora_de_fin

fiestas_corporativas
    nombre
    email
    telefono
    mensaje
    como_te_enteraste
    sucursal
    nombre_de_la_empresa
    numero_de_asistentes
    fecha_del_evento
    hora_de_inicio
    hora_de_fin

fiestas_para_adultos
    nombre
    email
    telefono
    mensaje
    como_te_enteraste
    sucursal
    nombre_del_festejado
    edad_del_festejado
    numero_de_invitados
    fecha_del_evento
    hora_de_inicio
    hora_de_fin

fiestas_infantiles
    nombre
    email
    telefono
    mensaje
    como_te_enteraste
    sucursal
    nombre_del_festejado
    edad_del_festejado
    numero_de_invitados
    fecha_del_evento
    hora_de_inicio
    hora_de_fin


*Falta por hacer:*

hacer los arrays para construir las solicitudes
preparar la prueba

Verificar los accesos ya que en el caso de boliches amf y bowlero si son diferentes los usuarios la base de datos que se va a utilizar 
va a cambiar y no va a mostrar error.

*solicitudes*

**estructura**

'**clave_del_formulario**' => [
    'tabla' => '**nombre de la tabla**',
    'valores' => [
        **valores que se van a insertar**
    ],
    'emailConfig' => [
        'host' => '',
        'userName' => '',
        'password' => '',
        'fromName' => '',
        'emailTemplate' => '',
        'receptores' => [
            **receptores**
            $formData['email']
        ],
        'copiasOcultas' => [
            **los Bcc**
        ]
        'data' => [
            'asunto' => '',
            'nombre' => '',
            'email' => '',
            'telefono' => '',
            'mensaje' => ''
            **otros campos que van a ser mostrados en el mensaje**
        ]
    ]
]
