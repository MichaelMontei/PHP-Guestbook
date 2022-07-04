<?php


class PostLoader
{
    public function savePost(Post $post)
    {
        //get the file with all the posts
        //decode the file into an associative array
        //make an array of the new post
        //push the new post to the decoded array
        //encode the decoded array
        //put the newly updated encoded array in the file
    }

    public function getPosts()
    {
        //get the contents of the file and decode it
        //make an empty posts array to put all posts in from the file
        //make a new post for each of the posts in the file and put them in the posts array
        //once we have an array of all the post objects, return them
    }
}
