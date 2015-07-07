<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Seminer Kayıtları</title>
	<style type="text/css">
		table, tr, td{
			border:1px solid;
			border-collapse:collapse;
			font:15px Arial;
		}
		td { padding:5px; }
	</style>
</head>
<body onload="window.print(),window.close()">
	<table>
		<tr>
			<td><strong>Sıra</strong></td>
			<td><strong>Adı Soyadı</strong></td>
		</tr>
		<?php
			$sira = 1;
			foreach($liste as $list){
			?>
			<tr>
				<td><?php echo $sira; $sira++; ?></td>
				<td><?php echo $list["adSoyad"]; ?></td>
			</tr>
			<?php
			}
		?>
	</table>
</body>
</html>