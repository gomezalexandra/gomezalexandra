<?php
namespace App\src\DAO;

use App\src\model\Comment;
/*use App\src\model\Chapter;
use App\config\Session;*/
use App\config\Parameter;

class CommentDAO extends DAO
{
    private function buildObject($row)
    {
        $comment = new Comment();
        $comment->setId($row['id']);
        $comment->setPseudo($row['pseudo']);
        $comment->setContent($row['content']);
        $comment->setCreatedAt($row['createdAt']);
        $comment->setFlag($row['flag']);
        $comment->setChapterId($row['chapterId']);
        return $comment;
    }

    public function getChapterComment($chapterId)
    {
        $sql = 'SELECT id, pseudo, content, createdAt, flag, chapterId FROM comment WHERE chapterId = ? ORDER BY createdAt DESC';
        $result = $this->createQuery($sql, [$chapterId]);
        $comments = [];
        foreach ($result as $row) {
            $commentId = $row['id'];
            $comments[$commentId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $comments;
    }

    public function addComment(Parameter $post, $chapterId, $pseudo)
    {           
        $sql = 'INSERT INTO comment (pseudo, content, createdAt, flag, chapterId) VALUES (?, ?, NOW(), ?, ?)';
        $this->createQuery($sql, [$pseudo , $post->get('content'), 0, $chapterId]);
        //$this->createQuery($sql, [$post->get('pseudo'), $post->get('content'), 0, $chapterId]);
    }

    public function deleteComment($commentId)
    {
        $sql = 'DELETE FROM comment WHERE id = ?';
        $this->createQuery($sql, [$commentId]);
    }

    public function unflagComment($commentId)
    {
        $sql = 'UPDATE comment SET flag = ? WHERE id = ?';
        $this->createQuery($sql, [0, $commentId]);
    }

    public function flagComment($commentId)
    {
        $sql = 'UPDATE comment SET flag = ? WHERE id = ?';
        $this->createQuery($sql, [1, $commentId]);
    }

    public function getFlagComments()
    {
        $sql = 'SELECT id, pseudo, content, createdAt, flag, chapterId FROM comment WHERE flag = ? ORDER BY createdAt DESC';
        $result = $this->createQuery($sql, [1]);
        $comments = [];
        foreach ($result as $row) {
            $commentId = $row['id'];
            $comments[$commentId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $comments;
    }
}
