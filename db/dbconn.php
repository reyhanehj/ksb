<?php
	
	class DBConn {
	
		public static function getDBConn(){
			$hostname = 'localhost';		
			$username = 'root';
			$password = '';
			$dbName = 'kasabeh';
			$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
			return new PDO("mysql:host=$hostname;dbname=$dbName", $username, $password, $options);
		}
		
		public static function getDBConnByExp(){
			$hostname = 'localhost';		
			$username = 'root';
			$password = '';
			//$dbName = 'sndb';
			$dbName = 'kasabeh';
			$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
							 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
			return new PDO("mysql:host=$hostname;dbname=$dbName", $username, $password, $options);
		}		
	}
?>