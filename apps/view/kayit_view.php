<div class="kayitForm">
	<form action="<?php echo clk::site(); ?>/kayitOl" method="post">
		<table>
			<tr>
				<td class="degisken">T.C. Kimlik No</td>
				<td class="deger"><input type="text" name="tc" /></td>
			</tr>
			<tr>
				<td class="degisken">Ad</td>
				<td class="deger"><input type="text" name="ad" /></td>
			</tr>
			<tr>
				<td class="degisken">Soyad</td>
				<td class="deger"><input type="text" name="soyad" /></td>
			</tr>
			<tr>
				<td class="degisken">Cinsiyet</td>
				<td class="deger">
					<select name="cinsiyet">
						<option value="E">Erkek</option>
						<option value="K">Kadın</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="degisken">Mesleğiniz</td>
				<td class="deger"><input type="text" name="meslek" /></td>
			</tr>
			<tr>
				<td class="degisken">Doğum Yeri</td>
				<td class="deger"><input type="text" name="dogumYeri" /></td>
			</tr>
			<tr>
				<td class="degisken">Doğum Tarihi</td>
				<td class="deger">
					<select name="gun">
						<?php
							for($i=1;$i<=31;$i++){
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php
							}
						?>
					</select>
					 / 
					<select name="ay">
						<?php
							for($i=1;$i<=12;$i++){
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php
							}
						?>
					</select>
					<select name="yil">
						<?php
							
							for($i=1930;$i<=date("Y")-18;$i++){
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td class="degisken">Öğrenim Durumunuz</td>
				<td class="deger">
					<select name="ogrenimDurum">
						<option value="1">İlkOkul</option>
						<option value="2">Lise</option>
						<option value="3">Üniversite</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="degisken">Adres Bilgileri</td>
				<td class="deger"><textarea name="adres"></textarea></td>
			</tr>
			<tr>
				<td class="degisken">İlçeniz</td>
				<td class="deger">
					<select name="ilce">
						<option value="1">ALACAKAYA</option>
						<option value="2">ARICAK</option>
						<option value="3">AĞIN</option>
						<option value="4">BASKİL</option>
						<option value="5">ELAZIĞ(MERKEZ)</option>
						<option value="6">KARAKOÇAN</option>
						<option value="7">KEBAN</option>
						<option value="8">KOVANCILAR</option>
						<option value="9">MADEN</option>
						<option value="10">PALU</option>
						<option value="11">SİVRİCE</option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="degisken">Telefon</td>
				<td class="deger"><input type="text" name="telefon" placeholder="+90" /></td>
			</tr>
			<tr>
				<td class="degisken">Email Adresiniz</td>
				<td class="deger"><input type="text" name="email" /></td>
			</tr>
			<tr>
				<td class="degisken">Alınacak Ders(ler)</td>
				<td class="deger">
					<?php
						foreach($programlar as $program){
						?>
						<input type="checkbox" name="program[]" value="<?php echo $program["id"]; ?>" id="<?php echo $program["id"]; ?>" /> <label for="<?php echo $program["id"]; ?>"><?php echo $program["programAdi"]; ?></label><br />
						<?php
						}
					?>
				</td>
			</tr>
			<tr>
				<td class="degisken"></td>
				<td class="deger"><input type="submit" value="Kaydol" /></td>
			</tr>
		</table>
	</form>
</div>
<div class="onBilgiDiv">
	<div class="onBilgi">
		1. Elektronik ortamda Dolduracağınız bu form ön başvuru olarak kaydedilmektedir.
		<br />
		2. Ön başvuru formu dolduran kursiyer adaylara başvuruda bulundukları kurs açılmadan önce formda belirttikleri cep telefonuna SMS yolu ile kurs kesin kayıt işlemleri için yapılacak toplantıya çağrı mesajı gönderilecektir.
		<br />
		3. SMS ile belirtilen toplantıya katılmayan adaylar elektronik ortamda form doldurmuş olsalar dahi kursa kesin kayıt işlemi yapılmayacaktır.
		<br />
		Kurslarımız e yaygın  sisteminde kayıtlı olduğundan başlayan bir kursa yeni kursiyer kesinlikle eklenemez.Toplantıya mutlaka katılarak adayların kurs öğreticisine kayıt için gerekli bilgilerini vermeleri gerekmektedir.
		<br />
		4. Elektronik ortamda form dolduran adaylara gönderilen mesajların ulaşmaması adayların sorumluluğundadır.Kayıtlı telefon numaralarına  Merkezimizce mesaj gönderilmektedir.
		<br />
		5. Ön başvuru formu dolduranlar sıraya alınmakta olup.Kurs açıldıkça yeter kursiyer sayısı kadar aday toplantıya çağrılmaktadır.
		<br />
		6. Talep fazla olan  ve süresi uzun olan kurslarda adayların kursa çağrılmak için bekleme süreleri uzayabilmektedir.
		<br />
		Örnek. Bilgisayar kullanımı kurslarına yoğun talep olduğundan ve sınıflarımızda12 şer kişiye eğitim verilip bir kursun 2 ay sürdüğü göz önüne alındığında adaylar form doldurduktan sonra sıralarının gelmesi süreci uzayabilir. 
		<br />
		7. Kurslarımızın devam zorunluluğu vardır.Devam sınırını aşmayan ve değerlendirmelerden başarılı olanlar, kurs sonunda M.E.B onaylı
		sertifika almaya hak kazanırlar.Devamsızlık ya da modül bazında başarısızlık nedeniyle sertifika alamayanlar, transkript alarak aynı kursa tekrar başvurarak devamsız yada başarısız oldukları modülleri alarak tamamlayabilirler.
		<br />
		8.Telefondan ön başvuru alınmamaktadır.
		
		
		
		
		<div class="kabulEdiyorum">
			Kabul Ediyorum
		</div>
	</div>
</div>