<?php 
class Car{
private $model;
public function setModel($model)
{
$cars = array ("bmw", "volvo");
if(in_array($model, $cars))
{
	 $this->model = $model;
}
else {
	$this->model = "not found";
}
}
public function getModel(){
	return "the model car is ". $this->model ;
}
}
 
class Suportcar extends Car {
	
	public $model = "mercedes" ;
	
}

 $car = new Suportcar();
 $car->setModel("bmw");
 echo $car->getModel();

?>