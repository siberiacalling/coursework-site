<?php include "head.html"; ?>
<?php include "db.php";?>

<?php
	$sql="SELECT * FROM provisional_l;";
	$clients=$pdo->query($sql)->fetchAll();
?>

<html>
	<body>
		<table>
			<tbody> 
				<tr>
					<th> ID списка </th> 
					<th> ID заказа</th>
					<th> ID блюда </th>
					<th> Количество блюд</th>
					<th> Аванс </th>
				</tr>
				<?php foreach($clients as $client):?>
					<tr>
						<td><?php echo $client['list_id'];?></td>
						<td><?php echo $client['order_id'];?></td>
						<td><?php echo $client['dish_id'];?></td>
						<td><?php echo $client['number_of_dishes'];?></td>
						<td><?php echo $client['prepayment'];?></td>
					</tr>
			</tbody>
				<?php endforeach;?>
		</table>
	</body>
</html>