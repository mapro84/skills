<?php
namespace src\app\Demo\Factory;

class PizzaMargherita Implements Pizza{
	
	public function __construct(Bool $gluten=true, $shape){
	}
	
	public function made(){
		return 'Object '.__CLASS__;
	}
}
