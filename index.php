<?php
	require_once("models/enlaces.php");
	require_once("models/crud.php");
	require_once("controllers/controller.php");

	$controller = new main_controller();
	$controller -> load();
?>