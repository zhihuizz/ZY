<?php
function zhihui()
{
	$r=5;
	$n=0;
	for($a=-5;$a<=$r;$a++)
{
	for($b=-5;$b<=$r;$b++)
{
	if($a*$a+$b*$b==25)
{
  	$n++;
  	//echo $a;
  	//echo $b;
  	//echo "<br>";
}
}


}
echo $n;
}

zhihui();
?>