	<div class="categories-title">Categories</div>
	<ul class="categories-list">
	<?php foreach ($categories as $category): ?>
		<li><a href="/category/<?=$category->id?>"><?= $category->name; ?></a></li>
	<?php endforeach; ?>
	</ul>
