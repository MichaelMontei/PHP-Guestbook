<?php
class Postloader{

    public function savePost(POST $post){
        $data=[];
        $data['title']=$post->getTitle();
        $data['date']=$post->getDate();
        $data['message']=$post->getMessage();
        $data['author']=$post->getAuthor();
        $currentFile = json_decode(file_get_contents('C:\xampp\htdocs\PHP-Guestbook\database.txt'),true);
        $currentFile[]= $data;
        $dataJSON = json_encode($currentFile);

        file_put_contents('C:\xampp\htdocs\PHP-Guestbook\database.txt',$dataJSON);
    }
    public function getPosts():array{
        $stdPosts = json_decode(file_get_contents('C:\xampp\htdocs\PHP-Guestbook\database.txt'));
        return $stdPosts;
    }
}