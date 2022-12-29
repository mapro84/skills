<?php
namespace src\app\Demo\facade;

use src\app\Demo\facade\QueryBuilder;

class Demo {

    private $factory;

    public static function demo(){
    	$queryBuilder = new QueryBuilder();
        $queryBuilder::sselect('id', 'name', 'description')->from('skill', 'capability')->where('capability.name = "PHP"')->where('capability.logo = "php.png"');
        echo '<pre><br><br>'.file_get_contents(__DIR__.'/QueryBuilder.php').'</pre>';
    	echo $queryBuilder->__toString();
    }
    
}

