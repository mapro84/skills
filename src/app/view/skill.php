<?php
use src\Core\Utils\Debug;
use src\Core\Utils\Check;

$skill = $entities['skill'];
$items = $entities['items'];
$demos = isset($entities['demos']) ? $entities['demos'] : [];
?>

<div class="container px-4 py-5" id="featured-3">
<div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="head-menu collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">

<?php
echo '<li class="navbar-brand"><img src="./public/img/' . $skill->logo . '" alt="'.$skill->name.' Logo"></li>';
echo '<li><form class="form-inline" method="post" action="index.php?page=deleteskill" ' .
       'onsubmit="return confirm(\'Do you confirm to delete ' . $skill->name . ' skill and possible items related?\');">' .
	   '<input type="hidden" name="skill_id" value='.$skill->id.'>' . 
	   '<button class="btn btn-danger" ><i class="fa fa-trash"></i></button></form></li>';
// echo '<form class="form-inline my-2 my-lg-0">
// <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
// <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
// </form>';
echo "<hr>";
?>

<!-- 
Ex button inline	

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button">Button</button>
  </div>
</div> -->

</ul>
</div>
</nav>
</div>
</div>

<?php

foreach($items as $item):

if    (!is_null($item->further) && Check::isUrl($item->further)){ 
	echo "<div class='row'>";
	echo '<div style="text-align: left" class="col-4"><a href="'.$item->further .'" target="_blank">'.$item->name.'</a>'.'</div>';
	echo '<div style="text-align: left" class="col-8">'.$item->description.'</div>';
	echo "</div>";
}
elseif(!is_null($item->further) && Check::isPdf($item->further)){ 
	echo "<div class='row'>";
	echo '<div style="text-align: left" class="col"><a href="./public/doc/'.$item->further.'" target="_blank">'.$item->name.'</a></div>';
	echo '<div style="text-align: left" class="col-8">'.$item->description.'</div>';
	echo "</div>";
}
//for long description without url or doc
elseif(strlen($item->description) < 5){ 
	echo "<div class='row'>";
	echo '<div style="text-align: left"  class="col">'.$item->name.'</div>';
	echo '<div style="text-align: left" class="col-8">'.$item->description.'</div>';
	echo "</div>";
}else{
	echo "<div class='row'>";
	echo '<div style="text-align: left"  class="col">'.$item->name.'</div>';
	// echo '<div style="text-align: left" class="col-8">'.substr($item->description,0,50).'...</div>';
	echo '<div style="text-align: left"  class="col-8"><a href="index.php?page=item&itemid='.$item->id.'&skill_name='.$skill->name.'">'.substr($item->description,0,50).'...</a></div>';
	echo "</div>";
}

endforeach;
// echo "</ul>";

?>


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


<script>
function search() {
    if(checkIfEmpty(document.getElementById('searchinput').value)){
    	return false
    }else{
        alert('rr');
    }
}
</script>
