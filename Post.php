<?php
declare(strict_types=1);

class Post {
    private string $title;
    private string $date;
    private string $content;
    private string $author;

    /**
     * Post constructor.
     * @param $title
     * @param $content
     * @param $author
     */
    public function __construct($title, $content, $author)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->date = date('Y/m/d H-i-s');
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }
}


