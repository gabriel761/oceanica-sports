
<?php

function conectar(){
	try{
		$db = new PDO('mysql:host=localhost;dbname=oceanica_sports;charset=utf8','root','');
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	return $db;
}
?>