<?php
$marks=array(
"ram"=>array(
"a"=>10,
"b"=>20,
"c"=>30
),
"shyam"=>array(
"a"=>40,
"b"=>50,
"c"=>60
),
"madhu"=>array(
"a"=>70,
"b"=>80,
"c"=>90
)
);
var_dump($marks);
foreach($marks as $key=>$value){
foreach($value as $index=>$v){
		echo"<br>";
		echo"marks:$v";
		echo"<br>";
		}
		}