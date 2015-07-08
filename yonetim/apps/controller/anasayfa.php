<?php
	class anasayfa extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function anasayfa($q){
			$giris=@$_SESSION["giris"];
			$this->load->view("bas");
			if($giris){
				$this->load->view("solMenu");
			}
			else{
				$a=$this->load->model("loginForm");
				if($_POST){
					$kontrol=$a->loginKontrol(@$_POST["kadi"],@$_POST["sifre"]);
					if($kontrol>0){
						$_SESSION["giris"]=true;
						$_SESSION["kullaniciAdi"]=$_POST["kadi"];
						header("Location:".clk::site()."/anasayfa");
					}
				}
				else{
					$data=$a->veriler($q);
				}
				$this->load->view("loginForm");
			}
			$this->load->view("son");
		}
	}
?>