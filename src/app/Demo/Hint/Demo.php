<?php
namespace src\app\Demo\DIC;

use ReflectionClass;
use src\app\Demo\DIC\Connection;
use src\app\Demo\DIC\Model;
use src\app\Demo\DIC\DIC;
use src\Core\Html\BootstrapHtml;

class Demo {

    private $factory;

    public static function demo(): string
    {

        $dic = new DIC();
        $connection = new Connection('dbname', 'root', 'root');
        // return always the same instance
        $dic->set('Connection', function () use ($connection) {
            return $connection;
        });
        // return different instances
        $dic->setFactory('Model', function () use ($dic) {
            return new Model($dic->getInstance('Connection'));
        });

        $dic->set('Model', function () use ($connection) {
            return $connection;
        });

        $dicClass = htmlspecialchars(file_get_contents('src/app/Demo/DIC/DIC.php'));
        $connectionClass = htmlspecialchars(file_get_contents('src/app/Demo/DIC/Connection.php'));
        $modelClass = htmlspecialchars(file_get_contents('src/app/Demo/DIC/Model.php'));

        $bootstrapHtml = new BootstrapHtml('div','col demoBody','h3','h7', 'hr', true);

        $title = $bootstrapHtml->getTitle('DIC Class:');
        $bootstrapHtml->fillData($title);
        $bootstrapHtml->fillData($dicClass);

        $bootstrapHtml->addSeparator();
        $title = $bootstrapHtml->getTitle('Connection Class:');
        $bootstrapHtml->fillData($title);
        $bootstrapHtml->fillData($connectionClass);

        $bootstrapHtml->addSeparator();
        $title = $bootstrapHtml->getTitle('Model Class:');
        $bootstrapHtml->fillData($title);
        $bootstrapHtml->fillData($modelClass);

        $bootstrapHtml->addSeparator();
        $title = $bootstrapHtml->getTitle('Usage Code:');
        $bootstrapHtml->fillData($title);
        $bootstrapHtml->fillData('$dic = new DIC();
        $connection = new Connection("dbname", "root", "root");

        // return always the same instance
        $dic->set("Connection", function () use ($connection) {
            return $connection;
        });

        // return different instances
        $dic->setFactory("Model", function () use ($dic) {
            return new Model($dic->get("Connection"));
        });');
        
        $bootstrapHtml->addSeparator();
        $title = $bootstrapHtml->getTitle('Results:');
        $bootstrapHtml->fillData($title);

        $bootstrapHtml->addSeparator();
        $title = $bootstrapHtml->getTitle('Object returned by $dic->get(Connection"):');
        $bootstrapHtml->fillData($title);
        $content = print_r($dic->getInstance('Connection'), true);
        $bootstrapHtml->fillData($content);

        $bootstrapHtml->addSeparator();
        $title = $bootstrapHtml->getTitle('Object returned by  $dic->get("Model"):');
        $bootstrapHtml->fillData($title);
        $content = print_r($dic->getFactory('Model'), true);
        $bootstrapHtml->fillData($content);

        $bootstrapHtml->addSeparator();
        $title = $bootstrapHtml->getTitle('Object returned by $instance = $dic->get("Connection"):');
        $bootstrapHtml->fillData($title);
        $instance = $dic->getInstance('Connection');
        $content = print_r($instance, true);
        $bootstrapHtml->fillData($content);

        $bootstrapHtml->endData();

        return $bootstrapHtml->getData();
    }
    
}

