<?php
namespace src\app\Demo\Hint;

use ReflectionClass;
use src\app\Demo\Hint\Hint;
use src\Core\Html\BootstrapHtml;

class Demo {

    private static $name;

    public function __construct(){
      self::$name = "Hint";
    }

    public static function demo(): string
    {

        $class = new Hint();

        $classContent = htmlspecialchars(file_get_contents('src/app/Demo/Hint/Hint.php'));

        $bootstrapHtml = new BootstrapHtml('div','col demoBody', true);

        $title = $bootstrapHtml->addTitle(self::$name.' Class:');
        $bootstrapHtml->addData($title);
        $bootstrapHtml->addDiv();
        $bootstrapHtml->addData($classContent);
        $bootstrapHtml->endDiv();
        
        $bootstrapHtml->addLine(1);
        $title = $bootstrapHtml->addTitle('Usage Code:');
        $bootstrapHtml->addData($title);
        $bootstrapHtml->addDiv();
        $bootstrapHtml->addData('$hint->add(5,3);');
        $content = $class->add(5,3);
        $bootstrapHtml->addData($bootstrapHtml->addResult($content));
        $bootstrapHtml->endDiv();

        $bootstrapHtml->addDiv();
        $bootstrapHtml->addData('$hint->add(5,"3");');
        $content = $class->add(5,"3");
        $bootstrapHtml->addData($bootstrapHtml->addResult($content));
        $bootstrapHtml->addData($bootstrapHtml->addComment('Convert "3" from float to integer'));
        $bootstrapHtml->endDiv();


        $bootstrapHtml->endData();
        return $bootstrapHtml->getData();
    }
    
}

