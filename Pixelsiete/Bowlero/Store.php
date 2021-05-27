<?php
namespace Pixelsiete\Bowlero;

use MakechTec\Nanokit\Util\Logger;
use \PDO;
use \PDOException;
use \Exception;

class Store{


	private $pdo;
	
	public function __construct(){
		$this->crearConexion();
	}

	public function crearConexion(){
		$dns = "mysql:dbname=" . DBNAME . ";host=" . DBHOST;  
		try{
			$this->pdo = new PDO( $dns, DBUSER, DBPASSWORD );
		}
		catch(PDOException $e){
			throw new Exception("PDOException: " . $e->getMessage(), 1);
			
		}
		catch(Exception $e){
			throw new Exception("Error en la conexion", 1);
		}
	}

	public function insertarDatos( $tabla, $datos ){
		
		$consulta = $this->generarConsulta( $tabla, $datos );
		if(BOWLERO_DEBUG){
			Logger::log( $consulta );
		}

		try{
			$filas = $this->pdo->exec( $consulta );
			if( $filas == false ){
				throw new Exception("Error al hacer la consulta SQL ", 1);
				
			}
		}
		catch( Exception $e ){
			throw new Exception( "Error al hacer la consulta SQL " . $e->getMessage() );
		}
		
	}

	public function generarConsulta( $tabla, $datos ){
		$parametros = $this->parametrosEnTexto( $datos );
		$consulta = "CALL insertar_en_" . $tabla . "(" . $parametros . ");";
		return $consulta;
	}

	public function parametrosEnTexto( $datos ){
		$coma = ",";
		$parametrosEnTexto = "";
		$i = 0;

		foreach( $datos as $dato ){

			if( $i == 0 ){
				$parametrosEnTexto .= $dato ;
			}
			else{
				$parametrosEnTexto .= $coma . $dato;
			}
			$i++;
		}

		return $parametrosEnTexto;
	}
}