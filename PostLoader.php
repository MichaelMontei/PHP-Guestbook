<?php

class PostLoader
{
    private $posts = [];
    const DB_FILE = 'database.txt';

    public function addMessage($title, $content, $author){
        $newPost = new Post($title, $content, $author);
        $this->posts[] = $newPost;
    }

    public function saveMessage(){
        $encodedPost = serialize($this->posts);
        file_put_contents(self::DB_FILE, $encodedPost);
    }

    public function getPosts(){
        return $this->posts;
    }

    public function __construct(){
        $contents = file_get_contents(self::DB_FILE);

        if(!empty($contents)){
            $this->posts = unserialize($contents);
        }
    }

}
$loader = new PostLoader();