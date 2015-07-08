<div class="sag">
	<table class="seminerListe">
		<tr>
			<td><strong>Ad Soyad</strong></td>
			<td><strong>Aldıgı Ders(ler)</strong></td>
			<td><strong>Yazdır</strong></td>
		</tr>
		<?php
			foreach($tumOnKayitlar as $tum){
			?>
			<tr>
				<td><?php echo $tum["ad"]." ".$tum["soyad"]; ?></td>
				<td>
					<?php
						for($i=0;$i<count($tum["programlar"]);$i++){
						echo "-".$tum["programlar"][$i];
						?>
						<br />
						<?php
						}
					?>
				</td>
				<td>
					<a href="<?php echo clk::site(); ?>/kisiBilgiYazdir/<?php echo $tum["id"]; ?>">Yazdır</a>
				</td>
			</tr>
			<?php
			}
		?>
	</table>
	<a href="<?php echo clk::site(); ?>/tumOnKayitlarYazdir" class="yazdir">Bu Listeyi Yazdır</a>
	<a href="<?php echo clk::site(); ?>/tumOnKayitlar/temizle" class="yazdir">Bu Listeyi Sil</a>
</div>