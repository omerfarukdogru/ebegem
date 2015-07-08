<?php
	class yoneticiIslemleriModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			if($_POST){
				$kullaniciAdi = $_SESSION["kullaniciAdi"];
				$eskiSifre = @$_POST["eskiSifre"];
				$yeniSifre = @$_POST["yeniSifre"];
				$yeniSifreTekrar = @$_POST["yeniSifreTekrar"];
				if(count($this->select("adminbilgileri","kullaniciAdi='$kullaniciAdi' and sifre='$eskiSifre'"))>0){
					if($yeniSifre===$yeniSifreTekrar){
						$this->update("adminbilgileri","sifre='$yeniSifre'","kullaniciAdi='$kullaniciAdi'");
						header("Location:".clk::site()."/cikis");
					}
					else{
						$data["hata"]=1;
					}
				}
				else{
					$data["hata"]=2;
				}
			}
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>