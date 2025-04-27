<?php

class Blog
{
    // protected $posts = [];

    public static function posts()
    {
        global $connection;

        $query = "SELECT * FROM posts";

        $connection = Connection::getInstance()->prepare($query);

        $posts = $connection->execute();

        return $posts;
    }
}