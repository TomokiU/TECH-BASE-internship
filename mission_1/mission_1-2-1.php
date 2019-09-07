//【ファイル操作：書き出し（テキストファイルへの出力・wモード）】
<?php
	$word = "Change before you have to";
	$filename = "mission_1-2-1.txt";
	$fp = fopen($filename, "w");
	fwrite($fp, $word);
	fclose($fp);
?>