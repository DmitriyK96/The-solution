<?php

class Rectangle extends GeomFigure
{
	private $a;
	private $b;
	
	public function __construct()
	{
		$this->a = rand(1,10);
		$this->b = rand(1,10);
		$this->name = 'Rectangle';
	}
	
	public function countArea()
	{
		$this->area = $this->a*$this->b;
	}
	
	public function getArea()
	{
		return $this->area;
	}
}