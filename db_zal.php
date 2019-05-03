<?php include "head.html"; ?>
<?php include "db.php";?>

<?php
	$sql="SELECT * FROM hall;";
	$clients=$pdo->query($sql)->fetchAll();
?>

<html>
	<body>
		<table>
			<tbody> 
				<tr>
					<th> ID зала </th> 
					<th> Максимально количество мест </th>
					<th> Имя зала </th>
				</tr>
				<?php foreach($clients as $client):?>
					<tr>
						<td><?php echo $client['hall_id'];?></td>
						<td><?php echo $client['max_num_of_seats'];?></td>
						<td><?php echo $client['name_hall'];?></td>
					</tr>
			</tbody>
				<?php endforeach;?>
		</table>
	</body>
</html>