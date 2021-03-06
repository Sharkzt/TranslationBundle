<?php
namespace VKR\TranslationBundle\TestHelpers\Entity;

use VKR\TranslationBundle\Entity\TranslatableEntityInterface;
use VKR\TranslationBundle\Entity\TranslatableEntityTrait;

class Dummy implements TranslatableEntityInterface
{
    use TranslatableEntityTrait;

    private $id = 1;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTranslatableFields()
    {
        return ['field1', 'field2'];
    }

    private $field1;
    private $field2;

    public function setField1($field1)
    {
        $this->field1 = $field1;
        return $this;
    }

    public function getField1()
    {
        return $this->field1;
    }

    public function setField2($field2)
    {
        $this->field2 = $field2;
        return $this;
    }

    public function getField2()
    {
        return $this->field2;
    }
}
