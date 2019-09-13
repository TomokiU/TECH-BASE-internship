<html>
	<meta charset="UTF-8">
	<body>
		<form  method="post">
			<input type="text" name="comment" size="" value="コメントしてちょ"> 
			<input type = "submit" value ="送信">
		</form>

<?php
if (isset($_POST["comment"])){
	$word = $_POST["comment"]; //get comment
	$filename = "mission_2-2.txt"; 
	if ($word == null){
		echo "何も入力されていません。";
		$fp = fopen($filename, "w"); 
		fwrite($fp, "");
		fclose($fp);
	} elseif ($word == "完成！"){
		echo "[" . $word . "] を受け付けました。<br>おめでとう！"; //output
		
		$fp = fopen($filename, "w"); //save comment as a text file
		fwrite($fp, $word);
		fclose($fp);
	} else {
		echo "[" . $word . "] を受け付けました。"; //output
		$fp = fopen($filename, "w"); //save comment as a text file
		fwrite($fp, $word);
		fclose($fp);
	}
}
?>

	</body>
<html>