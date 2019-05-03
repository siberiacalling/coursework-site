<?php include "head.html"; ?>
<?php include "db.php";?>

<?php
	$sql="SELECT * FROM manager;";
	$clients=$pdo->query($sql)->fetchAll();
?>

<html>
	<body>
		<table>
			<tbody> 
				<tr>
					<th> ID менеджера </th> 
					<th> Паспорт </th>
					<th> Дата приема на работу </th>
					<th> Дата увольнения </th>
					<th> Дата рождения </th>
					<th> Фамилия </th>
				</tr>
				<?php foreach($clients as $client):?>
					<tr>
						<td><?php echo $client['m_id'];?></td>
						<td><?php echo $client['passport'];?></td>
						<td><?php echo $client['date_of_employment'];?></td>
						<td><?php echo $client['date_of_dismissal'];?></td>
						<td><?php echo $client['birthday'];?></td>
						<td><?php echo $client['name'];?></td>
					</tr>
			</tbody>
				<?php endforeach;?>
		</table>
	</body>
</html>