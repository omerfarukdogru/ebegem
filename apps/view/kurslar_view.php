<div class="body2">
  <div class="main">
    <!-- content -->
    <section id="content">
      <div class="box1">
        <div class="wrapper">
          <article class="col1">
            <div class="pad_left1">
              <h2 class="pad_bot1">Kurslar</h2>
            </div>
            <div class="wrapper pad_bot1">
              <figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
              <p class="pad_bot1 pad_top2"><strong>Ebegem Kursları</strong></p>
              <p>Ebegem</p>
            </div>
            <div class="pad_left1">
              <div class="box2">
                <div class="wrapper">
                  <div class="cols">
                    <ul class="list3">
						<?php
							foreach($kurslar as $kurs){
							?>
							<li><a href="<?php echo clk::site(); ?>/programDetay/<?php echo $kurs["id"]; ?>"><?php echo $kurs["programAdi"]; ?></a></li>
							<?php
							}
						?>
                    </ul>
                  </div>
                </div>
              </div>
              <p><strong>Gelecek  Sizindir. </strong></p>
            </div>
			</article>
        </div>
      </div>
    </section>