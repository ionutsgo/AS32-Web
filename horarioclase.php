<?php
// two dimensional array
// https://www.w3schools.com/php/php_arrays_multi.asp<?php
// https://www.w3schools.com/php/php_arrays.asp
// https://www.w3schools.com/php/php_arrays_multi.asp
/*$horario = array(
    array("WEB","WEB","SIST","SIST","RED","RED"),  // lunes 0
    array("WEB","RED","WEB","WEB","SIST","SIST"),  // martes 1
    array("WEB","WEB","SIST","SIST","RED","RED"),  // miercoles 2
    array("WEB","WEB","SIST","SIST","RED","RED"),  // jueves 3
    array("WEB","WEB","SIST","SIST","RED","RED")  // viernes 4
);
// OR
$horario = [
    ["DB","u","SIST","SIST","WEB","WEB"],  // lunes 0
    ["WEB","RED","WEB","WEB","SIST","SIST"],  // martes 1
    ["WEB","WEB","SIST","SIST","RED","RED"],  // miercoles 2
    ["WEB","WEB","SIST","SIST","RED","RED"],  // jueves 3
    ["WEB","WEB","SIST","SIST","RED","RED"]  // viernes 4
];*/
$horario = [
    ["BD","WEB","SEG","SERV","SEG"],  // 8-9
    ["EIE","SEG","SEG","SERV","SEG"],  // 9-10
    ["ASO","SERV","ASO","ASO","SERV"],  // 10-11
    ["ASO","SERV","ASO","ASO","SERV"],  // 11-12
    ["WEB","BD","EIE","WEB","ING"],  // 12-13
    ["WEB","BD","EIE","WEB","ING"]  // 13-14
];
/*
// OR with Associative Arrays
$horario2 = array(
    "Lunes" => array("WEB","WEB","SIST","SIST","RED","RED"),  // lunes 0
    "Martes" => array("WEB","RED","WEB","WEB","SIST","SIST"),  // martes 1
    "Miercoles" => array("WEB","WEB","SIST","SIST","RED","RED"),  // miercoles 2
    "Jueves" => array("WEB","WEB","SIST","SIST","RED","RED"),  // jueves 3
    "Viernes" => array("WEB","WEB","SIST","SIST","RED","RED")  // viernes 4
);
*/
// http://php.net/manual/en/function.date.php
$dia_actual = date("N")-1;
$hora_actual = date("G")-8;
//echo $horario[$hora][$dia] . "<br><br>";
// print horario   (i=fila, j=columna)
// https://stackoverflow.com/questions/141108/how-to-find-the-foreach-index
echo "<table border='1'>";
foreach ($horario as $i=>$dia) {
    echo "<tr>";
    foreach ($dia as $j=>$asig) {
        echo "<td>";
        if ($i == $hora_actual && $j == $dia_actual) {
            echo "<b>" . $asig . "</b>";
            //echo "<b>" . $horario[$i][$j] . "</b>";
        } else {
            echo $horario[$i][$j];
        }
        echo "</td>";
    }
    echo "<tr>";
}
echo "</table>";
// using for    ----i fila j columna------
// print horario
echo "<br><br>";
echo "<table border='1'>";
for ($i=0; $i<count($horario); $i++) {
    echo "<tr>";
    for ($j=0; $j<count($horario[$i]); $j++) {
        echo "<td>";
        if ($i == $hora_actual && $j == $dia_actual) {
            echo "<b>" . $horario[$i][$j] . "</b>";
        } else {
            echo $horario[$i][$j];
        }
        echo "</td>";
    }
    echo "<tr>";
}
echo "</table>";