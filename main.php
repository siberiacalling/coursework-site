<?php
	$d1 = 1;//$_GET['year1'];
	$d2 = 2014;//$_GET['year2'];
	$dbname="buying";
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
<?php include "head.html"; ?>
<html>
	<body>
            <p>
               Добро пожаловать на корпоративный сайт ООО "Банкеты Москвы"!
            </p>
			<img class="avatar" src="https://wedding.4banket.ru/wp-content/uploads/2016/03/Skolko-stoit-svadebnyiy-banket-v-Moskve1.jpg"> 
		  </div>
	
   </body>
</html>