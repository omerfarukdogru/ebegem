<div class="sag">
	<ul class="duyuruListe">
		<?php
			foreach($ogretmenler as $ogretmen){
			?>
			<li><a href="<?php echo clk::site(); ?>/ogretmenSil/<?php echo $ogretmen["id"]; ?>"><?php echo $ogretmen["ogretmenAdi"]; ?></a></li>
			<?php
			}
		?>
	</ul>
</div>