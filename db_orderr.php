<?php include "head.html"; ?>
<?php include "db.php";?>

<?php
	$sql="SELECT * FROM orderr;";
	$clients=$pdo->query($sql)->fetchAll();
?>

<html>
	<body>
		<table>
			<tbody> 
				<tr>
					<th> ID заказа </th> 
					<th> ID менеджера </th>
					<th> ID зала </th>
					<th> Дата и время </th>
					<th> Полная стоимость </th>
					<th> Количество гостей</th>
				</tr>
				<?php foreach($clients as $client):?>
					<tr>
						<td><?php echo $client['order_id'];?></td>
						<td><?php echo $client['m_id'];?></td>
						<td><?php echo $client['hall_id'];?></td>
						<td><?php echo $client['date_and_time'];?></td>
						<td><?php echo $client['real_cost'];?></td>
						<td><?php echo $client['amount_of_guests'];?></td>
					</tr>
			</tbody>
				<?php endforeach;?>
		</table>
	</body>
</html>