<div class="sag">
	<ul class="duyuruListe">
		<?php
			foreach($programlar as $program){
			?>
			<li>
				<a href="<?php echo clk::site(); ?>/programSil/<?php echo $program["id"]; ?>"><?php echo $program["programAdi"]; ?></a>
			</li>
			<?php
			}
		?>
	</ul>
</div>