<div class="body2">
  <div class="main">
<section id="content">
      <div class="box1">
        <div class="wrapper">
          <article class="col1">
            <div class="pad_left1">
              <h2 class="pad_bot1">Ögretmenlerimiz</h2>
            </div>
			<?php
				foreach($ogretmenler as $ogretmen){
				?>
				<div class="wrapper pad_bot2">
				  <figure class="left marg_right1"><img src="<?php echo clk::doc(); ?>images/<?php echo $ogretmen["ogretmenResim"]; ?>" alt=""></figure>
				  <p class="pad_top2">
					<strong><?php echo $ogretmen["ogretmenAdi"]; ?></strong><br />
					<?php echo $ogretmen["ogretmenBilgileri"]; ?>
				  </p>
				</div>
				<?php
				}
			?>
          </article>
          <article class="col2 pad_left2">
            <div class="pad_left1">
              <h2>Programlarımız</h2>
            </div>
            <ul class="list1">
				<?php
					foreach($programlar as $program){
						extract($program);
						?>
					<li><a href="<?php echo clk::site()."/programdetay/".$id; ?>"><?php echo $programAdi; ?></a></li>	
						<?php
					}
				?>
            </ul>
            <div class="pad_left1">
              <h2>Duyurular</h2>
            </div>
			<?php
				foreach($duyurular as $duyuru){
					extract($duyuru);
					?>
			<div class="wrapper"> <span class="date"><?php echo $id; ?></span>
              <p class="pad_top2"><a href="<?php echo clk::site()."/duyurudetay/".$id; ?>"><?php echo $duyuruTarih; ?></a><br>
                <?php echo $duyuruBaslik; ?></p>
            </div>	
					<?php
				}
			?>
        </div>
      </div>
    </section>