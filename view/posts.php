	Number of posts: <?=count($posts);?>
	<?php foreach ($posts as $post): ?>
		<div class="row post-item">
			<div class="col-lg-4">
				<img src="<?= $post->img_source; ?>" alt="" width="250" height="150">
			</div>
			<div class="col-lg-8">
				<h4><a href="<?= '/post/' . $post->id; ?>"> <?= $post->title; ?></a></h4>
				<div class="post-meta">
					<span>Date: <?= $post->date; ?></span>
					<span>Author: <?= $post->author; ?></span>
				</div>
				<p class="post-text"><?= $post->description; ?></p>
			</div>
			<br>
		</div>
	<?php endforeach; ?>