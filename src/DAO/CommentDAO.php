<?php
namespace App\src\DAO;

class CommentDAO extends DAO
{
    public function getChapterComment($chapterId)
    {
        $sql = 'SELECT id, pseudo, content, createdAt FROM comment WHERE chapterId = ? ORDER BY createdAt DESC';
        return $this->createQuery($sql, [$chapterId]);
    }
}