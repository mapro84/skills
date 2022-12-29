<?php
namespace src\app\Demo\facade;

class QueryBuilder implements \Stringable {
	
	private $fields = [];
    private $conditions = [];
    private $from = [];

    public static function __callStatic($method,$arguments)
    {
      // Note: value of $name is case sensitive.
      echo "Calling static method '$method' ".implode(',',$arguments)."\n";
      var_dump($method,$arguments);
      $methodToCall = preg_replace('/static_/', '', $method);
      return call_user_func_array(['src\app\Demo\facade\QueryBuilder', $methodToCall], $arguments);
    }

    public function select(){
        $this->fields = func_get_args();
        return $this;
    }

    public function where(){
        foreach(func_get_args() as $arg){
            $this->conditions[] = $arg;
        }
        return $this;
    }

    public function from($table, $alias = null){
        if(is_null($alias)){
            $this->from[] = $table;
        }else{
            $this->from[] = "$table AS $alias";
        }
        return $this;
    }

    public function __toString(){
        return 'SELECT '. implode(', ', $this->fields)
            . ' FROM ' . implode(', ', $this->from)
            . ' WHERE ' . implode(' AND ', $this->conditions);
    }
	
}