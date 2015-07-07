<?php
	class seminerKayitYazdir extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function seminerKayitYazdir($q){
			$giris=@$_SESSION["giris"];
			if($giris){
				$data = $this->load->model($q[0])->veriler($q);
				$this->load->view($q[0],$data);
			}
			else{
				header("Location:".clk::site());
			}
		}
	}
?>