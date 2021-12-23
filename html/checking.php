<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>php5.3-apache-mysql</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<pre>
<?php

	// mb_strlen

	$str = 'ニッぽん語のみ';
	echo sprintf('[%s] mb_strlen:%d%s', $str, mb_strlen($str, 'UTF-8'), PHP_EOL);

	$str = 'Japaneseは英語';
	echo sprintf('[%s] mb_strlen:%d%s', $str, mb_strlen($str, 'UTF-8'), PHP_EOL);

	// date

	echo sprintf('%s%s', date('Y年m月d日 H時i分s秒'), PHP_EOL);
