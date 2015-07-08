<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Kişi Bilgileri</title>
	<style type="text/css">
			table, tr, td{
				border:1px solid;
				border-collapse:collapse;
				font:15px Arial;
			}
			td { padding:5px; }
			h2{
				font:15px Arial;
				font-weight:bold;
			}
	</style>
</head>
<body onload="window.print()"><center>
	<h2>Kişi Bilgileri</h2>
	<table>
	<?php
		foreach($tumOnKayitlar as $tum){
		?>
		<tr><td><strong>T.C. Kimlik No</strong></td><td><?php echo $tum["tc"]; ?></td></tr>
		<tr><td><strong>Ad Soyad</strong></td><td><?php echo $tum["ad"]." ".$tum["soyad"]; ?></td></tr>
		<tr><td><strong>Cinsiyet</strong></td><td><?php echo $tum["cinsiyet"]; ?></td></tr>
		<tr><td><strong>Meslek</strong></td><td><?php echo $tum["meslek"]; ?></td></tr>
		<tr><td><strong>Doğum Yeri</strong></td><td><?php echo $tum["dogumYeri"]; ?></td></tr>
		<tr><td><strong>Doğum Tarihi</strong></td><td><?php echo $tum["dGun"]."/".$tum["dAy"]."/".$tum["dYil"]; ?></td></tr>
		<tr><td><strong>Öğrenim Durumu</strong></td><td><?php switch($tum["ogrenimDurum"]){
			case 1:
				echo "İlk Okul";
				break;
			case 2:
				echo "Lise";
				break;
			case 3:
				echo "Üniversite";
				break;
			default:
				echo "İlk Okul";
				break;
		} ?></td></tr>
		<?php
		}
	?>
		<tr><td><strong>Adres</strong></td><td><?php echo $tum["adres"]; ?></td></tr>
		<tr><td><strong>İlçe</strong></td><td><?php echo $tum["ilce"]; ?></td></tr>
		<tr><td><strong>Telefon</strong></td><td><?php echo $tum["telefon"]; ?></td></tr>
		<tr><td><strong>Email</strong></td><td><?php echo $tum["email"]; ?></td></tr>
	</table>
	</center>
</body>
</html>