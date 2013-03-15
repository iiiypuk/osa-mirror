<?php
	function wget($osa_number) {
		$wget = 'wget -c --output-file "wget.log" "';
		exec($wget.'http://osa.samag.ru/get/OpenSource'.$osa_number.'" -O "OpenSource'.$osa_number.'.zip"');
	}

	function get() {
		global $osa;
		global $osa_end;

		for($a = 1; $osa_end >= $a; $a++) {
			if($a < 10) { array_push($osa, '00'.$a);	}
			elseif($a < 100) { array_push($osa, '0'.$a); }
			else { array_push($osa, $a); }
		}
	}

	$osa = array();
	$osa_end = 124;

	get();
	foreach ($osa as $a) {
		wget($a);
	}
