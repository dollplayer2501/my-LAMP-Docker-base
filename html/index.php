<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>php5.3-apache-mysql</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php phpinfo(); ?>
<pre>
<?php
	echo 'にっぽん語'.PHP_EOL;
	echo date('Y年m月d日 H時i分s秒').PHP_EOL;


	$dbtype   = 'mysql';
	$host     = 'mysql_container';  // not 'localhost', '127.0.0.1'
	$port     = '3306';             // not '3307'
	$db       = 'YUKKURI_DATABASE';
	$charset  = 'utf8';
	$user     = 'YUKKURI_USER';
	$password = 'YUKKURI_PASSWORD';

	$dsn = "$dbtype:host=$host; port=$port; dbname=$db; charset=$charset";
	// echo "[".$dsn."]";

	try {
		$db = new PDO($dsn,$user, $password);
	} catch (PDOException $e) {
		print('Error:'.$e->getMessage());
		die();
	}

	$sql = 'select * from YUKKURI_TABLE';
	foreach ($db->query($sql) as $row) {
		print($row['id'].' '.$row['namae'].PHP_EOL);
	}
?>
</pre>
</body>
</html>
