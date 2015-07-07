<div class="body2">
  <div class="main">
<section id="programDetayları">
      <div class="box1">
        <div class="wrapper">
			<?php
				foreach($detaylar as $detay){
				?>
				<article class="col1">
					<div class="pad_left1">
					  <h2 class="pad_bot1"><?php echo $detay["programAdi"]; ?></h2>
					</div>
					<div class="detaylar">
						<?php
							echo $detay["programdetay"];
						?>
						<br />
						<br />
						<a href="<?php echo clk::site(); ?>/kayit">Kayıt Olun</a>
					</div>
				</article>
				<?php
				}
			?>
          </div>
      </div>
    </section>
	</div>
	</div>