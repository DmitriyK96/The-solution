<?php

class Сircle extends GeomFigure
{
	private $r;
	
	public function __construct()
	{
		$this->r = rand(1,10);
		$this->name = 'Сircle';

	}
	
	public function countArea()
	{
		$this->area = pi()*$this->r**2;
	}
	
	public function getArea()
	{
		return $this->area;
	}
}