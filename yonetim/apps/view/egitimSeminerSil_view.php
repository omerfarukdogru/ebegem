<div class="sag">
	<ul class="duyuruListe">
		<?php
			foreach($seminerler as $seminer){
			?>
			<li><a href="<?php echo clk::site(); ?>/egitimSeminerSil/<?php echo $seminer["id"]; ?>"><?php echo $seminer["seminerAdi"]; ?></a></li>
			<?php
			}
		?>
	</ul>
</div>