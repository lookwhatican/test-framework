<br><a href="/post/add" class="btn btn-default" role="button">Add new post</a><br>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
	    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?= $post->title; ?></td>
            <td><?= $post->author; ?></td>
            <td><?= $post->category_id; ?></td>
            <td><?= $post->date; ?></td>
            <td><a href="/post/<?=$post->id?>/edit">Edit</a> || <a href="">Delete</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
Number of posts: <?=count($posts);?>