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
			
			$id = 1; //変更する投稿番号
			$name = "（変更したい名前）";
			$comment = "（変更したいコメント）"; //変更したい名前、変更したいコメントは自分で決めること
			$sql = 'update tbtest set name=:name,comment=:comment where id=:id';
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(':name', $name, PDO::PARAM_STR);
			$stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
			$stmt->execute();
		?>
	
</html>