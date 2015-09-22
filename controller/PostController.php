<?php

class PostController extends Controller
{
	public function indexAction()
	{
		return $this->render('posts.php', array('posts' => Post::find('all')));
	}


	public function showAction($id)
	{
		if (!$post = Post::find((int)$id)) {
			throw new HttpNotFoundException('Page Not Found!');
		}
		return $this->render('post.php', array('post' => $post));
	}


	public function addAction()
	{
		if ($this->isPost()) {
            $post = new Post();
            $date = new \DateTime();
            $post->title = $this->post('title');
            $post->description = $this->post('description');
            $post->text = trim($this->post('text'));
            $post->date = $date->format('Y-m-d H:i:s');
            $post->category_id = $this->post('category_id');
            $post->save();
            return $this->redirect($this->generateRoute('home'));
        }
		return $this->render('post_add.php', array('action' => $this->generateRoute('add_post')));
	}

    /**
     * Deletes an existing post.
     * If deletion is successful, the browser will be redirected to the home page.
     * @param integer $id
     */
    public function deleteAction($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect($this->generateRoute('home'));
    }
}