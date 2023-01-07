<?php
namespace src\app;

use src\Core\DB\Entity;
use src\Core\DB\DB;

class Item extends Entity{

    public $name;
    public $urls;
    public $item_id;
    public $url;
    public $score;

    public static function search($parameters){
        $search = $parameters["search"] ?? null;
        if ($search === null)
            return [];
        $query = 'SELECT id, name, description, further, MATCH(name, description) against(?)
                 as score FROM item WHERE MATCH(name, description) 
                 against(?) ORDER BY `score` ASC;';
        $queryParams = [];
        array_push($queryParams,$search);
        array_push($queryParams,$search);
        return DB::prepare($query, $queryParams, get_called_class());
    }

}