<div class="sag">
	<h2 class="baslik">Programlar Listesi</h2>
	<ul class="duyuruListe">
		<?php
			foreach($programlar as $program){
			?>
			<li><a href="<?php echo clk::site(); ?>/onKayitDetay/<?php echo $program["id"]; ?>"><?php echo $program["programAdi"]; ?></a></li>
			<?php
			}
		?>
	</ul>
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<ul class="duyuruListe">
		<li>
			<a href="<?php echo clk::site(); ?>/tumOnKayitlar">Tüm Ön Kayıtların Listesi</a>
		</li>
	</ul>
</div>