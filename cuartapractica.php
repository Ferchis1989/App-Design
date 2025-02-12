<?php
//Arrays
$frutas =["mango","tomate","fresas"];
//canridad elementos en un arreglo
echo "<p>".count ($frutas)."</p>";
// arreglo asociativo
$edades= ["Ana"=>26,"Mau"=>21, "Jazz"=>57];
echo "<p>".$edades["Ana"]."</p>";
//estructuras mas complejas
$cantidades= ["Ana"=>["12,24,55"],"Mau"=>[1,2,3], "Jazz"=>[1]];
echo "<p>".$cantidades["Mau"][0]."</p>";
$materias= ["Ana"=>["edad"=>21, "materia"=>"DAW"],
            "Mau"=>["edad"=>22, "materia"=>"DAW"]
            ];
echo "<p>".$materias["Mau"]["edad"].$materias["Mau"]["materia"]."</p>";
//pilas LIFO (last in, first out)
$pila= [];
array_push($pila,"A");
array_push($pila,"B");
array_push($pila,"C");
array_push($pila,"D");

while(!empty($pila)){
    echo "<p>".array_pop($pila)."</p>";
}
//colas FIFO (first in, first out)
$cola= [];
array_push($cola,"A");
array_push($cola,"B");
array_push($cola,"C");
array_push($cola,"D");

while(!empty($cola)){
    echo "<p>".array_shift($cola)."</p>";
}



?>