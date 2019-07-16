<?php

include('GeomFigure.php');
include('Rectangle.php');
include('Сircle.php');
include('Pyramid.php');
include('mySort.php');


$fd = fopen("figures.txt", 'w+');
// создание и записть объектов
for ($i = 0; $i<10; $i++) {
	$figure = GeomFigure::create(); 
	$figure->countArea();
	$str = serialize($figure);
	fwrite($fd,$str."\r\n");
}
fseek($fd,0);

//считывание объектов
while (!feof($fd)) {
	$str = fgets($fd);
	$figure_arr[] = unserialize($str);
}
fclose($fd);
unset($figure_arr[count($figure_arr)-1]);

usort($figure_arr, 'mySort');

print_r($figure_arr);



?>