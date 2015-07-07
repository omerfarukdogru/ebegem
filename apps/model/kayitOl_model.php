<?php
	class kayitOlModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			if($_POST){
				$programlar = array();
				foreach($_POST["program"] as $program){
					array_push($programlar,$program);
				}
				clk::formVeriDuzelt();
				$tc = @$_POST["tc"];
				$ad = @$_POST["ad"];
				$soyad = @$_POST["soyad"];
				$cinsiyet = @$_POST["cinsiyet"];
				switch($cinsiyet){
					case "E":
						$cinsiyet="ERKEK";
						break;
					case "K":
						$cinsiyet="KADIN";
						break;
					default:
						$cinsiyet="ERKEK";
						break;
				}
				$meslek = @$_POST["meslek"];
				$dogumYeri = @$_POST["dogumYeri"];
				$dGun = @$_POST["gun"];
				$dAy = @$_POST["ay"];
				$dYil = @$_POST["yil"];
				$ogrenimDurum = @$_POST["ogrenimDurum"];
				$adres = @$_POST["adres"];
				$ilce = @$_POST["ilce"];
				switch($ilce){
					case 1:
						$ilce="ALACAKAYA";
						break;
					case 2:
						$ilce="ARICAK";
						break;
					case 3:
						$ilce="AĞIN";
						break;
					case 4:
						$ilce="BASKİL";
						break;
					case 5:
						$ilce="ELAZIĞ(MERKEZ)";
						break;
					case 6:
						$ilce="KARAKOÇAN";
						break;
					case 7:
						$ilce="KEBAN";
						break;
					case 8:
						$ilce="KOVANCILAR";
						break;
					case 9:
						$ilce="MADEN";
						break;
					case 10:
						$ilce="PALU";
						break;
					case 11:
						$ilce="SİVRİCE";
						break;
					default:
						$ilce="ELAZIĞ(MERKEZ)";
						break;
				}
				$telefon = @$_POST["telefon"];
				$email = @$_POST["email"];
				$this->insert(
					"onkayit",
					"id,tc,ad,soyad,cinsiyet,meslek,dogumYeri,dGun,dAy,dYil,ogrenimDurum,adres,ilce,telefon,email",
					"'','$tc','$ad','$soyad','$cinsiyet','$meslek','$dogumYeri','$dGun','$dAy','$dYil','$ogrenimDurum','$adres','$ilce','$telefon','$email'"
				);
				$onKayitId=$this->lastInsertId();
				for($i=0;$i<count($programlar);$i++){
					$program=$this->select("programlar","id='$programlar[$i]' and aktif='1'");
					foreach($program as $prog){
						$programAdi = $prog["programAdi"];
					}
					$this->insert("onkayitdigerbilgiler","onkayitid,programAdi","'$onKayitId','$programAdi'");
				}
				header("Location:".clk::site()."/kayitBasarili");
			}
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>