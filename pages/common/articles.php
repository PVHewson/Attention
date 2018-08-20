<?php require_once 'classes/article.php'; ?>
<?php
$latest = Article::latest();
$latestPhoto = $latest->photo() != '' ?
	"<div class='respnsive-image'>
		<img src='uploads/articles/" . $latest->id() . '.' . $latest->photo() . "'/>
	</div>" : '';
?>
<section>
	<div class="row">
		<div class="col s12 m7">
			<h3>Hot off the press...</h3>
			<div class='card horizontal medium blue lighten-1'>
		
				<div class='card-content'>
				<div class='card-stacked'>
					<span class=card-title'><?php echo $latest->summary() ?></span>
					<p><?php echo $latest->body() ?></p>							
				</div>
				</div>
				<div class='card-action'>
					<a href='#'>Publish</a>
					<a href='#'>Remove</a>
				</div>
			</div>
		</div>	
		<div class="col hide-on-small-only m3">
			<?php echo $latestPhoto ?>
		</div>

	</div>
</section>
<?php
$articles = Article::search();
$column1 = true;

foreach ($articles as $article) {
	$summary = $article->summary();
	$body = $article->body();
	$photo = $article->photo() != '' ?
		"<div class='card-image'>
			<img src='uploads/articles/" . $article->id() . '.' . $article->photo() . "'/>
		</div>" : '';

	if ($column1) {
		echo '<div class="row">';
	}

	echo "<div class='col s12 m6'>
			<div class='card horizontal small blue-grey lighten-1'>
				$photo
				<div class='card-content'>
				<div class='card-stacked'>
					<span class=card-title'>$summary</span>
					<p>$body</p>							
				</div>
				</div>
				<div class='card-action'>
					<a href='#'>Publish</a>
					<a href='#'>Remove</a>
				</div>
			</div>
		</div>";
	if (!$column1) {
		echo '</div>';
		$column1 = true;
	} else {
		$column1 = false;
	}
}
?>
</div>	
