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
			
			$id = 2;
			$sql = 'delete from tbtest where id=:id';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
			$stmt->execute();
		?>
	
</html>