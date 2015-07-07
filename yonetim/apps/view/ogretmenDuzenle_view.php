<div class="sag">
	<ul class="duyuruListe">
	<?php
		if(!@$q[1]){
			foreach($ogretmenler as $ogretmen){
			?>
		<li><a href="<?php echo clk::site(); ?>/ogretmenDuzenle/<?php echo $ogretmen["id"]; ?>"><?php echo $ogretmen["ogretmenAdi"]; ?></a></li>
			<?php
			}
		}
		else{
			foreach($ogretmenDetay as $ogretmen){
			?>
	<form action="" method="post" enctype="multipart/form-data">
		<table class="formTablo">
			<tr>
				<td class="bilgi">Öğretmen Adı</td>
				<td class="input"><input type="text" name="ogretmenAdi" value="<?php echo $ogretmen["ogretmenAdi"]; ?>" /></td>
			</tr>
			<tr>
				<td class="bilgi">Öğretmen Bilgileri</td>
				<td class="input"><textarea name="ogretmenBilgileri" cols="30" rows="10"><?php echo $ogretmen["ogretmenBilgileri"]; ?></textarea></td>
			</tr>
			<tr>
				<td class="bilgi">Öğretmen Resmi</td>
				<td class="input">
					<div class="resimDiv2">
						<img src="<?php echo clk::site(); ?>/../images/<?php echo $ogretmen["ogretmenResim"]; ?>" />
					</div>
					<input type="file" name="resim" id="resim" /> <label for="resim">Değiştirmek için seçin. </label>
				</td>
			</tr>
			<tr>
				<td class="bilgi">&nbsp;</td>
				<td class="input"><input type="submit" value="Kaydet" /></td>
			</tr>
		</table>
	</form>
			<?php
			}
		}
	?>
	</ul>
</div>