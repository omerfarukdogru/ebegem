<div class="sag">
	<?php
		if(!@$q[1]){
		?>
		<ul class="duyuruListe">
			<?php
				foreach($duyurular as $duyuru){
				?>
				<li><a href="<?php echo clk::site(); ?>/duyuruDuzenle/<?php echo $duyuru["id"]; ?>" class="duyurLink"><?php echo $duyuru["duyuruBaslik"]; ?></a></li>
				<?php
				}
			?>
		</ul>
		<?php
		}
		else{
			foreach($duyuruDetay as $duyuru){
			?>
			<form action="" method="post">
				<table class="formTablo">
					<tr>
						<td class="bilgi">Duyuru Başlık</td>
						<td class="input"><input type="text" name="duyuruBaslik" value="<?php echo $duyuru["duyuruBaslik"]; ?>" /></td>
					</tr>
					<tr>
						<td class="bilgi">Duyuru İçeriği</td>
						<td class="input">
							<textarea name="duyuruDetay" id="" cols="30" rows="10"><?php echo $duyuru["duyurudetay"]; ?></textarea>
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
</div>