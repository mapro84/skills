<div class="h2title">
	<ul>
		<?php
		foreach($entities as $skill):
		    echo "<li>" . $skill->url . "</li>";
		endforeach;
		?>
	</ul>
</div>