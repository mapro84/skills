<?php
namespace src\app\Demo\fluent;

use src\app\Demo\fluent\QueryBuilder;

class Demo {

    private $factory;

    // Dependency injection
    public function __construct(){
    }
    
    public static function demo(){
    	$queryBuilder = new QueryBuilder();
        $queryBuilder->select('id', 'name', 'description')->from('skill', 'capability')->where('capability.name = "PHP"')->where('capability.logo = "php.png"');
        echo '<pre><br><br>'.file_get_contents(__DIR__.'/QueryBuilder.php').'</pre>';
    	echo $queryBuilder->__toString();
    }
    
}

