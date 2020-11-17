<?php

$data = new DateTime();
echo $data->format('d-m-Y H:i:s');

echo "<br>";

/*

//https://www.php.net/manual/en/class.dateinterval
//https://www.php.net/manual/en/class.datetime

SIGLAS DE REPRESENTAÇÃO DE DATAS

-> P  representação de periodo: vem antes de dia, mês, ano e semana
Y anos
M meses
D dias
W semanas

-> T representação de tempo: vem antes de hora, minuto e segundo
H horas
M minutos
S segundos

*/

$d1=new DateTime("2012-07-08 11:14:15.638276");
$d2=new DateTime("2020-07-08 11:14:15.889342");
echo "<pre>";
$diff=$d2->diff($d1);
print_r( $diff ) ;
echo "</pre>";

 echo "<br><br>";

 $data1 = new DateTime();
 $intervalo = new DateInterval('P5Y10M5DT10H50M10S');
 echo $data1->sub($intervalo)->format('d-m-Y H:i:s');


 echo "<pre>";
 var_dump($intervalo);
 echo "</pre>";

 $data2 = new DateTime();
 $subtrair = new DateInterval('P5DT10H50M');
 echo $data2->add($subtrair)->format('d-m-y H:i:s');