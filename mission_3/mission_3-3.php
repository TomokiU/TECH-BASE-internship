<?php
////削除するときの最大値を設定
////ID番号を取得し直すか？	
	$filename = "mission_3-3.txt"; 
	if (file_exists($filename)){
			$file =file($filename);
			$comnum =count($file);
	}
	
	
	//Processing of submit
	if (isset($_POST["add"])){
		$name = $_POST["name"];
		$word = $_POST["comment"]; //get comment
		$time = date("Y/m/d H:i:s");

		//Count array
		if (file_exists($filename)){
			$commentarray =file($filename);
			$num = count($commentarray) + 1;
		} else {
			$num = 1;
		}
		
		
		//Display
		echo ($name . "さん<br>" );
		if ($word == null){
			echo "何も入力されていません。<br>";
		} elseif ($word == "完成！"){
			echo "[" . $word . "] を受け付けました。<br>おめでとう！<br>"; 
		} else {
			echo "[" . $word . "] を受け付けました。<br>"; 
		}

		//save text file
		$moji = ($num . "<>" . $name . "<>" . $word . "<>" . $time);
		$fp = fopen($filename, "a"); 
		fwrite($fp, $moji . PHP_EOL);
		fclose($fp);
		
		$ary = file($filename);
		for ($i = 0; $i < $num; $i = $i + 1){
			echo "<hr>";
			$exp = explode("<>", $ary[$i]);
			foreach ($exp as $comp){
				echo $comp . "<br/>";
			}
		}
	}
	
	//Processing of delete
	if (isset($_POST["delete"])){
		$ID = $_POST["ID"]; //get ID which need to be deleted
		if ($ID == 0){
			echo "正しい番号を選んでください";
		} elseif ($ID > $comnum){ 
			echo "えらーだぴょん";
		} else { 
			if (file_exists($filename)){ // if file exist
				$commentarray =file($filename);
				$fp = fopen($filename, "w"); //format text fille
							fwrite($fp, "");
							fclose($fp);
				echo "削除しました<br>";
				foreach ($commentarray as $ary){ 
					$exp = explode("<>", $ary); 
					if ($exp[0] !=$ID){ //save the lines which are not targeted 
						$fp = fopen($filename, "a"); 
							fwrite($fp, $ary);
							fclose($fp);
						foreach ($exp as $comp){
							echo $comp . "<br/>";
						}
					} else {
						$fp = fopen($filename, "a"); 
							fwrite($fp, $exp[0] . "<>" . "削除されました". PHP_EOL);
							fclose($fp);
						echo $exp[0] . "<br>";
						echo "削除されました<br>";
						}				
					}
			} else {// if file does not exsit
				echo "ファイルが見つかりません";
			} 
		}
	} 


?>