<?php

abstract class GeomFigure
{
	protected $area;	
	protected $name;	

	public static function create()
	{
		switch (rand(0,2)) {
			case 0:
				return new Rectangle();
			case 1:
				return new Сircle();
			case 2:
				return new Pyramid();
			
		}
	}
		
	abstract public function countArea();

	abstract public function getArea();
}