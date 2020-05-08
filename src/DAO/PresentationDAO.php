<?php
namespace App\src\DAO;

use App\config\Parameter;
use App\src\model\Presentation;


class PresentationDAO extends DAO
{
    private function buildObject($row)
    {
        $presentation = new Presentation();
        $presentation->setId($row['id']);
        $presentation->setContent($row['content']);
        return $presentation;
    }

    public function getPresentation()
    {
        $sql = 'SELECT id, content FROM presentation';
        $result = $this->createQuery($sql);
        $presentation = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($presentation);
    }

    public function modifyPresentation(Parameter $post)
    {
        $sql = 'UPDATE presentation SET content=:content';
        $this->createQuery($sql, [
            'content' => $post->get('content')
        ]);
    }
}