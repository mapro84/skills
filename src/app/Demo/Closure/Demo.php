<?php
namespace src\app\Demo\Closure;

class Demo {

public function demo(){

echo '<h1>CLOSURE DEMO</h1>';

echo '<h3><pre>'.
    '$anonymous = function(){};

    var_dump($anonymous);
    </pre>';

    $anonymous = function(){};
    var_dump($anonymous);
    echo '<br>';
    echo '<br>';
    
    echo '<pre>
    if ($anonymous instanceOf Closure)
    {
        echo "Une fonction anonyme est une instance de la classe Closure";
    }'.
    '</pre>';

    if ($anonymous instanceOf \Closure)
    {
        echo 'Une fonction anonyme est une instance de la classe Closure';
    }
    echo '<br>';
    
    //=============================================================//

    echo '<pre>'.
    'function multiplierFactory($multiplier)
    {
            return function($number) use($multiplier)
            {
                    return $number * $multiplier;
            };
    }
    
    $f = multiplierFactory(2);
    echo $f(5); // 10
    echo $f(6); // 12
    
    $f = multiplierFactory(3);
    echo $f(5); // 15
    echo $f(6); // 18
    </pre>';    

    $f = $this->multiplierFactory(2);
    echo '$f(5) ==> ' . $f(5); // 10
    echo '<br>$f(6) ==> ' . $f(6); // 12

    $f = $this->multiplierFactory(3);
    echo '<br>$f(5) ==> ' . $f(5); // 15
    echo '<br>$f(6) ==> ' . $f(6); // 18
                echo '</h3>';
}

function multiplierFactory($multiplier)
{
        return function($number) use($multiplier)
        {
                return $number * $multiplier;
        };
}

}