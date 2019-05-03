<?php include "head.html"; ?>
<?php include "db.php";?>

<?php
	$sql="SELECT O.m_id, name, count(O.m_id), sum(real_cost)
FROM orderr O, manager M
WHERE M.m_id=O.m_id and YEAR(O.date_and_time)=2017
and MONTH(O.date_and_time)=03
GROUP BY (O.m_id);";
	$clients=$pdo->query($sql);
?>

<html>
	<body>
	<table>
		<tbody> 
			<tr>
				<th> ID менеджера </th> 
				<th> Фамилия менеджера </th>
				<th> Количество принятых заказов </th>
				<th> Сумма принятых заказов </th>
			</tr>
			<?php foreach($clients as $client):?>
				<tr>
					<td><?php echo $client['m_id'];?></td>
					<td><?php echo $client['name'];?></td>
					<td><?php echo $client['count(O.m_id)'];?></td>
					<td><?php echo $client['sum(real_cost)'];?></td>
				</tr>
		</tbody>
			<?php endforeach;?>
	</table>
	</body>
</html>
