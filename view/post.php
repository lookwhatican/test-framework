
<div class="row post-item">
	<div class="col-lg-12">
	<?php foreach ($post as $item): ?>
		<h3><?= $item->title; ?></h3>
		<div class="post-meta">
			<span>Date: <?= $item->date; ?></span>
			<span>Author: <?= $item->author; ?></span>
		</div>
		<img src="<?= $item->img_source; ?>" alt="" width="250" height="150" class="post-img">
		<p class="post-text"><?= $item->text; ?></p>
	<?php endforeach; ?>
	</div>
</div>