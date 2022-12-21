<?php
namespace src\app\Controller;

use src\app\Demo;
use src\app\Demo\factory\Demo as FactoryDemo;
use src\app\Demo\fluent\Demo as FluentDemo;

class DemoController extends AppController{
	
	public function show($demo_id) {
		$demo = Demo::find($demo_id,'demo');
		
		switch($demo->name){
			case 'factory':
				$factorydemo = new FactoryDemo();
				$demoContent = $factorydemo->demo();
			case 'fluent':
				$fluentDemo = new FluentDemo();
				$demoContent = $fluentDemo->demo();
			default:
				$demoContent = '';
		}
		$entities = array('demo' => $demo, 'demoContent' => $demoContent);
		$this->render('demo',$entities);
	}
}

