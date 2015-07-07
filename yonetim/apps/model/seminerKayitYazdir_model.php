<?php
	class seminerKayitYazdirModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			if(@$q[1]){
				$id=clk::temizle($q[1]);
				$kontrol=$this->select("egitimseminerleri","id='$id'");
				if(count($kontrol)<1){
					echo $id;
					echo count($kontrol);
					header("Location:".clk::site()."/egitimSeminerkayitlari");
				}
				else{
					$data["liste"]=$this->select("egitimseminerkayit","seminerid='$id'","","ORDER BY id DESC");
				}
			}
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>