<?php

class Person {

    public $name;
    public $surname;
    private $content;
    protected $title;

    /**
     * Person constructor.
     * @param $name
     * @param $surname
     * @param $content
     * @param $title
     */
    public function __construct($name, $surname, $content, $title)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->content = $content;
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

}

$person = new Person('lion','liee','content','title');
var_dump($person);