<?php

class Pyramid extends GeomFigure
{
	private $h;
	
	public function __construct(){
		$this->h = rand(1, 10);
		$this->name = 'Pyramid';

	}
	
	public function countArea(){
		$this->area = 0; // посчитать площдь нельзя
	}
	
	public function getArea(){
		return $this->area;
	}
}