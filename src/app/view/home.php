<div class="container px-4 py-5" id="featured-3">
<!-- <h2 class="pb-2 border-bottom"></h2> -->
<div class="row g-4 py-5 row-cols-1 row-cols-lg-12">
<?php 
$notes = $entities['notes'];
echo "<ul>";
foreach($notes as $note):
echo '<li><a href="index.php?page=note&noteid='.$note->id.'">'.$note->name.'</a>: '.$note->description.'</li>';
endforeach;
echo "</ul>";
?>
</div>
</div>