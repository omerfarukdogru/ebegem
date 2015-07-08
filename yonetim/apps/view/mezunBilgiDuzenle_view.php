<div class="sag">
	<?php
		if(@$id){
	?>
	<form action="" method="post">
		<table class="formTablo">
			<?php
				foreach($kisiBilgi as $kisi){
				?>
				<tr>
					<td class="bilgi">Mezun Adı Soyadı</td>
					<td class="input"><input type="text" name="adSoyad" value="<?php echo $kisi["adSoyad"]; ?>" /></td>
				</tr>
				<tr>
					<td class="bilgi">Çalıştığı Yer</td>
					<td class="input"><input type="text" name="calistigiYer" value="<?php echo $kisi["calistigiYer"]; ?>" /></td>
				</tr>
				<tr>
					<td class="bilgi">&nbsp;</td>
					<td class="input"><input type="submit" value="Kaydet" /></td>
				</tr>
				<?php
				}
			?>
		</table>
	</form>
	<?php
		}
		else{
		?>
		<ul class="duyuruListe">
			<?php
				foreach($mezunlar as $mezun){
				?>
				<li>
					<a href="<?php echo clk::site(); ?>/mezunBilgiDuzenle/<?php echo $mezun["id"]; ?>"><?php echo $mezun["adSoyad"]; ?></a>
				</li>
				<?php
				}
			?>
		</ul>
		<?php
		}
	?>
	<div class="sayfayaGit">
		<form action="" method="post">
			<input type="hidden" name="sayfa" value="mezunbilgi" />
			<select name="sayfa">
				<?php
					for($i=1;$i<=$sayfaSayi;$i++){
					?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
					<?php
					}
				?>
			</select> / <?php echo $sayfaSayi; ?>
			<input type="submit" value="Sayfaya Git" />
		</form>
	</div>
</div>