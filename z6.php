<?php include "head.html"; ?>
<?php include "db.php";?>

<?php
	$sql="SELECT * FROM popp p JOIN hall h ON p.h_id = h.hall_id
 WHERE numb=(SELECT MAX(numb) FROM popp);";
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
						<td><?php echo $client['h_id'];?></td>
						<td><?php echo $client['numb'];?></td>
						<td><?php echo $client['name_hall'];?></td>
					</tr>
			</tbody>
				<?php endforeach;?>
		</table>
	</body>
</html>