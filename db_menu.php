<?php include "head.html"; ?>
<?php include "db.php";?>

<?php
	$sql="SELECT * FROM menu;";
	$clients=$pdo->query($sql)->fetchAll();
?>

<html>
	<body>
		<table>
			<tbody> 
				<tr>
					<th> ID продукта </th> 
					<th> Название </th>
					<th> Вес </th>
				</tr>
				<?php foreach($clients as $client):?>
					<tr>
						<td><?php echo $client['name'];?></td>
						<td><?php echo $client['cost'];?></td>
						<td><?php echo $client['weight'];?></td>
					</tr>
			</tbody>
				<?php endforeach;?>
		</table>
	</body>
</html>