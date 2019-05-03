<?php include "head.html"; ?>
<?php include "db.php";?>

<?php
	$sql="SELECT *  FROM manager
WHERE  m_id  NOT IN (SELECT DISTINCT O.m_id FROM orderr O
WHERE YEAR(O.date_and_time)=2013
and MONTH(O.date_and_time)=03);";
	$clients=$pdo->query($sql);
?>

<html>
	<body>
	<table>
		<tbody> 
			<tr>
				<th> ID менеджера </th> 
				<th> Фамилия менеджера </th>
				<th> Паспорт </th>
				<th> Дата принятия на работу </th>
				<th> Дата увольнения</th>
				<th> День рождения</th>
			</tr>
			<?php foreach($clients as $client):?>
				<tr>
					<td><?php echo $client['m_id'];?></td>
					<td><?php echo $client['name'];?></td>
					<td><?php echo $client['passport'];?></td>
					<td><?php echo $client['date_of_employment'];?></td>
					<td><?php echo $client['date_of_dismissal'];?></td>
					<td><?php echo $client['birthday'];?></td>
				</tr>
		</tbody>
			<?php endforeach;?>
	</table>
	</body>
</html>
