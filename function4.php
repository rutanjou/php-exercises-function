<?php 
function trinome(){
$a = 4;
$b = 4;
if ($a > $b){
	echo "Le premier nombre est plus grand ";
} else if($a < $b){
	echo "Le premier nombre est plus petit ";
}else{
	echo "Les deux nombres sont identiques";
}
}
trinome();