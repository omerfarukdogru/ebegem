<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Ön Kayıt Listesi</title>
	<style type="text/css">
		table, tr, td{
			border:1px solid;
			border-collapse:collapse;
			font:15px Arial;
		}
		td { padding:5px; }
		.baslik{
			width:100%;
			height:auto;
			font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;
			font-size:20px;
			margin-left:20px;
			margin-top:20px;
		}
	</style>
</head>
<body onload="window.print()">
	<center>
	<h2 class="baslik"><?php foreach($dersAdi as $ders){ echo $ders["programAdi"]; } ?> Dersini Alanlar Listesi</h2>
	<table>
		<tr>
			<td><strong>Sıra</strong></td>
			<td><strong>Adı Soyadı</strong></td>
		</tr>
		<?php
			for($i=0;$i<count($dersiAlanlar);$i++){
				$alan = $dersiAlanlar[$i];
			?>
			<tr>
				<td><?php echo $i+1; ?></td>
				<td><?php echo $alan[0][0]." ".$alan[0][1]; ?></td>
			</tr>
			<?php
			}
		?>
	</table>
	</center>
</body>
</html>