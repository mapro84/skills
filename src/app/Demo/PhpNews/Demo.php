<?php
namespace src\app\Demo\PhpNews;
use src\Core\Html\BootstrapHtml;

class Demo
{

  public function demo()
  {
    $bootstrapHtml = new BootstrapHtml('div', 'col demoBody', true);

    $bootstrapHtml->addTitle('Class PhpNews:');
    $data = htmlspecialchars(file_get_contents('src/app/Demo/PhpNews/PhpNews.php'));
    $bootstrapHtml->addDiv();
    $bootstrapHtml->addData($data);
    $bootstrapHtml->endDiv();

    $bootstrapHtml->addTitle('Code Usage:');
    $bootstrapHtml->addDiv();
    $data = '
    As you can see in the constructor PhpNews class, 
    the type and property can be directly set in parameters
    <a target="_blank" href="https://kinsta.com/fr/blog/php-8/#constructor-property-promotion">constructor-property-promotion</a>
    <a target="_blank" href="https://wiki.php.net/rfc/constructor_promotion">RFC constructor-property-promotion</a>
    

    <a target="_blank" href="https://kinsta.com/fr/blog/php-8/#named-arguments">Named Arguments</a>
    <a target="_blank" href="https://wiki.php.net/rfc/named_params">RFC Named Arguments</a>
    $string = \'This is some <b>bold</b> text. \';
    // Below an example with named argument double_encode
    echo htmlspecialchars($string, double_encode: false);
    echo $string; // This is some <b>bold</b> text.
    
    // Named Arguments are based on the parameters name in the targeted function
    $phpNews = new PhpNews(50);
    $result = $phpNews?->add(number1: "12", number2: "65"); 
    echo $result; // 77   


    <a target="_blank" href="https://kinsta.com/fr/blog/php-8/#nullsafe-operator">NullSafe Operator</a>
    <a target="_blank" href="https://wiki.php.net/rfc/nullsafe_operator">RFC NullSafe Operator</a>
    $testClass = new PhpNews();
    $result = $testClass?->add("12","56"); 
    echo $result; // 68 - But if $phpNews is not set => Warning: Undefined variable $phpNews in ...
    
    
    <a target="_blank" href="https://kinsta.com/fr/blog/php-8/#string-to-number-comparison">Saner string to number comparisons</a>
    <a target="_blank" href="https://wiki.php.net/rfc/string_to_number_comparison">RFC Saner string to number comparisons</a>
    $validValues = ["foo", "bar", "baz","0Something"];
    $value = 0;
    var_dump(in_array($value, $validValues)); // False

    $validValues = ["foo", "bar", "baz","   0"];
    $value = 0;
    var_dump(in_array($value, $validValues)); // True


    <a target="_blank" href="https://kinsta.com/fr/blog/php-8/#get_debug_type">New function get_debug_type()</a>
    <a target="_blank" href="https://wiki.php.net/rfc/get_debug_type">RFC get_debug_type() function</a>
    // Looks like gettype(). Plus he returns native type names and resolve class names.
    $phpNews = new \stdClass();
    if (!($phpNews instanceof PhpNews)) { 
      throw new \TypeError("Expected " . Foo::class . ", got " . (is_object($phpNews) ? get_class($phpNews) : gettype($phpNews)));
    }
    ';
    $bootstrapHtml->addData($data);
    $bootstrapHtml->addResult('Fatal error: Uncaught TypeError: Expected Foo, got stdClass');
    $data = '

    $phpNews = new \stdClass();
    if (!($phpNews instanceof PhpNews)) { 
      // Smaller instructions thank this new function
      throw new \TypeError("Expected " . Foo::class . " got " . get_debug_type($phpNews));
    }
    Fatal error: Uncaught TypeError: Expected Foo got stdClass 
    ';
    $bootstrapHtml->addData($data);
    $bootstrapHtml->addResult('Fatal error: Uncaught TypeError: Expected Foo, got stdClass');
    $bootstrapHtml->endDiv();

    
    $bootstrapHtml->endData();
    return $bootstrapHtml->getData();

  }

}