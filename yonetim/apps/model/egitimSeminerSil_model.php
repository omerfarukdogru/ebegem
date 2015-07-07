<?php
	class egitimSeminerSilModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			if(@$q[1]){
				$id=clk::temizle($q[1]);
				$bilgi=$this->select("egitimseminerleri","id='$id'");
				foreach($bilgi as $bilg){
					unlink("../images/".$resim);
				}
				$this->delete("egitimseminerleri","id='$id'");
			}
			$data["seminerler"]=$this->select("egitimseminerleri","","","");
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>