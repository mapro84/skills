<?php
namespace src\app\Demo\interface;

use src\app\Demo\interface\Session;

use src\app\Demo\fluent\QueryBuilder;

class Demo {

    private $factory;

    public function demo(){
        $session = new Session();
        $session->set('user','mario');
        echo $session->get('user');
        var_dump(count($session));
    }
    
}

