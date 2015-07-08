<?php
	class hata extends controller{
		public function __construct($q){
			parent::__construct();
			$this->hata($q);
		}
		public function hata($q){
			$giris=@$_SESSION["giris"];
			$data["title"]="Hata Sayfası";
			$this->load->view("bas",$data);
			if($giris){
				$this->load->view("solMenu");
				
				$this->load->view("hata");
			}
		}
	}
?>