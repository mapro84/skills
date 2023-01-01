<?php
namespace src\app\Demo\factory;

use src\app\Demo\factory\Shape;

class PizzaFactory {
	

	public function __construct(){
	}
	
	public function getPizza(String $pizzaType): Pizza | null {
		
		$shape = new Shape('circle');
		
		if($pizzaType === null){
			return null;
		}
		if($pizzaType === "chorizo"){
			$class_name = "\\src\\app\\Demo\\factory\\" . "Pizza" .  ucfirst($pizzaType);
			return new $class_name;
			
		} if($pizzaType === "3Cheese"){
			$class_name = "\\src\\app\\Demo\\factory\\" . "Pizza" . ucfirst($pizzaType);
			return new $class_name;
			
		} if($pizzaType === "margherita"){
			$class_name = "\\src\\app\\Demo\\factory\\" . "Pizza" . ucfirst($pizzaType);
			return new  $class_name(false,$shape);
		}
        return null;
	}

	
}

