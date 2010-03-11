<?php
function __autoload($class_name) {
	$class_file = trim($class_name) . '.php';

	$library = array('inc/classes', 'inc/controllers', 'inc/models');
	foreach($library as $lib) {
		$class_path = $lib . '/' . $class_file;
		if(true == file_exists($class_path)) {
			require_once $class_path;
		}
	}
}
?>

