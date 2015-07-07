<div class="sag">
	<?php
		if(count($programDetay)<1){
		?>
		<ul class="duyuruListe">
			<?php
				foreach($programlar as $program){
				?>
				<li>
					<a href="<?php echo clk::site(); ?>/programDuzenle/<?php echo $program["id"]; ?>"><?php echo $program["programAdi"]; ?></a>
				</li>
				<?php
				}
			?>
		</ul>
		<?php
		}
	?>
	<?php
		foreach($programDetay as $program){
		?>
	<form action="" method="post">
		<table class="formTablo">
			<tr>
				<td class="bilgi">Program Adı</td>
				<td class="input"><input type="text" name="programAdi" value="<?php echo $program["programAdi"]; ?>" /></td>
			</tr>
			<tr>
				<td class="bilgi">Program Detayları</td>
				<td class="input"><textarea name="programdetay" cols="30" rows="10"><?php echo $program["programdetay"]; ?></textarea></td>
			</tr>
			<tr>
				<td class="bilgi">&nbsp;</td>
				<td class="input"><input type="submit" value="Kaydet" /></td>
			</tr>
		</table>
	</form>
		<?php
		}
	?>
</div>