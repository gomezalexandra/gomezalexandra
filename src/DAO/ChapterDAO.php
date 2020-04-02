<?php
namespace App\src\DAO;

use App\src\model\Chapter;

class ChapterDAO extends DAO
{
    private function buildObject($row)
    {
        $chapter = new Chapter();
        $chapter->setId($row['id']);
        $chapter->setTitle($row['title']);
        $chapter->setContent($row['content']);
        $chapter->setAuthor($row['author']);
        $chapter->setCreatedAt($row['createdAt']);
        return $chapter;
    }

    public function getChapters()
    {
        $sql = 'SELECT id, title, content, author, createdAt FROM chapter ORDER BY id DESC';
        $result = $this->createQuery($sql);
        $chapters = [];
        foreach ($result as $row){
            $chapterId = $row['id'];
            $chapters[$chapterId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $chapters;
    }

    public function getchapter($chapterId)
    {
        $sql = 'SELECT id, title, content, author, createdAt FROM chapter WHERE id = ?';
        $result = $this->createQuery($sql, [$chapterId]);
        $chapter = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($chapter);
    }
}

/*class ChapterDAO extends DAO
{
    public function getChapters()
    {
        $sql = 'SELECT id, title, content, author, createdAt FROM chapter ORDER BY id DESC';
        return $this->createQuery($sql);
    }

    public function getchapter($chapterId)
    {
        $sql = 'SELECT id, title, content, author, createdAt FROM chapter WHERE id = ?';
        return $this->createQuery($sql, [$chapterId]);

    }
}*/