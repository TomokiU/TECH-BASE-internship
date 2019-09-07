<?php
	$word = $_POST["comment"]; //get comment
	$time = date("Y/m/d H:i:s");
	$filename = "mission_2-4v2.txt"; 
	$timestamp = "mission_2-4v2_timestamp.txt";
	
//save text file
	if ($word == null){ 
		echo "何も入力されていません。<br>コメント欄に記入してくださいね。";
		$fp = fopen($filename, "a"); 
		fwrite($fp, "". PHP_EOL);
		fclose($fp);
	} elseif ($word == "完成！"){
		echo "[" . $word . "] を受け付けました。<br>おめでとう！"; 
		$fp = fopen($filename, "a"); 
		fwrite($fp, $word. PHP_EOL);
		fclose($fp);
	} else {
		echo "[" . $word . "] を受け付けました。<br>コメントありがとう！"; 
		$fp = fopen($filename, "a"); 
		fwrite($fp, $word . PHP_EOL);
		fclose($fp);
	}
	
	$fp = fopen($timestamp, "a"); 
		fwrite($fp, $time. PHP_EOL);
		fclose($fp);
	
	//convert text to array
	$commentarray =file($filename);
	$cnt = count($commentarray);
	$date = file($timestamp);
	
	//display array
	echo "<br><br>";
	echo "コメント一覧<br>";
	for ($i = 0 ; $i < $cnt ; $i = $i + 1){
		$id = $i + 1;
		echo $date[$i] . "<br>";
		echo("ID ". $id . ": " . $commentarray[$i] . "<br><br>");
	}
	
	
?>