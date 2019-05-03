<?php include "head.html"; ?>
<?php include "db.php";?>
<?php
	$sql="SELECT O.order_id, date_and_time, name_hall, real_cost, name, sum(P.prepayment)
FROM orderr O left JOIN manager M ON O.m_id=M.m_id left JOIN hall H ON  O.hall_id=H.hall_id
left JOIN provisional_l P ON O.order_id=P.order_id
WHERE YEAR(O.date_and_time)=2017
and MONTH(O.date_and_time)=03
group by (order_id);";
	$clients=$pdo->query($sql);
?>

<html>
	<body>
	<table>
		<tbody> 
			<tr>
				<th> Дата и время проведения </th> 
				<th> Зал </th>
				<th> Начальная стоимость </th>
				<th> Конечная стоимость </th>
				<th> Менеджер </th>
			</tr>
			<?php foreach($clients as $client):?>
				<tr>
					<td><?php echo $client['date_and_time'];?></td>
					<td><?php echo $client['name_hall'];?></td>
					<td><?php echo $client['real_cost'];?></td>
					<td><?php echo $client['sum(P.prepayment)'];?></td>
					<td><?php echo $client['name'];?></td>
				</tr>
		</tbody>
			<?php endforeach;?>
	</table>
	</body>
</html>
