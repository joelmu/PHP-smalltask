<?php
//https://www.sitepoint.com/the-mvc-pattern-and-php-1/

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
  $controller->{$_GET['action']}();
}

echo $view->output();

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
        return '<p><a href="index.php?action=mouseButtonPressed">' . $this->model->string . '</a></p>';
    }
}

class Controller
{
    private $model;

    public function __construct($model){
        $this->model = $model;
    }

    public function mouseButtonPressed() {
        $this->model->string = "Updated Hello World!";
      }
}
