<div class="body2">
	<div class="main">
		<?php
			if($hata){
			?>
			<span class="iletisimBasarisiz">İletiniz Gönderilemedi. Lütfen aşağıdaki alanları yeniden doldurun</span>
			 <section id="content">
      <div class="box1">
        <div class="wrapper">
          <article class="col1">
            <div class="pad_left1">
              <h2>ILETISIM FORM</h2>
              <form id="ContactForm" action="<?php echo clk::site(); ?>/iletisimGonder" method="post">
                <div>
                  <div  class="wrapper"> <strong>Ad Soyad:</strong>
                    <div class="bg">
                      <input type="text" class="input" name="adSoyad" >
                    </div>
                  </div>
                  <div  class="wrapper"> <strong>Email:</strong>
                    <div class="bg">
                      <input type="text" class="input" name="email">
                    </div>
                  </div>
                  <div  class="textarea_box"> <strong>Mesaj:</strong>
                    <div class="bg">
                      <textarea cols="1" rows="1" name="mesaj"></textarea>
                    </div>
                  </div>
                  <input type="submit" value="Gönder" class="button" />
              </form>
            </div>
          </article>
        </div>
      </div>
    </section>
			<?php
			}
			else{
			?>
			<span class="iletisimBasarili">İletiniz başarıyla gönderildi. </span>
			<?php
			}
		?>