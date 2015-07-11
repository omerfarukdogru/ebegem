<div class="body2">
	<div class="main">
		 <section id="content">
		<?php
			foreach($seminerBilgi as $seminer){
			?>
			<div class="egitimSeminer">
				<p class="pad_bot1 pad_top2"><strong><?php echo $seminer["seminerAdi"]; ?></strong></p>
				<p>
					<?php echo $seminer["detay"]; ?>
					<br />
					<a href="<?php echo clk::site(); ?>/seminerKayit/<?php echo $seminer["id"]; ?>">Seminere Kayıt Ol.</a>
				</p>
			</div>
			<?php
			}
		?>
		<div class="egitimSeminerResimler">
			<?php
				foreach($seminerResimler as $resim){
					if(@$resim["resim1"]){ ?> <div class="resim"><img src="<?php echo clk::site(); ?>/images/<?php echo $resim["resim1"]; ?>" /></div><?php }
					if(@$resim["resim2"]){ ?> <div class="resim"><img src="<?php echo clk::site(); ?>/images/<?php echo $resim["resim2"]; ?>" /></div><?php }
					if(@$resim["resim3"]){ ?> <div class="resim"><img src="<?php echo clk::site(); ?>/images/<?php echo $resim["resim3"]; ?>" /></div><?php }
					if(@$resim["resim4"]){ ?> <div class="resim"><img src="<?php echo clk::site(); ?>/images/<?php echo $resim["resim4"]; ?>" /></div><?php }
					if(@$resim["resim5"]){ ?> <div class="resim"><img src="<?php echo clk::site(); ?>/images/<?php echo $resim["resim5"]; ?>" /></div><?php }
				?>
				<?php
				}
			?>
		</div>
		</section>