<?php

require ViewsController::common('database/ConnectionStatic.php');

class BlogController
{

    public function index($views)
    {

        require ViewsController::layouts('Blog/BlogLayout.php', [
            "views" => $views,
            "posts" => $this->posts(),
        ]);
    }

    public function show(string $views, string $post)
    {
        require ViewsController::layouts('Blog/BlogLayout.php', [
            'views' => $views,
            'post' => $post
        ]);
    }

    public function create($views)
    {
        require ViewsController::layouts('Blog/BlogLayout.php', [
            'views' => $views
        ]);
    }

    protected function posts()
    {
        $query = "SELECT * FROM posts";

        // $posts = $connection->query($query)->fetchOrAbort();
        $getPosts = Connection::getInstance()->prepare($query);
        $getPosts->execute();
        
        return $getPosts;

    }

    public function delete($id)
    {
        $delete = $this->destroy($id);

        if ($delete) {
            return "Post deleted with success!";
        }

        return "Post not deleted!";
    }

    protected function destroy($id)
    {
        global $connection;

        $destroy = "DELETE FROM posts WHERE id = :id";
        $destroyed = $connection->query($destroy)->fetch();

        return $destroyed;
    }

}