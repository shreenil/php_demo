<?php

	$n1=rand(1,10);
	$n2=rand(1,100);
	$ans=$n1+$n2;
	echo "<br> First die-->".$n1;
	echo "<br> second die-->".$n2;
	echo "<br> Answer is-->".$ans;
	echo "<br>";
	if($ans%2==0)
	{
		echo "<img src='even.png'>";
	}
	else
	{
		echo "<img src='odd.png'>";
	}	
?>