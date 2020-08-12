<?php
	$_POST = json_decode(file_get_contents('php://input'), true);
	$void = array('post' => 'true');
	if ($_POST['name']!="" && $_POST['mail']!="" && $_POST['number']!="" && $_POST['password']!="") {
	$void[success] = 'true';
	}
	if ($_POST['name']=="") {
	$void[name] = null_name;
	}
	if ($_POST['mail']=="") {
	$void[mail] = null_mail;
	}
	if ($_POST['number']=="") {
	$void[number] = null_number;
	}
	if ($_POST['password']=="") {
	$void[password] = null_password;
	}
    echo json_encode($void);
?>