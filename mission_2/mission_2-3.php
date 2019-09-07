<?php
	$word = $_POST["comment"]; //get comment
	$filename = "mission_2-3.txt"; 
	if ($word == null){
		echo "何も入力されていません。";
		$fp = fopen($filename, "a"); 
		fwrite($fp, "". PHP_EOL);
		fclose($fp);
	} elseif ($word == "完成！"){
		echo "[" . $word . "] を受け付けました。<br>おめでとう！"; //output
		$fp = fopen($filename, "a"); //save comment as a text file
		fwrite($fp, $word. PHP_EOL);
		fclose($fp);
	} else {
		echo "[" . $word . "] を受け付けました。"; //output
		$fp = fopen($filename, "a"); //save comment as a text file
		fwrite($fp, $word . PHP_EOL);
		fclose($fp);
	}
?>