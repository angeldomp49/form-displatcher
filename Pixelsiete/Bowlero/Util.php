<?php
namespace Pixelsiete\Bowlero;

use \Date;
use \DateTime;

class Util{
    public static function nuevoFormatoFecha( $str = false ){
        if( $str == false ){
            return '0000-00-00';
        }
        $str = self::barraPorGuion( $str );
        $time = DateTime::createFromFormat( 'd-m-Y', $str );
        $nuevoFormato = $time->format('Y-m-d');
        return self::comillas($nuevoFormato);
    }
    
    public static function comillas( $str ){
        $comilla = "'";
        return $comilla . $str . $comilla;
    }
    
    public static function barraPorGuion( $str ){
        $nuevaStr = str_replace( "/", "-", $str );
        return $nuevaStr;
    }
    
    public static function asunto( $asunto ){
        return str_replace( '-',' ',strtoupper( $asunto ) );
    }
}