<?php
class controldb{

	function __construct(){
		try{
	//declarando variables
		$host="localhost";
		$db_name="mrosales";
		$user="root";
		$pass="";
		//conexion
		$this->con=mysqli_connect($host,$user,$pass) or die("error en la conexion");
		//seleccion de bd
		mysqli_select_db($this->con,$db_name) or die("no se ha encontrado la bd");
		 
 
		}catch(Exception $ex){
			throw $ex;

		}
	


							}

	function consultar($sql){
		$res=mysqli_query($this->con,$sql);
		$data=NULL;
		while($filas=mysqli_fetch_assoc($res)){
			$data[]=$filas;
		}
		return $data;


	}
}

  ?>