<div class="container px-4 py-5" id="featured-3">
<div class="row g-4 py-5 row-cols-1 row-cols-lg-12">
<?php

use src\Core\Utils\Debug;

$notes = $entities['notes'];
foreach($notes as $note):
echo '<div class="col"><a href="index.php?page=note&noteid='.$note->id.'">'.$note->name.'</a>: '.$note->description.'</div>';
endforeach;
?>
</div>
</div>
