<div class="kayitForm">
	<?php
		if(@$kaydedilen){
		echo $kaydedilen;
		?>
		 ismi kaydedildi <br />
		<?php
		}
	?>
	<form action="" method="post">
		<table>
			<tr>
				<td class="degisken">Ad Soyad</td>
				<td class="deger"><input type="text" name="adSoyad" /></td>
			</tr>
			<tr>
				<td class="degisken"></td>
				<td class="deger"><input type="submit" value="Kaydol" /></td>
			</tr>
		</table>
	</form>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$(".kayitForm").show();
	});
</script>