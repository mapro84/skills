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
        $query = 'SELECT i.id, i.name, i.description, i.further, u.name as urlname, u.url 
        FROM item as i 
        LEFT OUTER JOIN url_skill_item as link ON i.id = link.item_id 
        LEFT OUTER JOIN url as u ON u.id = link.url_id
        WHERE MATCH(i.name,i.description,i.further) against(?);';
        $queryParams = [];
        array_push($queryParams,$search);
        return DB::prepare($query, $queryParams);
    }

}