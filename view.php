<?php 
/**
* The view subcomponent is just displaying the value of the variable
*/
require_once('model.php');
class View {
    private $model;
    public function __construct(Model $model) {
        $this->model = $model;
    }
    public function output() {
        return $this->model->text;
    }
    }

 ?>