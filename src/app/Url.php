<?php
namespace src\app;

use src\Core\DB\Entity;
use src\Core\DB\DB;

class Url extends Entity{

    public static function findUrlsBy($id, $tableCategory){
        $query = "SELECT url.name, url.url FROM url INNER JOIN url_skill_item as usi ON usi.url_id = url.id WHERE usi.{$tableCategory}_id = ?";
    	$parameters = [$id];
    	return DB::prepare($query, $parameters, get_called_class());
    }

}