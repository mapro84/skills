<?php
namespace src\app\Controller;

use src\app\Demo;
use src\app\Demo\factory\Demo as FactoryDemo;
use src\app\Demo\fluent\Demo as FluentDemo;
use src\app\Demo\DIC\Demo as DICDemo;
use src\app\Demo\Closure\Demo as ClosureDemo;

class DemoController extends AppController{

	/**
	 * 
	 * To test
	 * @return void
	 */
	public function showAll()
	{
		// $dicdemo = new DICDemo();
        // $dicdemo->demo();

		$closuredemo = new ClosureDemo();
        $closuredemo->demo();
	}

	public function show($demo_id) {
		$demo = Demo::find($demo_id,'demo');
		$demoContent = '';
		// switch($demo->name){
		// 	case 'Factory':
		// 		$factorydemo = new FactoryDemo();
		// 		$demoContent = $factorydemo->demo();
		// 	case 'Fluent':
		// 		$fluentDemo = new FluentDemo();
		// 		$demoContent = $fluentDemo->demo();
		// 	case 'Dependency Injection':
		// 		$DicDemo = new DICDemo();
		// 		$demoContent = $DicDemo->demo();
		// 		echo $demoContent.'marioooooooooooooooooooooooooooooo';
		// 	default:
		// 		$demoContent = '';
		// }
		if($demo->name === 'Dependency Injection'){
			$DicDemo = new DICDemo();
			$demoContent = $DicDemo->demo();
		}

		$entities = array('demo' => $demo, 'demoContent' => $demoContent);
		$this->render('demo',$entities);
	}
}

