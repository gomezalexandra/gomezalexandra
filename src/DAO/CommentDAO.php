<?php
namespace App\src\DAO;

use App\src\model\Comment;
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
        $sql = 'SELECT comment.id, user.pseudo, comment.content, comment.createdAt, comment.flag, comment.chapterId FROM comment INNER JOIN user ON comment.userId = user.id WHERE comment.chapterId = ? ORDER BY comment.createdAt DESC';
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
        $sql = 'INSERT INTO comment (userId, content, createdAt, flag, chapterId) VALUES (?, ?, NOW(), ?, ?)';
        $this->createQuery($sql, [$pseudo , $post->get('content'), 0, $chapterId]);
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
        $sql = 'SELECT comment.id, user.pseudo, comment.content, comment.createdAt, comment.flag, comment.chapterId FROM comment INNER JOIN user ON comment.userId = user.id WHERE comment.flag = ? ORDER BY comment.createdAt DESC';
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
