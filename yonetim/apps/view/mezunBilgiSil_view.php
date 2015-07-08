<div class="sag">
	<ul class="duyuruListe">
		<?php
			foreach($mezunlar as $mezun){
			?>
			<li>
				<a href="<?php echo clk::site(); ?>/mezunBilgisil/<?php echo $mezun["id"]; ?>"><?php echo $mezun["adSoyad"]; ?></a>
			</li>
			<?php
			}
		?>
	</ul>
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