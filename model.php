<?php
class Model
{
    public $string;

    public function __construct(){
        $this->string = "Hello World!";
    }

}

class View
{
    private $model;
    private $controller;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output() {
        return "<p><a href='index.php?action=mouseButtonPressed'>" . $this->model->string . "</a></p>";
    }
}
