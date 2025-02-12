<HTML>
<HEAD><TITLE>Pagina Perrona</TITLE></HEAD>
<BODY>
<?php
$variable = "Texto";
$variable_int = 12;
$variable_float =12.2;
$bar_bol =true;

echo "<p>Hola $variable_float</p>";
echo "<p>Hola \"$variable</p>";
echo gettype($bar_bol); //solo en desarrollo
echo "<p>".(3+4)."</p>";
// || OR
// && AND
// ! NOT
if (!(3 > 4 || 56 > 12)&&(12 >1)){
    echo "Se cumple condición";
}
else if (12 > 1){
    echo "No se cumple condición";
}
else{
    echo "No se cumple la condición";
}
$var =0;
while($var <10){
    echo "<p> $var </p>";
    $var++;         
}
do{
    echo "<p>$var </p>";
    $var++;
}while ($var <10);
for($var=0;$var<10;$var++){
    echo "<p>$var </p>";
}
$frutas=["uva","tomate","mazana","pera"];
foreach($frutas as $index=> $name){
    echo "<p>$index<b>$name</b> </p>";
}
$oper =2;
switch($oper){
    case 1:
        echo "<p>caso 1</p>";
        break;
    case 2:
        echo "<p>caso 2</p>";
        break;
    default;
    echo "<p>Default</p>";
    break;
}
?>
</BODY>
</HTML>
