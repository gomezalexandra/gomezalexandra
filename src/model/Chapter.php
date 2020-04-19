<?php
namespace App\src\model;

class Chapter
{
    private $id;
    private $chapterNumber;
    private $title;
    private $content;
    private $author;
    private $createdAt;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getChapterNumber()
    {
        return $this->chapterNumber;
    }

    public function setChapterNumber($chapterNumber)
    {
        $this->chapterNumber = $chapterNumber;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getCreatedAt($format = "")
    {
        if ($format == "")
        {
            return $this->createdAt;
        }
        $date = date_create($this->createdAt);
        return date_format($date, $format);
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
}