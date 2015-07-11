<div class="body2">
  <div class="main">
    <!-- content -->
    <section id="content">
      <div class="box1">
        <div class="wrapper">
          <article class="col1">
            <div class="pad_left1">
              <h2>Merkezimize hoşgeldiniz.</h2>
              <p class="font2">EBEGEM HİZMET SAYFASI</p>
              <p><strong>EBEGEM</strong> Hizmet linklerimiz <a href="<?php echo clk::site(); ?>/ogretmenler">Öğretmenler</a>, <a href="<?php echo clk::site(); ?>/kurslar">Kurslar</a>, <a href="<?php echo clk::site(); ?>/kayit">Kayıt</a>, <a href="<?php echo clk::site(); ?>/mezunbilgi">Mezun Bilgi Sistemi</a> <a href="<?php echo clk::site(); ?>/iletisim">İletişim</a> 
               </p>
            </div>
            <div class="pad_left1">
              <h2>Egitim seminerlerimiz </h2>
            </div>
            <div class="wrapper">
				<?php
					foreach($seminerler as $seminer){
				?>
				<div class="egitimSeminer">
					<figure class="left marg_right1">
						<img src="<?php echo clk::site(); ?>/images/<?php echo $seminer["resim"]; ?>" alt="">
					</figure>
					<p class="pad_bot1 pad_top2"><strong><?php echo $seminer["seminerAdi"]; ?></strong></p>
					<p>
						<?php echo substr($seminer["detay"],0,50); ?>
						<br />
						<a href="<?php echo clk::site(); ?>/seminerDetay/<?php echo $seminer["id"]; ?>">Seminer Detayları.</a>
					</p>
				</div>
					<?php
					}
				?>
            </div>
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
          </article>
        </div>
      </div>
    </section>
    <!-- content -->