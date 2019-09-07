//四則演算の結果を表示してみよう（自分の生まれ年を基に、色々と計算してみる）
<?php
	$thisyear = 2019;
	$mybirth = 1996;
	$myage = $thisyear - $mybirth + 1;
	
	print "<hr size=3>";
	echo "1-4-1<br />";
	echo $thisyear - $mybirth;
	print"<hr size=3>";
	echo "1-4-2<br />";
	echo $myage + 12;
	print"<hr size=3>";
	echo "1-4-3<br />";
	echo $myage + 12 * 2;
	print"<hr size=3>";
	echo "1-4-4<br />";
	$rem = ($thisyear - $mybirth) % 4;
	echo ($thisyear - $mybirth - $rem) / 4 + 1;
?>