<?php
#C9521D
#E75F23
#EFE2CD
function csvconvert($directory,$tipe="array"){
	$b=explode("\n",file_get_contents($directory));
	for($i=1;$i<=count($b)-1;$i++){
		$d=explode(";",$b[$i]);
		$z=0;
		if(isset($b[$i][0])){
			foreach(explode(";",$b[0]) as $isi){
					$data[$i][str_replace(array("\n", "\r"), '', $isi)]= str_replace(array("\n", "\r"), '', $d[$z]);
			$z++;
			}
		}
	}
	if($tipe=="json"){
		return json_encode($data);
	}else{
		return $data;
	}
}
//DEMO
//echo(csvconvert("tmp-siswa.csv","json"));
//print_r(csvconvert("tmp-siswa.csv"));
?>