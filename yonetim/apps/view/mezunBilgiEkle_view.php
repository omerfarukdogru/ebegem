<div class="sag">
	<?php
		if(@$eklendi){
		echo $eklenen;
		?>
		 eklendi
		<?php
		}
	?>
	<form action="" method="post">
		<table class="formTablo">
			<tr>
				<td class="bilgi">Mezun Adı Soyadı</td>
				<td class="input"><input type="text" name="adSoyad" /></td>
			</tr>
			<tr>
				<td class="bilgi">Çalıştığı Yer</td>
				<td class="input"><input type="text" name="calistigiYer" /></td>
			</tr>
			<tr>
				<td class="bilgi">&nbsp;</td>
				<td class="input"><input type="submit" value="Kaydet" /></td>
			</tr>
		</table>
	</form>
</div>