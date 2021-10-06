<?php 

Class Database
{
		public function db_connect() //public just for test set as private
		{

			try{

				$string = DB_TYPE .":host=".DB_HOST.";dbname=".DB_NAME.";";
				$db = new PDO($string,DB_USER,DB_PASS);
				show($db);
			}catch(PDOException $e){

				die($e->getMessage());
			}	
		}
		public function read($query, $data = [])
		{

		}
		public function write($query, $data = [])
		{

		}
}