<?php
define ('DIR', __DIR__.'/');

require DIR.'class/Pinigine.php';
require DIR.'class/Stikline.php';
require DIR.'class/Grybas.php';
require DIR.'class/Krepsys.php';
// require __DIR__.'/class/Pinigine.php';
echo '<hr><br>';
echo" nr 1";
echo '<br>...............';
$pinigine = new Pinigine;
echo '<br>';
$pinigine -> ideti(50);
$pinigine -> ideti(1);
$pinigine -> ideti(30);
$pinigine -> ideti(1);
$pinigine -> ideti(30);
$pinigine -> ideti(1);
$pinigine -> skaiciuoti();
echo '<br> popieriniai ';
$pinigine -> getPopieriniai();
echo '<br> geleziniai ';
$pinigine -> getGeleziniai();


echo '<hr>';
echo '<pre>';

var_dump($pinigine);

echo '<hr>';
echo" nr 2 ...................";
echo "<br>";

$stikline1 = new Stikline(200);
$stikline2 = new Stikline(150);
$stikline3 = new Stikline(100);

$stikline1->ipilti(200);
$stikline2->ipilti($stikline1->ispilti());
$stikline3->ipilti($stikline2->ispilti());

print_r($stikline1);
echo '<br>';
print_r($stikline2);
echo '<br>';
print_r($stikline3);
echo '<hr>';
echo" nr 3 ...................";
echo '<br>';

$grybas1 = new Grybas();

$krepsys = new Krepsys;
while ($krepsys -> svoris <= 500) 
{
    
    $grybas1 = new Grybas();
    // echo ".....................";
    // var_dump($grybas1);

    if($grybas1->getValgomas() == true && $grybas1->getSukirmijes() == false ) {
        // echo ".............PRIDETA........";
        // var_dump($grybas1);
        // var_dump($krepsys);

        $krepsys -> prideti($grybas1 -> getGryboSvoris());
    }

     $krepsys -> visiGrybai++;

}

var_dump($grybas1);
echo '<br>..................................';
var_dump($krepsys);




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uzduotis 1</title>
</head>
<body>
    
</body>
</html>