<?php
	class egitimSeminerkayitlari extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function egitimSeminerkayitlari($q){
			$giris=@$_SESSION["giris"];
			$data["title"]="Eğitim Seminer Kayıtları";
			$this->load->view("bas",$data);
			if($giris){
				$this->load->view("solMenu");
				$data = $this->load->model($q[0])->veriler($q);
				$data["q"]=$q;
				$this->load->view($q[0],$data);
			}
			else{
				header("Location:".clk::site());
			}
			$this->load->view("son");
		}
	}
?>