<html>
	<meta charset="UTF-8">
	<body>
	</body>
		<?php
			$dsn = 'mysql:dbname=（データベース名）;host=localhost';
			$user = '（ユーザー名）';
			$password = '（パスワード）';
			$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
			echo "success!";
			
			$sql = "CREATE TABLE IF NOT EXISTS tbtest"
			." ("
			. "id INT AUTO_INCREMENT PRIMARY KEY,"
			. "name char(32),"
			. "comment TEXT"
			.");";
			$stmt = $pdo->query($sql);
			echo "success!";
		?>
	
</html>