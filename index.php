<?php
	set_time_limit(300);
	define('CHARSET', 'utf8mb4');
	error_reporting (E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	error_reporting(0);
	require_once 'public/header.php';
	require_once 'controllers/controller.formulario.php';
	require_once 'public/footer.php';
?>