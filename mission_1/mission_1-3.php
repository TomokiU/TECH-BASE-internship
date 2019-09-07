//保存したテキストファイルに書かれた内容を、PHPの関数で読み込み、ブラウザに表示（出力）させる
<?php
	$url = "https://tb-210428.tech-base.net/mission_1-2-1.txt"; //get URL
	$conn = curl_init(); //start session
	curl_setopt($conn, CURLOPT_URL, $url); 
	curl_setopt($conn, CURLOPT_RETURNTRANSFER, true); 
	$res =  curl_exec($conn);
	echo ($res);
	curl_close($conn); //end session
	?>