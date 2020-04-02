<?php
namespace App\src\DAO;

class CommentDAO extends DAO
{
    private function buildObject($row)
    {
        $comment = new Comment();
        $comment->setId($row['id']);
        $comment->setPseudo($row['pseudo']);
        $comment->setContent($row['content']);
        $comment->setCreatedAt($row['createdAt']);
        return $comment;
    }

    public function getChapterComment($chapterId)
    {
        $sql = 'SELECT id, pseudo, content, createdAt FROM comment WHERE chapterId = ? ORDER BY createdAt DESC';
        $result = $this->createQuery($sql, [$chapterId]]);
        $comments = [];
        foreach ($result as $row) {
            $commentId = $row['id'];
            $comments[$commentId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $comments;
    }
}
