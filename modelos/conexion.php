<?php

class Conexion{

	public static function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=qtech",
			            "root",
			            "");

		$link -> exec("set names utf8");

		return $link;

	}

}