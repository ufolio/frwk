<?php

$conf_file = 'conf.json';

if( file_exists($conf_file) ) {
	$conf_json = file_get_contents($conf_file);
	$conf = json_decode($conf_json, true);
} else {
	exit('File not found');
}


$pages = [];
foreach($conf['pages'] as $page => $values) {
	array_push($pages, $page);
}
//debug($pages);




$styles  = [];
$scripts = [];

add_style('/assets/css/style.css');

require_once 'admin.php';


function debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
}

function add_style($style) {
	global $styles;
	if(!empty($style)) array_push($styles, $style);
}
function add_script($script) {
	global $scripts;
	if(!empty($script)) array_push($scripts, $script);
}