<?php
use src\Core\Utils\Debug;
use src\Core\Utils\Check;

$skill = $entities['skill'];
$items = $entities['items'];
$demos = isset($entities['demos']) ? $entities['demos'] : [];
$urls = isset($entities['urls']) ? $entities['urls'] : [];
?>

<div class="container" id="featured-3">
<div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="head-menu collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">

<?php
echo '<li class="navbar-brand"><img src="./public/img/' . $skill->logo . '" alt="'.$skill->name.' Logo"></li>';
$admin = false;
if($admin === true){
echo '<li><form class="form-inline" method="post" action="index.php?page=deleteskill" ' .
       'onsubmit="return confirm(\'Do you confirm to delete ' . $skill->name . ' skill and possible items related?\');">' .
	   '<input type="hidden" name="skill_id" value='.$skill->id.'>' . 
	   '<button class="btn btn-danger" ><i class="fa fa-trash"></i></button></form></li>';
}
?>

</ul>
</div>
</nav>
</div>
</div>

<div class="container" id="featured-3">
<?php
foreach($items as $item):
	$match = "/^([a-zA-Z]+:\s)(.*$)/";
	$itemName = preg_replace($match, "$2", $item->name);

	if    (!is_null($item->further) && Check::isUrl($item->further)){
		echo "<div class='row mb-2, border-bottom'>";
		echo '<div style="text-align: left" class="col-4"><a href="'.$item->further .'" target="_blank">'.$itemName.'</a>'.'</div>';
		echo '<div style="text-align: left" class="col-8">'.$item->description.'</div>';
		echo "</div>";
	}
	elseif(!is_null($item->further) && Check::isPdf($item->further)){ 
		echo "<div class='row mb-2, border-bottom'>";
		echo '<div style="text-align: left" class="col"><a href="./public/doc/'.$item->further.'" target="_blank">'.$itemName.'</a></div>';
		echo '<div style="text-align: left" class="col-8">'.$item->description.'</div>';
		echo "</div>";
	} else {
		//for long description without url or doc
		// elseif(strlen($item->description) < 5){ 
				echo "<div class='row mb-2, border-bottom'>";
				echo '<div style="text-align: left"  class="col">' . $itemName . '</div>';
				echo '<div style="text-align: left" class="col-8">' . $item->description . '</div>';
				echo "</div>";
				// }
		// else{
		// 	echo "<div class='row mb-2, border-bottom'>";
		// 	echo '<div style="text-align: left"  class="col">'.$item->name.'</div>';
		// 	// echo '<div style="text-align: left" class="col-8">'.substr($item->description,0,50).'...</div>';
		// 	echo '<div style="text-align: left"  class="col-8"><a href="index.php?page=item&itemid='.$item->id.'&skill_name='.$skill->name.'">'.substr($item->description,0,50).'...</a></div>';
		// 	echo "</div>";
		// }
	}
endforeach;
?>
</div>


<div class="container px-4 py-5" id="featured-3">
<?php
$numberDemos = count($demos);
if($numberDemos>0){
?>
<ul>
	<li class="remove-bullet">Related Demos</li>
	<ul>
	<?php
		foreach($demos as $demo){
			echo '<li><a href="index.php?page=demo&demo_id='.$demo->id.'" target="_blank">'.$demo->name.'</a></li>';
		}
	?>
	</ul>
</ul>
<?php
}
?>
</div>

<div class="container" id="featured-3">
<?php
$numberUrls = count($urls);
if($numberUrls>0){
?>
<ul>
	<li class="remove-bullet">Related urls</li>
	<ul>
	<?php
		foreach($urls as $url){
			echo '<li><a href="'.$url->url.'" target="_blank">'.$url->name.'</a></li>';
		}
	?>
	</ul>
</ul>
<?php
}
?>
</div>

<!-- <script>
function search() {
    if(checkIfEmpty(document.getElementById('searchinput').value)){
    	return false
    }else{
        alert('rr');
    }
}
</script> -->
