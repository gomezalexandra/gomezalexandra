<?php
namespace App\src\model;

class Comment
{
    private $id;
    private $pseudo;
    private $content;
    private $createdAt;
    private $flag;
    private $chapterId;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
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

    public function isFlag()
    {
        return $this->flag;
    }

    public function setFlag($flag)
    {
        $this->flag = $flag;
    }

    public function getChapterId()
    {
        return $this->chapterId;
    }

    public function setChapterId($chapterId)
    {
        $this->chapterId = $chapterId;
    }
}