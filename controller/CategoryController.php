<?php

class CategoryController extends Controller
{
	public function showAction($id)
	{
		if (!$posts = Post::findByCategory((int)$id)) {
			throw new HttpNotFoundException('Page Not Found!');
		}
		return $this->render('posts.php', array('posts' => $posts));
	}
}