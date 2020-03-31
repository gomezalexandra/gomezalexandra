
<?php

class Chapter
{
    public function getChapters()
    {
        $db = new Database();
        $connection = $db->getConnection();
        $result = $connection->query('SELECT id, title, content, author, createdAt FROM chapter ORDER BY id DESC');
        return $result;
    }

    public function getchapter($chapterId)
    {
        $db = new Database();
        $connection = $db->getConnection();
        $result = $connection->prepare('SELECT id, title, content, author, createdAt FROM chapter WHERE id = ?');
        $result->execute([
            $chapterId
        ]);
        return $result;
    }
}