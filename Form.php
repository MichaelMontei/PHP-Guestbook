<?php

//instead of isset:
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //if above is true then way we have access to form input

//Make sure the script can handle site defacement attacks: use htmlspecialchars()
    $title = trim(htmlspecialchars($_POST['title']));
    $content = trim(htmlspecialchars($_POST['content']));
    $author = trim(htmlspecialchars($_POST['author']));
    //trim removes spaces left and right

    $loader = new PostLoader();
    //instantiated PostLoader and have access to properties of the class PostLoader
    $loader->addMessage($title, $content, $author);
    $loader->saveMessage();

    $posts = $loader->getPosts();

    //The messages are sorted from new (top) to old (bottom).
    $posts = array_reverse($posts); //store reversed array in variable

    //Only show the latest 20 posts.
    $posts = array_slice($posts, 0, 20);
    //makes new array

    //echo 'length of the array: ' .count($posts);
}
?>
