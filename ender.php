<?php 
	function parse($ang){ //in degree
		if($ang > -90){
			$ang += 90;
		}else if($ang < -90){
			$ang += 450;
		}
		return deg2rad($ang);
	}

	function find($x0, $z0, $ang0, $x1, $z1, $ang1){
		$s0 = tan(parse($ang0)); //inclinaçao 1
		$s1 = tan(parse($ang1)); // inclinaçao 2
		$x = round(($z1 - $z0 + $s0*$x0 - $s1*$x1)/($s0 - $s1), 1); 
		$z = round($s0*$x + $z0 - $s0*$x0, 1);
		return "X: $x, Z: $z<br>";
	}
	echo find(-1000, 700, 8.2, -800, 700, 32.3);
?>
