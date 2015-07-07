<div class="sag">
	<ul class="duyuruListe">
		<?php
			foreach($duyurular as $duyuru){
			?>
			<li><a href="<?php echo clk::site(); ?>/duyuruSil/<?php echo $duyuru["id"]; ?>"><?php echo $duyuru["duyuruBaslik"]; ?></a></li>
			<?php
			}
		?>
	</ul>
</div>