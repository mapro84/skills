<?php
use src\Core\Utils\Debug;
use src\Core\Utils\Check;
$items = $entities['items'];
$demos = isset($entities['demos']) ? $entities['demos'] : [];
$urls = isset($entities['urls']) ? $entities['urls'] : [];
?>



<div class="container px-4 py-5">
<?php
foreach($items as $item):

if    (!is_null($item->further) && Check::isUrl($item->further)){ 
	echo "<div class='row mb-2'>";
	echo '<div style="text-align: left" class="col-4"><a href="'.$item->further .'" target="_blank">'.$item->name.'</a>'.'</div>';
	echo '<div style="text-align: left" class="col-8">'.$item->description.'</div>';
	echo "</div>";
}
elseif(!is_null($item->further) && Check::isPdf($item->further)){ 
	echo "<div class='row mb-2'>";
	echo '<div style="text-align: left" class="col"><a href="./public/doc/'.$item->further.'" target="_blank">'.$item->name.'</a></div>';
	echo '<div style="text-align: left" class="col-8">'.$item->description.'</div>';
	echo "</div>";
} else {
		echo "<div class='row mb-2'>";
		echo '<div style="text-align: left"  class="col">' . $item->name . '</div>';
		echo '<div style="text-align: left" class="col-8">' . $item->description . '</div>';
		echo "</div>";
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

<div class="container px-4 py-5" id="featured-3">
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

