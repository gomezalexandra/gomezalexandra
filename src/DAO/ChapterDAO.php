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
        $chapter->setChapterNumber($row['chapterNumber']);
        $chapter->setTitle($row['title']);
        $chapter->setContent($row['content']);
        //$chapter->setAuthor($row['author']); car est forcement celui connecté
        $chapter->setAuthor($row['pseudo']);
        $chapter->setCreatedAt($row['createdAt']);
        return $chapter;
    }

    public function getChapters()
    {
        $sql = 'SELECT chapter.id, chapter.chapterNumber, chapter.title, chapter.content, user.pseudo, chapter.createdAt, chapter.draft FROM chapter INNER JOIN user ON chapter.userId = user.id WHERE chapter.draft = ? ORDER BY chapter.chapterNumber DESC';
        $result = $this->createQuery($sql, [0]);
        $chapters = [];
        foreach ($result as $row){
            $chapterId = $row['id'];
            $chapters[$chapterId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $chapters;
    }

    public function getDrafts()
    {
        $sql = 'SELECT chapter.id, chapter.chapterNumber, chapter.title, chapter.content, user.pseudo, chapter.createdAt, chapter.draft FROM chapter INNER JOIN user ON chapter.userId = user.id WHERE chapter.draft = ? ORDER BY chapter.chapterNumber DESC';
        $result = $this->createQuery($sql, [1]);
        $drafts = [];
        foreach ($result as $row){
            $draftId = $row['id'];
            $drafts[$draftId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $drafts;
    }

    public function getLastChapter()
    {
        $sql = 'SELECT chapter.id, chapter.chapterNumber, chapter.title, chapter.content, user.pseudo, chapter.createdAt, chapter.draft FROM chapter INNER JOIN user ON chapter.userId = user.id WHERE chapter.draft = ? ORDER BY chapter.chapterNumber DESC LIMIT 0, 1';
        //$sql = 'SELECT id, title, content, author, createdAt FROM chapter ORDER BY id DESC';
        $result = $this->createQuery($sql, [0]);
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
        $sql = 'SELECT chapter.id, chapter.chapterNumber, chapter.title, chapter.content, user.pseudo, chapter.createdAt, chapter.draft FROM chapter INNER JOIN user ON chapter.userId = user.id WHERE chapter.id = ?';
        //$sql = 'SELECT id, title, content, author, createdAt FROM chapter WHERE id = ?';
        $result = $this->createQuery($sql, [$chapterId]);
        $chapter = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($chapter);
    }

    public function newChapter(Parameter $post, $userId)
    {
        $sql = 'INSERT INTO chapter (chapterNumber, title, content, userId, createdAt, draft) VALUES (?, ?, ?, ?, NOW(), ?)';
        $this->createQuery($sql, [$post->get('chapterNumber'), $post->get('title'), $post->get('content'), $userId, 0]);
    }

    public function newDraft(Parameter $post, $userId) //TODO refactoriser
    {
        $sql = 'INSERT INTO chapter (chapterNumber, title, content, userId, createdAt, draft) VALUES (?, ?, ?, ?, NOW(), ?)';
        $this->createQuery($sql, [$post->get('chapterNumber'), $post->get('title'), $post->get('content'), $userId, 1]);
    }

    public function modifyChapter(Parameter $post, $chapterId, $userId)
    {
        $sql = 'UPDATE chapter SET chapterNumber=:chapterNumber, title=:title, content=:content, userId=:userId, draft=:draft WHERE id=:chapterId';
        $this->createQuery($sql, [
            'chapterNumber' => $post->get('chapterNumber'),
            'title' => $post->get('title'),
            'content' => $post->get('content'),
            'userId' => $userId,
            'draft' => "0",
            'chapterId' => $chapterId
        ]);
    }

    public function publishChapter($chapterId)
    {
        $sql = 'UPDATE chapter SET draft = ? WHERE id = ?';
        $this->createQuery($sql, [0, $chapterId]);
    }

    public function modifyDraft(Parameter $post, $chapterId, $userId) //TODO à tester
    {
        $sql = 'UPDATE chapter SET chapterNumber=:chapterNumber, title=:title, content=:content, userId=:userId, draft=:draft WHERE id=:chapterId';
        $this->createQuery($sql, [
            'chapterNumber' => $post->get('chapterNumber'),
            'title' => $post->get('title'),
            'content' => $post->get('content'),
            'userId' => $userId,
            'draft' => "1",
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
