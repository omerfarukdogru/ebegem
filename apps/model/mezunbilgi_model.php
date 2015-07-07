<?php
	class mezunbilgiModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			if(clk::temizle(@$q[1]) and clk::temizle(@$q[1]>0)){
				$sayfa=@$q[1];
			}
			else{
				$sayfa=1;
			}
			$data["mezunlar"]=array();
			$start=($sayfa-1)*20;
			$finish=$sayfa*20;
			$data["mezunlarListe"] = $this->select("mezunbilgi","","","ORDER BY id DESC");
			$sayac=0;
			foreach($data["mezunlarListe"] as $mezun){
				if($sayac>=$start and $sayac<=$finish){
					array_push($data["mezunlar"],$mezun);
				}
				if($sayac>$finish){
					break;
				}
				$sayac++;
			}
			$data["sayfaSayi"]=count($data["mezunlarListe"])/20;
			settype($data["sayfaSayi"],"integer");
			$data["sayfaSayi"]++;
			$data["sayfa"]=$sayfa;
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>