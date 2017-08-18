<?php

require '../vendor/autoload.php';

$showErros = true;

$config['displayErrorDetails'] = $showErros;

$app = new \Slim\App(['settings'=>$config]);

registerControllers('../app/Controllers');

require ('../app/routes.php');

function registerControllers($controllersFolder)  {
	global $app;
	$container = $app->getContainer();

	$container = $app->getContainer();
	if ($handle = opendir($controllersFolder)) {
		while (false !== ($entry = readdir($handle))) {
			$length = strlen($entry);
			$pos = strrpos($entry, "Controller.php");
			if ($pos > 0) {
				$nameController = substr($entry, 0, $length-$pos);
				$container[$nameController] = function($c) use ($nameController) {
					$class =  "App\Controllers\\".$nameController;
					return new $class();
				};
			}
		}
	closedir($handle);
	}
}

return $app;