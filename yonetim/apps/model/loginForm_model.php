<?php
	class loginFormModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			return $data;
		}
		function loginKontrol($kadi,$sifre){
			return count($this->select("adminbilgileri","kullaniciAdi='$kadi' and sifre='$sifre'"));
		}
		public function __destruct(){
			$db=null;
		}
	}
?>