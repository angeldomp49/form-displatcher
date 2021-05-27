<?php 

define( "BOWLERO_DEBUG", false );

include("Pixelsiete/Bowlero/Procesador.php");
include_once("keys.php");

use Pixelsiete\Bowlero\Procesador;
/*
    //bolsa de trabajo
$fakeForm = [
    'token' => 'bolsa-de-trabajo',
    'nombre' => 'angel',
    'email' => 'angeldomp49@gmail.com',
    'telefono' => '1234567890',
    'como_te_enteraste' => 'Facebook',
    'mensaje' => 'mensaje de prueba de pixelsiete',
];

    //cotiza ahora y danos tu opinion
$fakeForm = [
    'token' => 'cotiza-ahora',
    'nombre' => 'angel',
    'email' => 'angeldomp49@gmail.com',
    'telefono' => '1234567890',
    'como_te_enteraste' => 'Facebook',
    'mensaje' => 'mensaje de prueba de pixelsiete',
];

//eventos sociales
$fakeForm = [
    'nombre' => 'angel',
    'email' => 'angeldomp49@gmail.com',
    'telefono' => '1234567890',
    'como_te_enteraste' => 'Facebook',
    'mensaje' => 'mensaje de prueba de pixelsiete',
    'token' => 'eventos-sociales',
    'fecha_del_evento' => '28/11/2021',
    'hora_de_inicio' => '15:00',
    'hora_de_fin' => '18:00',
];

//eventos corporativos
$fakeForm = [
    'nombre' => 'angel',
    'email' => 'angeldomp49@gmail.com',
    'telefono' => '1234567890',
    'como_te_enteraste' => 'Facebook',
    'mensaje' => 'mensaje de prueba de pixelsiete',
    'token' => 'eventos-corporativos',
    'nombre_de_la_empresa' => 'pixel',
    'numero_de_asistentes' => '30',
    'fecha_del_evento' => '28/11/2021',
    'hora_de_inicio' => '15:00',
    'hora_de_fin' => '18:00',
];

//eventos para adultos e infantiles
$fakeForm = [
    'nombre' => 'angel',
    'email' => 'angeldomp49@gmail.com',
    'telefono' => '1234567890',
    'como_te_enteraste' => 'Facebook',
    'mensaje' => 'mensaje de prueba de pixelsiete',
    'token' => 'fiestas-infantiles',
    'nombre_del_festejado' => 'pixel',
    'edad_del_festejado' => '30',
    'numero_de_invitados' => '67',
    'fecha_del_evento' => '28/11/2021',
    'hora_de_inicio' => '15:00',
    'hora_de_fin' => '18:00',
];
*/

global $formData;

if(BOWLERO_DEBUG){
    $formData = $fakeForm;
}
else{
    $formData = $_POST;
}


$solicitudesArr = include("solicitudes.php");

Procesador::main( $solicitudesArr, $formData );