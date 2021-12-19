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
	echo 'ニッぽん語'.PHP_EOL;
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



	//
	// select all
	//
	$select_all =function ($db_) {
		$sql = 'select * from `YUKKURI_TABLE`';
		echo '- - -'.PHP_EOL;
		foreach ($db_->query($sql) as $row) {
			echo sprintf('%03d - %s%s', $row['id'], $row['namae'], PHP_EOL);
		}
		echo '- - -'.PHP_EOL;
	};

	$select_all($db);



	//
	// insert
	//
	$sql = 'insert into `YUKKURI_TABLE`(`namae`) values (:namae)';
	try {
		$stmt = $db->prepare($sql);
		$flag = $stmt->execute(array(':namae' => 'わさ'));
	} catch (PDOException $e) {
		print('Error:'.$e->getMessage());
		die();
	}

	$select_all($db);



	//
	// update
	//
	$sql = 'update `YUKKURI_TABLE` set `namae` = :namae1 where `namae` = :namae2';
	try {
		$stmt = $db->prepare($sql);
		$flag = $stmt->execute(array( ':namae1' =>        'れいみゅ',   ':namae2' =>       'わさ'));
	} catch (PDOException $e) {
		print('Error:'.$e->getMessage());
		die();
	}

	$select_all($db);



	//
	// delete
	//
	$sql = 'delete from `YUKKURI_TABLE` where `namae` = :namae';
	try {
		$stmt = $db->prepare($sql);
		$flag = $stmt->execute(array(':namae' => 'れいみゅ'));
	} catch (PDOException $e) {
		print('Error:'.$e->getMessage());
		die();
	}

	$select_all($db);
?>
</pre>
<p><a href="./phpinfo.php">goto <code>phpinfo()</code></a></p>
</body>
</html>
