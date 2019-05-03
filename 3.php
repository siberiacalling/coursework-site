<?php include "head.html"; ?>

<html>
	<table>
	<form method=get action="http://Localhost/2/proc.php"> 
				<style>
				table td {border: 0;}
				table th {border: 0;}
				table {border: 0;}
			</style>
		<table> 
			<tbody> 

				<tr><td>Месяц </td><td><input type=text name=o_month></td> 
				<tr><td>Год </td><td><input type=text name=o_year></td> 
			</tbody> 
		</table> 
		<table> 
			<tbody> 
				<tr><td><input type=reset value="Стереть" style="background:#FFa2a2; font-size:1em;"; ></td> 
				<td><input type=submit value="Отправить"style="background:#FFa2a2; font-size:1em;"></td> 
			</tr> 
			</tbody> 
		</table> 
		<br> 
	</table>
</html>

