<div class="body2">
	<div class="main">
		<div class="mezunlarListesi">
			<table>
				<thead>
					<tr>
						<td><strong>Adı Soyadı</strong></td>
						<td><strong>Çalıştığı Yer</strong></td>
						<td><strong>Telefon</strong></td>
						<td><strong>E-posta</strong></td>
					</tr>
				</thead>
				<tbody>
				<?php
					foreach($mezunlar as $mezun){
					?>
					<tr>
						<td><?php echo $mezun["adSoyad"]; ?></td>
						<td><?php echo $mezun["calistigiYer"]; ?></td>
						<td><?php echo $mezun["telefon"]; ?></td>
						<td><?php echo $mezun["ePosta"]; ?></td>
					</tr>
					<?php
					}
				?>
				</tbody>
			</table>
		</div>
		<form action="<?php echo clk::site(); ?>/redirect" method="post">
			<input type="hidden" name="sayfa" value="mezunbilgi" />
			<select name="sayf">
				<?php
					for($i=1;$i<=$sayfaSayi;$i++){
					?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
					<?php
					}
				?>
			</select> / <?php echo $sayfaSayi; ?>
			<input type="submit" value="Sayfaya Git" class="button" />
		</form>