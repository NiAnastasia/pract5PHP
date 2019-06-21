<?php 

/*Создать класс Point состоящий из пары целых чисел, соответствующих координатам x и y точки в декартовой системе координат. Реализовать конструктор, геттеры для х и y координат. А так же создать метод, который выводит координаты в формате: (x=12.3; y=23.2), только на чётные минуты. 
*/

class Point{
	private $coordX;
	private $coordY;

	public function __construct($x, $y){
		$this->coordX=$x;
		$this->coordY=$y;
	}

	public function getX(){
		return $this->x;
	}

	public function getY(){
		return $this->y;
	}

	public function setX($x){
		$this->coordX=$x;
	}

	public function setY($y){
		$this->coordY=$y;
	}

	public function coordinate(){
    	$minute = (int) date('i');
    	if ($minute % 2 === 0){
      		echo ('(x= '.round($this->coordX, 1).' y = '.round($this->coordY, 1).')');
    	}
  	}
}

$c = new Point(17, 10.78789);
$c->coordinate();
echo "<br>";
$b = new Point(16, 10);
$b->coordinate();