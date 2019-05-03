<?php
	$dbname="kurs";
	$login="root";
	$password="";
	try{
		$pdo = new PDO("mysql:host=LocalHost;dbname=$dbname", "root", "");
		$pdo->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo"Error of open!!!".$e->getmessage();
		exit();
	}
?>