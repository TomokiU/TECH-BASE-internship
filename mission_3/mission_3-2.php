<?php
	$name = $_POST["name"];
	$word = $_POST["comment"]; //get comment
	$time = date("Y/m/d H:i:s");
	$filename = "mission_3-2.txt"; 
	
	echo ($name . "さん<br>" );
	if ($word == null){
		echo "何も入力されていません。<br>";
	} elseif ($word == "完成！"){
		echo "[" . $word . "] を受け付けました。<br>おめでとう！<br>"; 
	} else {
		echo "[" . $word . "] を受け付けました。<br>"; 
	}
	
	//convert text to array
	if (file_exists($filename)){
		$commentarray =file($filename);
		$num = count($commentarray) + 1;
	} else {
		$num = 1;
	}
	
	
	//save text file
	$moji = ($num . "<>" . $name . "<>" . $word . "<>" . $time);
	$fp = fopen($filename, "a"); 
	fwrite($fp, $moji . PHP_EOL);
	fclose($fp);
	
	$ary = file($filename);
	
	
	for ($i = 0; $i < $num; $i = $i + 1){
		$exp = explode("<>", $ary[$i]);
		foreach ($exp as $comp){
			echo $comp . "<br/>";
		}
	}
	
	
?>