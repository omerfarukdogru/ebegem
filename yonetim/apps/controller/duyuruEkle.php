<?php
	class duyuruEkle extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function duyuruEkle($q){
			$giris=@$_SESSION["giris"];
			$this->load->view("bas");
			if($giris){
				$this->load->view("solMenu");
				$data = $this->load->model("duyuruEkle")->veriler($q);
				$this->load->view("duyuruEkle",$data);
			}
			else{
				header("Location:".clk::site());
			}
			$this->load->view("son");
		}
	}
?>