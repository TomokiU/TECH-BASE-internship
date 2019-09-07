<?php
	$word = $_POST["comment"]; //get comment
	$filename = "mission_2-4.txt"; 
	
	//save text file
	if ($word == null){ 
		echo "何も入力されていません。";
		$fp = fopen($filename, "a"); 
		fwrite($fp, "". PHP_EOL);
		fclose($fp);
	} elseif ($word == "完成！"){
		echo "[" . $word . "] を受け付けました。<br>おめでとう！"; 
		$fp = fopen($filename, "a"); 
		fwrite($fp, $word. PHP_EOL);
		fclose($fp);
	} else {
		echo "[" . $word . "] を受け付けました。"; 
		$fp = fopen($filename, "a"); 
		fwrite($fp, $word . PHP_EOL);
		fclose($fp);
	}
	
	//convert text to array
	$commentarray =file($filename);
	$cnt = count($commentarray);
	
	//display array
	echo "<br>";
	for ($i = 0 ; $i < $cnt ; $i = $i + 1){
		$id = $i + 1;
		echo("ID ". $id . ": " . $commentarray[$i] . "<br>");
	}
	
	
?>