<!-- PHP example of the Model View Controller Pattern 
Separating the subcomponents in different files

Ref.: https://r.je/mvc-in-php.html 
-->

<?php 
// Instantiating the subcomponents
	require_once('model.php');
	require_once('view.php');
	require_once('controller.php');
	$model = new Model();

	$controller = new Controller($model);
	$view = new View($model);
 ?>

<!doctype html>
<html>
<head>
	 <title>User Interaction MVC Example</title>
</head>
<body>
 	<h1>  
 		<a href="index.php?action=textclicked">
	 		<?php ;
	 			if (isset($_GET['action'])) $controller->{$_GET['action']}();
					echo $view->output();
	 		?>
 		 </a>
 	</h1>
</body>
</html>