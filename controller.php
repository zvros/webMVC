<?php 
	require_once('model.php');
	class Controller {
        private $model;
        public function __construct(Model $model) {
            $this->model = $model;
        }
// The action the cotroller performs over the model
        public function textClicked() {
        	$this->model->text = 'Text Updated';
    	}
    }
 ?>