<?php
echo "Hello Mamangku <br>";
echo "<br>";

echo "if-else if section <br>";
$dada= 2;
$baba= 5;
echo var_dump($dada);
echo "<br>";
if($dada<$baba)
{
    echo "baba is bigger than dada";
}else if($dhon>$voda)
{
    echo "dada is bigger than baba";
}else{
    echo "Both are same .";
}
echo "<br>";
echo "<br>";

echo "Arithmatic Operator <br>";
$a=20;
$b=6;
echo $a%$b;
echo "<br>";
echo "<br>";

$b +=4;
echo $b;
echo "<br>";
echo "<br>";

$x=$a*$b;
echo $x;
echo "<br>";
echo "<br>";

$a *=5;
echo $a;
echo "<br>";
echo "<br>";

$A =29;
$B =20;

echo "Equal-Equal <br>";
if($A==$B)//Equal-Equal
{
    echo "Both are similiar.";
}else{
    echo "Both are not similiar.";
}
echo "<br>";
echo "<br>";

echo "Not-Equal <br>";
$A =29;
$B =20;

if($A!=$B)//Not-Equal
{
    echo "Print if section.";
}else{
    echo "Print else section.";
}
echo "<br>";
echo "<br>";

echo "Identical <br>";
$Aa =20;
$Bb ='20';
if($Aa===$Bb)//Identical op. It helps you to make difference between two difference data type.
{
    echo "Both are similiar.";
}else{
    echo "Both are not similiar.";
}
echo "<br>";
echo "<br>";

$x =10;
$x++;
echo $x;
echo "<br>";
echo "<br>";

echo "Find the largest value among 3 number <br>";
echo "Using logical AND <br>";
$p=12;
$q=23;
$r=46;
if($p>$q && $p>$r){
    echo "p is the largest number.";
}else if($q>$p && $q>$r){
    echo "q is the largest number.";
}else{
    echo "r is the largest number.";
}
echo "<br>";
echo "<br>";

echo "Who will fuck Mukta finally? <br>";
echo "Using logical OR <br>";
$p=12;
$q=23;
$r=46;
if($p>$q || $p>$r){
    echo "Abir will fuck Mukta.";
}else if($q>$p || $q>$r){
    echo "Saif will fuck Mukta.";
}else{
    echo "Mukta will be fucked by Police.";
}
echo "<br>";
echo "<br>";

echo "Using NOT operator. <br> ";
echo !false;
echo "<br>";
echo "<br>";

/*echo "Using NOT operator 2. <br> ";
$t=false
if($t){
    echo "Output is $t";
}else if (!%t){
    echo "Output is $t";
}
*/

/*while(1)
{
    echo "Mukta tmr Voda etu lal kno!! ops ami pagol hoe jabo <br>";
}*/



?>