<?php
namespace App\src\DAO;

use App\config\Parameter;
use App\src\model\Author;


class AuthorDAO extends DAO
{
    private function buildObject($row)
    {
        $author = new Author();
        $author->setId($row['id']);
        $author->setContent($row['content']);
        return $author;
    }

    public function getAuthor()
    {
        $sql = 'SELECT id, content FROM author';
        $result = $this->createQuery($sql);
        $author = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($author);
    }

    public function modifyAuthor(Parameter $post)
    {
        $sql = 'UPDATE author SET content=:content';
        $this->createQuery($sql, [
            'content' => $post->get('content')
        ]);
    }
}