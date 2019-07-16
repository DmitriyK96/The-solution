<?php
function fibonacci($n)
{
	$nn = 0;
	$n0 = 0;
	$n1 = 1;

	while ($nn <= $n ){
		switch ($nn) {
			case 0:
				$r = $n0;
				break;
			case 1:
				$r = $n1;
				break;
			default:	
				$r = $n0 + $n1;
				$n0 = $n1;
				$n1 = $r;
			}
			echo 'Номер '.$nn.' Значение '.$r;
			echo "<br>";
			$nn++;
	}
}

fibonacci(64);
?>