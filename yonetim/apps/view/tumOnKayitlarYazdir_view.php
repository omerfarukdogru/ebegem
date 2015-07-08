<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Tüm Ön Kayıtlar</title>
	<style type="text/css">
		table, tr, td{
			border:1px solid;
			border-collapse:collapse;
			font:15px Arial;
		}
		td { padding:5px; }
	</style>
</head>
<body onload="window.print()">
	<table>
		<tr>
			<td><strong>Ad Soyad</strong></td>
			<td><strong>Aldıgı Ders(ler)</strong></td>
			<td><strong>Yazdır</strong></td>
		</tr>
		<?php
			foreach($tumOnKayitlar as $tum){
			?>
			<tr>
				<td><?php echo $tum["ad"]." ".$tum["soyad"]; ?></td>
				<td>
					<?php
						for($i=0;$i<count($tum["programlar"]);$i++){
						echo "-".$tum["programlar"][$i];
						?>
						<br />
						<?php
						}
					?>
				</td>
				<td>
					<a href="<?php echo clk::site(); ?>/kisiBilgiYazdir/<?php echo $tum["id"]; ?>">Yazdır</a>
				</td>
			</tr>
			<?php
			}
		?>
	</table>
</body>
</html>