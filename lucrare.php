<?php
$filme = ["Tommorrow Never Dies", "Babylon", "Cabbie", "Close", "The Beats", "Pil", "Gladiator", "A prince in America", "Express from midnight", "Stay with me, Doraemon", "The King", "The old guard"];

echo("<b>Exercitiul a </b> <br>");
$x = (int)$_POST['An'];
if($x > count($filme)){
	echo "Linie modificata";
}
else {
	$random_keys=array_rand($filme,$x);
	for($i = 0; $i<$x; $i++){
		echo $filme[$random_keys[$i]]."<br>";
	}
}

echo "<br>";
echo("<b>Exercitiul b </b> <br>");
$y = (int)$_POST['Bn'];
$chunk=array_chunk($filme,$y);
foreach($chunk as $value){
	echo implode(", ", $value)."<br>";
}

echo "<br>";
echo("<b>Salut</b> <br>");

$bugetul = ["23549$", "487539$", "84385$", "583468$", "9737$", "785368$", "98735$", "984568$", "948754$", "23695$", "85368$", "874326$"];
$combine = array_combine($filme, $bugetul);
foreach ($combine as $key => $value) {
	echo "Filmul $key are bugetul $value <div>-----------------</div>";
}

echo "<br>";


$a=range(1,100);
shuffle($a);
$a=array_slice($a,0,20);
echo("<br> <b>Exercitiul d </b> <br>Tabloul : ");
foreach ($a as $value) {
    
    print_r($value);
    echo " ";
}
echo "<br><br>Numarul de elemente  :<br>";
$count = array_count_values($a);

foreach($count as $key => $value){
    echo " Numarul $key se repeta de $value ori <br>";
}


echo "<br> <b>Exercitiul e </b>";
$b=range(1,100);
shuffle($b);
$b=array_slice($b,0,20);

echo("<br>Tabloul 1 : ");
foreach ($a as $value) {
    print_r($value);
    echo " ";
}
echo("<br>Tabloul 2 : ");
foreach ($b as $value) {
    print_r($value);
    echo " ";
}
echo "<br><br> Uniunea :";
$merge =array_merge($a,$b);
$uniq= array_unique($merge);
foreach ($uniq as $value) {  
    print_r($value);
    echo " ";
}
//echo("<br> Nr :".count($uniq));

echo "<br> Diferenta :";
$diff =array_diff($a,$b);
foreach ($diff as $value) {   
    print_r($value);
    echo " ";
}
//echo("<br> Nr :".count($diff));

echo "<br> Intersectia :";
$inter =array_intersect($a,$b);
foreach ($inter as $value) { 
    print_r($value);
    echo " ";
}
//echo( "<br> Nr :".count($inter));
?>
