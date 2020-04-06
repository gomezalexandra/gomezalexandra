<?php
namespace App\src\DAO;

use App\src\model\Chapter;
use App\config\Parameter;

class ChapterDAO extends DAO
{
    private function buildObject($row)
    {
        $chapter = new Chapter();
        $chapter->setId($row['id']);
        $chapter->setTitle($row['title']);
        $chapter->setContent($row['content']);
        //$chapter->setAuthor($row['author']);
        $chapter->setAuthor($row['pseudo']);
        $chapter->setCreatedAt($row['createdAt']);
        return $chapter;
    }

    public function getChapters()
    {
        $sql = 'SELECT chapter.id, chapter.title, chapter.content, user.pseudo, chapter.createdAt FROM chapter INNER JOIN user ON chapter.userId = userId ORDER BY chapter.id DESC';
        //$sql = 'SELECT id, title, content, author, createdAt FROM chapter ORDER BY id DESC';
        $result = $this->createQuery($sql);
        $chapters = [];
        foreach ($result as $row){
            $chapterId = $row['id'];
            $chapters[$chapterId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $chapters;
    }

    public function getChapter($chapterId)
    {
        $sql = 'SELECT chapter.id, chapter.title, chapter.content, user.pseudo, chapter.createdAt FROM chapter INNER JOIN user ON chapter.userId = userId WHERE chapter.id = ?';
        //$sql = 'SELECT id, title, content, author, createdAt FROM chapter WHERE id = ?';
        $result = $this->createQuery($sql, [$chapterId]);
        $chapter = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($chapter);
    }

    public function newChapter(Parameter $post, $userId)
    {
        $sql = 'INSERT INTO chapter (title, content, userId, createdAt) VALUES (?, ?, ?, NOW())';
        $this->createQuery($sql, [$post->get('title'), $post->get('content'), $userId]);
    }

    public function modifyChapter(Parameter $post, $chapterId, $userId)
    {
        $sql = 'UPDATE chapter SET title=:title, content=:content, userId=:userId WHERE id=:chapterId';
        $this->createQuery($sql, [
            'title' => $post->get('title'),
            'content' => $post->get('content'),
            'userId' => $userId,
            'chapterId' => $chapterId
        ]);
    }

    public function deleteChapter($chapterId)
    {
        $sql = 'DELETE FROM chapter WHERE id = ?';
        $this->createQuery($sql, [$chapterId]);
        $sql = 'DELETE FROM comment WHERE chapterId = ?';
        $this->createQuery($sql, [$chapterId]);
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