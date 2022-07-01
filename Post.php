<?php
declare(strict_types=1);

class Post
{
    private string $title;
    private string $content;
    private string $authorName;

    /**
     * @param string $title
     * @param string $content
     * @param string $authorName
     */
    public function __construct(string $title, string $content, string $authorName)
    {
        $this->title = $title;
        $this->content = $content;
        $this->authorName = $authorName;
    }

    public function getInfo(): string
    {
        return "The title is $this->title and the Author is $this->authorName, the content is $this->content for testing!";
    }
}



$test = new Post("The witch", "potter", "Rowling");
echo $test->getInfo();