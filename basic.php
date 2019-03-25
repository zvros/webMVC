
<!-- PHP example of the Model View Controller Pattern 
Ref.: https://r.je/mvc-in-php.html 
-->

<?php 
    // In this case the model is just a variable that stores a value
    class Model {
        public $text;
        public function __construct() {
            $this->text = 'Hello world!';
        }        
    }

    class View {
        private $model;
        public function __construct(Model $model) {
            $this->model = $model;
        }
        
        public function output() {
            // It is not recommended to embed html code in php variables
            // return '<h1>' . $this->model->text .'</h1>';
            return $this->model->text;
        }
    }

    class Controller {
        private $model;
        public function __construct(Model $model) {
            $this->model = $model;
        }

        //The action the Controller performs over the model
        public function textClicked(){
            $this->model->text="CMPT-350 Class - MVC Pattern";
        }
    }
?>

<!doctype html>
<html>
<head>
     <title>Basic MVC Example</title>
</head>
<body>
    <?php
        //User
        //initiate the triad
        $model = new Model();

        $controller = new Controller($model);
        $view = new View($model);
    ?>
    <h1>  
        <a href="basic.php?action=textClicked">
            <?php 
                if (isset($_GET['action'])) $controller->{$_GET['action']}();
                    echo $view->output();
            ?>
         </a>
    </h1>
</body>
</html>