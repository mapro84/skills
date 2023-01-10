<?php
namespace src\app\Controller;

use src\app\Item;
use src\app\Url;
use src\Core\Utils\Debug;
use src\Core\Utils\Check;
use src\Core\DB\Entity;

class ItemController extends AppController{
	
	private $skillController;
	
	public function __construct(){
		parent::__construct();
		$this->skillController = new SkillController();
	}

	public function search() {
		$parameters = Check::makeSafeAssociativeArray($_POST);
		$items = Item::search($parameters);
		$relatedUrls = $this->getRelatedUrls($items);
		$demos = $this->getDemos($items);
		$skillLogos = $this->getLogos($items);
		$entities = array('items' => $items,'demos' => $demos,
		                  'skillLogos'=>$skillLogos,'relatedUrls'=>$relatedUrls);
		$this->render('items',$entities);
	}

  public function getRelatedUrls(mixed $items): array{
		$relatedUrls = [];
		foreach($items as $item){
			if(!empty($item['urlname'])){
				$url = array('urlname' => $item['urlname'],'url' => $item['url']);
			  array_push($relatedUrls, $url);
			}
		}
		return $relatedUrls;
	}

	public function getDemos(mixed $items): array{
		$demos = [];
		foreach($items as $item){
			if(!empty($item['dname'])){
				$demo = array('did' => $item['did'],'dname' => $item['dname'],'ddescription' => $item['ddescription']);
			  array_push($demos, $demo);
			}
		}
		return $demos;
	}

	public function getLogos(mixed $items): array{
		$logos = [];
		foreach($items as $item){
			if(!empty($item['skillname']) && !isset($logos[$item['skillname']])){
			  $logos[$item['skillname']]= $item['logo'];
			}
		}
		return $logos;
	}

	public function show($item_id,$skill_name) {
		$item = Item::find($item_id,'item');
		$demos = Item::findBy('demo',$item_id,'item');
		$urls = Url::findUrlsBy($item_id,'item');
 		$entities = array('item' => $item, 'demos' => $demos,'urls'=>$urls,'skill_name' => $skill_name);
 		$this->render('item',$entities);
	}

	public function add(){
		$parameters = Check::makeSafeAssociativeArray($_POST);
		Entity::insert('item',$parameters);
		$this->skillController->show($parameters['skill_id']);
	}
	
	public function addUrl(){
		$parameters = Check::makeSafeAssociativeArray($_POST);
		Entity::insert('url',$parameters);
		$item = Entity::find($parameters['item_id'],'item');
		$this->skillController->show($item->skill_id);
	}
	
	public function addDemo(){
		$parameters = Check::makeSafeAssociativeArray($_POST);
		Entity::insert('demo',$parameters);
		$item = Entity::find($parameters['item_id'],'demo');
		$this->skillController->show($item->skill_id);
	}

	public function edit($item_id) {
		$item = Item::find($item_id,'item');
		$entities = array('item' => $item, 'action' => 'update', 'entity' => 'item');
		$this->render('bo',$entities);
	}
	
	public function update($item_id) {
		$parameters = Check::makeSafeAssociativeArray($_POST);
		Entity::update('item',$parameters);
		$item = Item::find($item_id,'item');
		$skill = Entity::find($item->skill_id,'skill');
		$items = Entity::findBy('item',$item->skill_id,'skill');
		$entities = array('skill' => $skill, 'items' => $items);
		$this->render('skill',$entities);
	}
	
	public function delete($item_id){
		Item::deleteBy('demo',$item_id,'item');
		Item::deleteBy('url',$item_id,'item');
		Item::delete('item',$item_id);
		$this->render('home');
	}
	
}

