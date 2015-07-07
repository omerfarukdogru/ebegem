<div class="sag">
	<h2 class="baslik"><?php foreach($dersAdi as $ders){ echo $ders["programAdi"]; } ?> Dersini Alanlar Listesi</h2>
	<table class="seminerListe">
		<tr>
			<td><strong>Sıra</strong></td>
			<td><strong>Adı Soyadı</strong></td>
		</tr>
		<?php
			for($i=0;$i<count($dersiAlanlar);$i++){
				$alan = $dersiAlanlar[$i];
			?>
			<tr>
				<td><?php echo $i+1; ?></td>
				<td><?php echo $alan[0][0]." ".$alan[0][1]; ?></td>
			</tr>
			<?php
			}
		?>
	</table>
	<a href="<?php echo clk::site(); ?>/onKayitListeYazdir/<?php echo $q[1]; ?>" class="yazdir">Bu Listeyi Yazdır</a>
</div>