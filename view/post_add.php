<?php
/**
 * Created by PhpStorm.
 * @author Max Reva
 * Date: 10.09.2015
 * Time: 12:29
 */
?>

<form action="/post/add" method="post">
    <div class="form-group">
        <label for="title">Title</label>
        <input name="title" class="form-control" id="title">
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" id="description" cols="50" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="text">Text</label>
        <textarea name="text" class="form-control" id="text" cols="50" rows="6"></textarea>
    </div>

    <div class="form-group">
        <label for="author">Author</label>
        <input name="author" class="form-control" id="author">
    </div>

    <div class="form-group">
        <label for="category">Category</label>
        <select name="category" class="form-control" id="category">
            <?php foreach($categories as $category):?>
            <option value="<?= $category->id; ?>"><?= $category->name; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>