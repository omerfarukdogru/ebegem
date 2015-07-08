<?php
	class tumOnKayitlarYazdir extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function tumOnKayitlarYazdir($q){
			$giris=@$_SESSION["giris"];
			if($giris){
				$data = $this->load->model($q[0])->veriler($q);
				$data["q"]=$q;
				$this->load->view($q[0],$data);
			}
			else{
				header("Location:".clk::site());
			}
		}
	}
?>