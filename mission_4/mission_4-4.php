<html>
	<meta charset="UTF-8">
	<body>
	</body>
		<?php
		$dsn = 'mysql:dbname=（データベース名）;host=localhost';
			$user = '（ユーザー名）';
			$password = '（パスワード）';
			$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
			echo "success!<br>";
			
			$sql ='SHOW CREATE TABLE tbtest';
			$result = $pdo -> query($sql);
			foreach ($result as $row){
				echo $row[1];
			}
	echo "<hr>";
		?>
	
</html>