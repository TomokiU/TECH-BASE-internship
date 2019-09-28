<html>
	<meta charset="UTF-8">
	<body>
	
		<form method="post">
			<input type="text" name="name" size="" value="名前を入れてね"> <br>
			<input type="text" name="comment" size="" value="コメントしてちょ"> <br>
			<input type = "submit" name = "add" value ="Submit">
		</form>
		
		<form method="post">
			<input type="number" name="ID" size="" value="1" min=1 max=<?php echo 100; ?> > <br>
			<input type = "submit" name = "delete" value ="Delete">
		</form>
		
		
		<?php	
			$dsn = 'mysql:dbname=（データベース名）;host=localhost';
			$user = '（ユーザー名）';
			$password = '（パスワード）';
			$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
			echo "database login...<br>";
			
			if (isset($_POST["add"])){
				$name = $_POST["name"];
				$comment = $_POST["comment"]; //get comment
				$time = date("Y/m/d H:i:s");

				$sql = "CREATE TABLE IF NOT EXISTS formtablea"
					." ("
					. "id INT AUTO_INCREMENT PRIMARY KEY,"
					. "name char(32),"
					. "comment TEXT,"
					. "time datetime"
					.");";
					$stmt = $pdo->query($sql);
					echo "create table...<br>";		
		
				$sql = $pdo -> prepare("INSERT INTO formtablea (name, comment, time) VALUES (:name, :comment, :time)");
				$sql -> bindParam(':name', $name, PDO::PARAM_STR);
				$sql -> bindParam(':comment', $comment, PDO::PARAM_STR);
				$sql -> bindParam(':time', $time, PDO::PARAM_STR);
				$sql -> execute();
				echo "insert info...<br>";
				echo "<hr>";	
			}
			
			if (isset($_POST["delete"])){
				$id = $_POST["ID"]; //get ID which need to be deleted
				
				$check = $pdo -> query("SELECT * FROM formtablea where id = $id");
				$results = $check->fetchAll();
				$count=count($results);
				if ($count==0){
					echo "no data...<br><hr>";
				} else {
					echo "deleted ".$id."...<br><hr>";
					
					$sql = 'delete from formtablea where id=:id';
					$stmt = $pdo->prepare($sql);
					$stmt->bindParam(':id', $id, PDO::PARAM_INT);
					$stmt->execute();
				}
			}
			
			$sql = 'SELECT * FROM formtablea';
			$stmt = $pdo->query($sql);
			$results = $stmt->fetchAll();
			foreach ($results as $row){
				echo $row['id'].'<br>';
				echo $row['name'].'<br>';
				echo $row['comment'].'<br>';
				echo $row['time'].'<br>';
			echo "<hr>";
			}
		?>
	

	</body>
<html>