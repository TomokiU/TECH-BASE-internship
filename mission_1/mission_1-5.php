//条件分岐で年齢制限による自動車免許の案内を表示させよう
//【if文】
//【if ~ else】
//【if ~ elseif ~ else】
<?php
	$age = 90;
	if ($age <19){
		echo "You cannot get a car license yet.";
	} elseif ($age >=85) {
		echo "Would you like to surrender driver's license?";
	} else {
		echo "You can get a car license.";
	}
?>