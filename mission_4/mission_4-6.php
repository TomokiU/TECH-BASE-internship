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
			
			$sql = 'SELECT * FROM tbtest';
			$stmt = $pdo->query($sql);
			$results = $stmt->fetchAll();
			foreach ($results as $row){
				//$rowの中にはテーブルのカラム名が入る
				echo $row['id'].',';
				echo $row['name'].',';
				echo $row['comment'].'<br>';
			echo "<hr>";
	}
		?>
	
</html>