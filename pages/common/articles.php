<?php require_once 'classes/article.php'; ?>
<?php
	$articles = Article::search();
	$column1 = true;
	
	foreach($articles as $article){
		$summary = $article->summary();
		$body = $article->body();
		$photo = $article->photo() != '' ?
			"<img src='uploads/" . $article->id() . '.' . $article->photo() ."' class='responsive-img materialboxed'/>"
			: '';

		if ($column1){
			echo '<div class="row">';
		}
		
		echo "<div class='col s12 m6'>
			<div class='card small blue-grey lighten-1'>
				<div class='card-content'>
					<span class=card-title'>$summary</span>
					<p>$body</p>
					$photo		
				</div>
				<div class='card-action'>
					<a href='#'>Publish</a>
					<a href='#'>Remove</a>
				</div>
			</div>
		</div>";
		if (!$column1){
			echo '</div>';
			$column1=true;
		} else {
			$column1=false;
		}
	}
?>
</div>	
