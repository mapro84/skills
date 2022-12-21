<?php
namespace src\app\Demo\fluent;

use src\app\Demo\fluent\Sql;

class Demo {

    private $factory;

    // Dependency injection
    public function __construct(){
    }
    
    public function demo(){
    	$sql = new Sql([]);
    	echo 'fluent demo';
    }
    
}

