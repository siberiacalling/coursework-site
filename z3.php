<?php include "head.html"; ?>
<?php include "db.php";?>

<?php
	$sql="SELECT * FROM manager
WHERE birthday=(SELECT MAX(birthday) FROM manager);";
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
