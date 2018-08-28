<?php
	echo "TRABALHE SEM PARAR <br>";
	$func= array('Mateus', 'Maria', 'Carlos');
	$salInic= array(2000, 1500, 1000);

	//100 reais por hora extra
	//reduz 10 pros que nao fizeram

	$horaEx=2;
	$nome = 'Mateus';

	switch($nome){
		case 'Mateus':
			$salInic[0]+=($horaEx * 100);
			$salInic[1]-=($horaEx * 10);
			$salInic[2]-=($horaEx * 10);
			break;
		case 'Maria':
			$salInic[1]+= ($horaEx * 100);
			$salInic[0]-= ($horaEx * 10);
			$salInic[2]-= ($horaEx * 10);
			break;
		case 'Carlos':
			$salInic[2]+= ($horaEx * 100);
			$salInic[0]-= ($horaEx * 10);
			$salInic[1]-= ($horaEx * 10);
			break;
	}
	echo "$func[0] R$ $salInic[0] <br>";
	echo "$func[1] R$ $salInic[1] <br>";
	echo "$func[2] R$ $salInic[2] <br>";

?>