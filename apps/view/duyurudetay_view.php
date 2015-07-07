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
					  <h2 class="pad_bot1"><?php echo $detay["duyuruBaslik"]; ?></h2>
					</div>
					<div class="detaylar">
						<?php
							echo $detay["duyurudetay"];
						?>
						<br />
						<br />
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