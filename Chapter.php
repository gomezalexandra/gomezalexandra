
<?php

class Chapter extends Database
{
    public function getChapters()
    {
        $sql = 'SELECT id, title, content, author, createdAt FROM chapter ORDER BY id DESC';
        return $this->createQuery($sql);

       /* $db = new Database();
        $connection = $db->getConnection();
        $result = $connection->query('SELECT id, title, content, author, createdAt FROM chapter ORDER BY id DESC');
        return $result;*/
    }

    public function getchapter($chapterId)
    {
        $sql = 'SELECT id, title, content, author, createdAt FROM chapter WHERE id = ?';
        return $this->createQuery($sql, [$chapterId]);

        /*$db = new Database();
        $connection = $db->getConnection();
        $result = $connection->prepare('SELECT id, title, content, author, createdAt FROM chapter WHERE id = ?');
        $result->execute([
            $chapterId
        ]);
        return $result;*/
    }
}