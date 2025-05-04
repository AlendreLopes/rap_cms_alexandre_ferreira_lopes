<?php

namespace App\Http\Controllers;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;
use joshtronic\LoremIpsum;

class BlogController
{
    protected array $attributes;

    public function index($views)
    {
        // Title
        $title = 'Posts';
        // 
        $posts = $this->getPosts();
        return require httpLayouts('Blog/BlogLayout.php');
    }

    public function show(string $views, string $post)
    {
        // Title
        $title = 'Show Post';
        // 
        $post = $this->getPost($post);
        return require httpLayouts('Blog/BlogLayout.php');
    }

    public function create($views)
    {
        // Title
        $title = 'Create Post';
        // Call lipsum to fill form
        $lipsum = new LoremIpsum();
        // 
        $postTitle = $lipsum->words(5);
        // 
        $bodyTitle = $lipsum->paragraphs(1);
        // 
        return require httpLayouts('Blog/BlogLayout.php');
    }

    public function edit($views, $post)
    {
        // Title
        $title = 'Edit Post';
        // Errors
        $errors = [];
        $errors['errors'] = Sessions::get('errors');
        $errors['oldData'] = Sessions::get('oldData');
        // Post
        $post = $this->getPost($post);
        return require httpLayouts('Blog/BlogLayout.php');
    }

    public function store($userId, $title, $description, $status): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "INSERT INTO posts (user_id, title, description, status, created_at) VALUES (:user_id, :title, :description, :status, :created_at)";

        $store = $connection->query(
            $query,
            [
                ':user_id' => $userId,
                ':title' => htmlspecialchars($title),
                ':description' => htmlspecialchars($description),
                ':status' => htmlspecialchars($status),
                ':created_at' => date("Y-m-d H:i:s")
            ]
        );

        if ($store) {

            Sessions::add('success', 'Post created witch success!');
            return true;

        }

        Sessions::add('success', 'Error to try create Post!');
        return false;

    }

    public function update($id, $title, $description, $status): bool
    {

        $connection = App::resolve(Connection::class);

        $query = "UPDATE posts SET title = :title, description = :description, status = :status, updated_at = :updated_at WHERE id = :id";

        $update = $connection->query(
            $query,
            [
                ':id' => $id,
                ':title' => htmlspecialchars($title),
                ':description' => htmlspecialchars($description),
                ':status' => htmlspecialchars($status),
                ':updated_at' => date("Y-m-d H:i:s")
            ]
        );

        if ($update) {

            Sessions::add('success', 'Post edited witch success!');
            return true;
            // return $this->edit('/blog/edit', $id);

        }

        Sessions::add('success', 'Error to try edit Post!');
        return false;
        // redirect("/blog/show?id={$id}");

    }

    public function delete($id)
    {
        $delete = $this->destroy($id);

        if ($delete) {
            Sessions::add('success', 'Post deleted with succeess!');
            redirect('/blog');
        }

        Sessions::add('error', 'Post do not deleted!');
        redirect('/blog');
    }

    protected function destroy($id): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "DELETE FROM posts WHERE id = :id";

        $destroy = $connection->query($query,[':id' => $id]);

        if ($destroy) {
            return true;
        }
        return false;
    }

    /**
     * Summary of get post
     * @param mixed $id
     */
    protected function getPost($id)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM posts WHERE id = :id";

        $posts = $connection->query($query, [
            ':id' => $id
        ])->fetch();

        return $posts;
    }

    /**
     * Summary of list posts
     */
    protected function getPosts()
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM posts";

        $posts = $connection->query($query)->fetchAll();

        return $posts;
    }

}