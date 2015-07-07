<div class="sag">
	<?php
		if(@$q[1]){
			$sira=1;
		?>
		<a class="yazdir" href="<?php echo clk::site(); ?>/seminerKayitYazdir/<?php echo $q[1]; ?>">Bu Listeyi Yazdır</a>
		<table class="seminerListe">
			<tr>
				<td><strong>Sıra</strong></td><td><strong>Adı Soyadı</strong></td>
			</tr>
			<?php
				foreach($liste as $list){
			?>
			<tr><td><?php echo $sira; ?></td><td><?php echo $list["adSoyad"]; ?></td></tr>
			<?php
				$sira++;
				}
			?>
		</table>
		<?php
		}
		else{
		?>
		<ul class="duyuruListe">
			<?php
				foreach($seminerler as $seminer){
				?>
				<li>
					<a href="<?php echo clk::site(); ?>/egitimSeminerkayitlari/<?php echo $seminer["id"]; ?>"><?php echo $seminer["seminerAdi"]; ?></a>
				</li>
				<?php
				}
			?>
		</ul>
		<?php
		}
	?>
</div>