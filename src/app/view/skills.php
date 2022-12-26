<div class="container px-4 py-5" id="featured-3">
    <!-- <h2 class="pb-2 border-bottom"></h2> -->
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

<?php
// var_dump($entities);
$infos = $entities['infos'];
$errorss = $entities['errors'];
$skills = $entities['skills'];

foreach($skills as $skill){

	echo '<div class="feature col">'
	.'<a href="index.php?page=skill&skill_id='.$skill->id.'" class="icon-link d-inline-flex align-items-center">'
	.'<img src="public/img/'.$skill->logo.'" title="'.$skill->name.'"></a>' 
	.'</a></div>';

	// 	echo '<li class="list"><img src="public/img/'.$skill->logo.'"><a href=index.php?page=skill&skill_id='.$skill->id.'>'.$skill->name.'</a></li>';
 	//echo '<li class="list"><a href=index.php?page=skill&skill_id='.$skill->id.'><img src="public/img/'.$skill->logo.'" title="'.$skill->name.'"></a></li>';
}
?>
</div>
  </div>

