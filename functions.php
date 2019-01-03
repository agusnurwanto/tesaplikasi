<?php
session_start();
include 'config.php';

if(!empty($_GET) && !empty($_GET['logout'])){
	session_destroy();
	redirect(array('url' => '/login.php'));
}

function connect($options = array()){
	global $db;
	$connect = 'default';
	if(!empty($options['connect'])){
		$connect = $options['connect'];
	}
	$db_connection = pg_connect("host=".$db[$connect]['host']." dbname=".$db[$connect]['dbname']." user=".$db[$connect]['username']." password=".$db[$connect]['password']."");
	return $db_connection;
}

function redirect($options = array()){
	global $site_url;
	echo '<script>window.location.href = "'.$site_url.$options['url'].'"</script>';die();
}