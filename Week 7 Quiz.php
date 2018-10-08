<?php

/*QUIZ ONE*/
echo"QUIZ 1<br>";

echo "My name is Moyinoluwa Aiyeniko<br> and my favourite Color is purple<br> I love dodo so much<br> Almost competing for the spot of dodo in my heart is cake.";


/* QUIZ TWO*/
echo "<br>";
echo"QUIZ 2<br>";

$a=4;
$b=6;
$c=8;
$mult=$a * $c;
$sub=$b - $a;
$div=$c / $b ;
echo"<br>The product of a and c is " . $mult;
echo"<br>The difference between b and a is " . $sub;
echo"<br>The division of c and b is " . $div;

/* QUIZ THREE*/
echo "<br>";
echo"QUIZ 3<br>";

$temp= 36;
if($temp <= 20){
echo"It is really cold today";
}
else if(($temp>20) && ($temp< 30)){
echo"The weather is just perfect";
}
else if(($temp>=30) && ($temp<40)){
echo"It so hot today<br>";
}
else if($temp>=40){
echo"Am i in the sahara desert";
}

/*QUIZ 4*/
echo "<br>";
echo"QUIZ 4<br>";

for($i=100;$i<=150;$i++){
echo"$i <br>";
}
/*FInding even numbers*/
for($ev=2;$ev<50;$ev++){
	if($ev%2==0){
echo $ev."<br>";
	}
}
/*QUIZ 5*/
echo "<br>";
echo"QUIZ 5<br>";

$names= array("Tolu","Titi","Temi");
$hobbies=array("Reading","Eating","Dancing");
$arrlength= count ($names);
$arrlength= count($hobbies);
for($i=0; $i<$arrlength; $i++){
	echo "My name is $names[$i]. I love $hobbies[$i]";
	echo "<br>";
}
/*QUIZ 6*/
echo "<br>";
echo"QUIZ 6<br>";

function calc($a,$b){
$sum= $a + $b;
$mult= $a * $b;
echo"The sum of the numbers is $sum <br>";
echo"The product of the number is $mult<br>";
}
calc(5,5);
?>
