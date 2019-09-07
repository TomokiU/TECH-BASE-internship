//【配列変数を扱う】
//【foreach文によるループ】
<?php
	$Shiritori = array("しりとり", "りす", "すずめ", "めだか", "かめ");
	echo $Shiritori[3];
	echo "<hr>";
	echo "arrayの中身<br>";
	var_dump($Shiritori);
	echo "<hr>";
	
	$seq= "";
	foreach ($Shiritori as $word){
		$seq = $seq . $word;
		echo $seq . "<br>";
	}
?>