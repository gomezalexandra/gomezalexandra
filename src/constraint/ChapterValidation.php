<?php
namespace App\src\constraint;

use App\config\Parameter;

class ChapterValidation extends Validation
{
    private $errors = [];
    private $constraint;

    public function __construct()
    {
        $this->constraint = new Constraint();
    }

    public function check(Parameter $post)
    {
        foreach ($post->all() as $key => $value) {
            $this->checkField($key, $value);
        }
        return $this->errors;
    }

    private function checkField($name, $value)
    {
        if($name === 'title') {
            $error = $this->checkTitle($name, $value);
            $this->addError($name, $error);
        }
        elseif ($name === 'content') {
            $error = $this->checkContent($name, $value);
            $this->addError($name, $error);
        }
        elseif ($name === 'chapterNumber') {
            $error = $this->checkNumber($name, $value);
            $this->addError($name, $error);
        }
    }

    private function addError($name, $error) {
        if($error) {
            $this->errors += [
                $name => $error
            ];
        }
    }

    private function checkTitle($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('titre', $value);
        }
        if($this->constraint->minLength($name, $value, 2)) {
            return $this->constraint->minLength('titre', $value, 2);
        }
    }

    private function checkContent($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('contenu', $value);
        }
        if($this->constraint->minLength($name, $value, 2)) {
            return $this->constraint->minLength('contenu', $value, 2);
        }
    }

    private function checkNumber($name, $value)
    {
        if($this->constraint->notBlank($name, $value)) {
            return $this->constraint->notBlank('numéro', $value);
        }
    }
}