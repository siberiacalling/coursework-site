<?php include "head.html"; ?>
<?php include "db.php";?>

<?php
	$otch_y=$_GET['o_year']; 
	$otch_m=$_GET['o_month']; 
	if ($otch_y !=0 and $otch_m !=0) 
	{ 
	$sql="SELECT * FROM otchet WHERE m=$otch_m AND y=$otch_y;"; 
	$pr=$pdo->query($sql); 
	$num=$pr->rowcount($sql); 
	if ($num==0) { 
		$pdo->exec("call otch($otch_y, $otch_m)"); 
		$result=$pdo->query($sql); 
		$otchet=$result->fetchall(); 
		$yes=0;
	} 
else { 
		$result=$pdo->query($sql); 
		$otchet=$result->fetchall();
		$yes=1;
	} 
} 
?> 

<html> 
	<body>
		<table border=1>
			<center>
			<?php echo "Отчет работы менеджеров за $otch_y год $otch_m месяц<br/>";?>  
			<br/>
			<?php if ($yes==1) {echo "Отчет уже был создан<p align='center'><br/>";} else {echo "Отчет был только что создан<br/>";};?>
			</center>
			<tbody> 
			<tr>
				<th>ID менеджера</td> 
				<th>Менеджер</td>
				<th>Количество принятых заказов</td>
				<th>Стоимость всех заказов</th>
			</tr>
			<?php foreach($otchet as $o):?> 
				<tr>
					<td><?php echo $o['m_id'];?></td>
					<td><?php echo $o['m_name'];?></td>
					<td><?php echo $o['qnt'];?></td>
					<td><?php echo $o['summ'];?></td>
				</tr>
			</tbody>
			<?php endforeach;?> 
	</body>
</html>