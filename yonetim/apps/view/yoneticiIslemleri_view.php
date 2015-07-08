<div class="sag">
	<?php
		if(@$hata===1){
		?>
		<div class="uyari olumsuz">
			Şifreler Uyuşmuyor
		</div>
		<?php
		}
		else if(@$hata===2){
		?>
		<div class="uyari olumsuz">
			Eski Şifre Yanlış
		</div>
		<?php
		}
	?>
	<form action="" method="post">
		<table class="formTablo">
			<tr>
				<td class="bilgi">Eski Şifre</td>
				<td class="input"><input type="password" name="eskiSifre" /></td>
			</tr>
			<tr>
				<td class="bilgi">Yeni Şifre</td>
				<td class="input"><input type="password" name="yeniSifre" /></td>
			</tr>
			<tr>
				<td class="bilgi">Yeni Şifre Tekrar</td>
				<td class="input"><input type="password" name="yeniSifreTekrar" /></td>
			</tr>
			<tr>
				<td class="bilgi">&nbsp;</td>
				<td class="input"><input type="submit" value="Kaydet" /></td>
			</tr>
		</table>
	</form>
</div>