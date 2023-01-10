<?php
use src\Core\Utils\Debug;
use src\Core\Utils\Check;
$items = $entities['items'];
$demos = $entities['demos'] ?? [];
$relatedUrls = $entities['relatedUrls'] ?? [];
$skillLogos = $entities['skillLogos'] ?? [];
?>

<div class="container" id="featured-3">
<div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="head-menu collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<?php
foreach ($skillLogos as $skillName => $logo) {
	echo '<li class="navbar-brand"><img src="./public/img/' . $logo . '" alt="' . $skillName . ' Logo"></li>';
}
?>
</ul>
</div>
</nav>
</div>
</div>

<div class="container" id="featured-3">
<!-- <div class="container px-4 py-5"> -->
<?php
$idsArray = [];
foreach ($items as $item) {
	if(in_array($item['id'],$idsArray)){
		continue;
	}
	array_push($idsArray, $item['id']);
	if (!empty($item['name'])) {
		$match = "/^([a-zA-Z]+:\s)(.*$)/";
		$itemName = preg_replace($match, "$2", $item['name']);
		if (!is_null($item['further']) && Check::isUrl($item['further'])) {
			echo "<div class='row mb-2, border-bottom'>";
			echo '<div style="text-align: left" class="col-4"><a href="' . $item['further'] . '" target="_blank">' . $itemName . '</a>' . '</div>';
			echo '<div style="text-align: left" class="col-8">' . $item['description'] . '</div>';
			echo "</div>";
		} elseif (!is_null($item['further']) && Check::isPdf($item['further'])) {
			echo "<div class='row mb-2, border-bottom'>";
			echo '<div style="text-align: left" class="col"><a href="./public/doc/' . $item['further'] . '" target="_blank">' . $itemName . '</a></div>';
			echo '<div style="text-align: left" class="col-8">' . $item['description'] . '</div>';
			echo "</div>";
		} else {
			echo "<div class='row mb-2, border-bottom'>";
			echo '<div style="text-align: left"  class="col">' . $itemName . '</div>';
			echo '<div style="text-align: left" class="col-8">' . $item['description'] . '</div>';
			echo "</div>";
		}
	}
}

?>
</div>

<div class="container" id="featured-3">
<!-- <div class="container px-4 py-5" id="featured-3"> -->
<?php
$numberUrls = count($relatedUrls);
if($numberUrls>0){
?>
<ul>
	<li class="remove-bullet">Related urls</li>
	<ul>
	<?php
		foreach($relatedUrls as $url){
			echo '<li><a href="'.$url['url'].'" target="_blank">'.$url['urlname'].'</a></li>';
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
$numberDemos = count($demos);
if($numberDemos>0){
?>
<ul>
	<li class="remove-bullet">Related Demos</li>
	<ul>
	<?php
		foreach($demos as $demo){
			echo '<li><a href="index.php?page=demo&demo_id='.$demo['did'].'" target="_blank">'.$demo['dname'].'</a></li>';
		}
	?>
	</ul>
</ul>
<?php
}
?>
</div>