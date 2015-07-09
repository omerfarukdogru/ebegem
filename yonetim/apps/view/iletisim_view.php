<div class="sag">
	<?php
		if(!@$q[1]){
			?>
			<ul class="duyuruListe"><?php
				foreach($yeniGelenler as $yeni){
				?>
				<li>
					<a href="<?php echo clk::site(); ?>/iletisim/oku/<?php echo $yeni["id"]; ?>"><?php echo $yeni["adSoyad"]; ?></a>
				</li>
				<?php
				}
				foreach($eskiGelenler as $eski){
				?>
				<li>
					<a style="background:#ccc;color:#000;" href="<?php echo clk::site(); ?>/iletisim/oku/<?php echo $eski["id"]; ?>"><?php echo $eski["adSoyad"]; ?></a>
				</li>
				<?php	
				}
			?>
			</ul>
			<?php
		}
		else if($q[1]==="oku"){
		?>
		<table class="formTablo">
			<?php
				foreach($okunan as $oku){
				?>
				<tr>
					<td class="bilgi">Ad Soyad</td>
					<td class="input"><?php echo $oku["adSoyad"]; ?></td>
				</tr>
				<tr>
					<td class="bilgi">E-posta</td>
					<td class="input"><?php echo $oku["email"]; ?></td>
				</tr>
				<tr>
					<td class="bilgi">Mesaj</td>
					<td class="input"><p><?php echo $oku["mesaj"]; ?></p></td>
				</tr>
				<tr>
					<td class="bilgi">&nbsp;</td>
					<td class="input"><a href="<?php echo clk::site(); ?>/iletisim/sil/<?php echo $q[2]; ?>" class="yaziSil">Sil</a></td>
				</tr>
				<?php
				}
			?>
		</table>
		<?php
		}
	?>
</div>