<?php
	$info = pathinfo($_FILES['upfile']['name']);
	// print_r($_FILES['upfile']);
	// print_r($info);
	// exit;

	$ext = array('gif', 'jpg', 'jpeg', 'png');
	$result = $_FILES['upfile']['error'];
	if ($result !== UPLOAD_ERR_OK) {
		$error = 'An upload error has occurred.';
	} else if (!in_array(strtolower($info['extension']), $ext)) {
		$error = 'Files other than images cannot be uploaded.';
	} elseif (!move_uploaded_file($_FILES['upfile']['tmp_name'], 'uploads/'.time().'.'.$info['extension'])) {
		$error = 'Writing failed.';
	}

	if (isset($error)) {
		die('error:'.$error);
	}

	// print_r($_SERVER);
	// exit;

	header('location:image-form.php');
