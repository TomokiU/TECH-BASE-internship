//【ファイル操作：書き出し（テキストファイルへの追加出力・aモード）】
<?php
	$word = "click, ";
	$filename = "mission_1-2-3.txt";
	$fp = fopen($filename, "a");
	fwrite($fp, $word);
	fclose($fp);
?>