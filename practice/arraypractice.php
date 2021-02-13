<?php 
//PHP Indexed Arrays
echo "PHP Indexed Arrays";
$fruits = array('apple','mango','banana'); //traditional method of creating array.
foreach($fruits as $fruit){
    echo("<pre>\n");
    echo $fruit;
}
echo("<pre>\n");
echo 'Looping through Indexed Arrays';
$country = ['india','usa','UK']; //new method
foreach($country as $x){
    echo("<pre>\n");
    print_r($x);
}
echo("<pre>\n");
echo 'Looping through Indexed Arrays using count function and for loop';
$arrlength = count($country);
for($x = 0; $x < $arrlength; $x++) {
  echo("<pre>\n");
  echo $country[$x];
  echo "<br>";
  echo $fruits[$x];
  echo "<br>";
}

//PHP Associative Arrays
echo("<Pre>\n");
echo "PHP Associative Arrays";
$statecap = ['Gujarat' => 'Gandhinagar','UP' => 'Lucknow', 'MP' => 'Bhopal'];
echo '<br>';
echo $statecap['Gujarat'];
echo("<Pre>\n");

echo("<pre>\n");
echo 'Looping through PHP Associative Arrays';
foreach($statecap as $state => $capital){
    echo("<pre>\n");
    echo $state.' = '.$capital; 
}
//PHP two dimensional array
echo("<pre>\n");
$cars = [['volvo',22,18],['BMW',15,14],['Landrover',17,75]];
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[1][2];

// sort() -sort arrays in ascending order
// rsort() - sort arrays in descending order
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key

//Dumping an Array
//The function print_r() shows PHP data- it's good for debugging

$stuff = ['name'=>'vipul','web'=>'pantomathes'];

echo "<pre>\n";
print_r("$stuff"); //It will throw string conversion error
echo "<pre>\n";
print_r($stuff); //Here we removed quotes so it will dump array structure
echo "<pre>\n";
echo $stuff; //it would also throw error of array to string conversion.

//Var_dump vs print_r
echo "<pre>\n";
echo "<pre>\n";
var_dump($stuff);
echo "<pre>\n";
echo "This will add string details along with array";

$thing = FALSE;
echo "<pre>\n";
var_dump($thing);

//Building Up an Array

$va = [];
$va[] = "One";
$va[] = "Two";
$va[] = "Three";
$va[] = "four";
$va[] = "five";

echo "<pre>\n";
print_r($va);
echo "<pre>\n";
//same goes with key value

//counted loop through an Array
for($i = 0;$i < count($va);$i++){
    echo "I=",$i,"  Value=",$va[$i],"\n";
}

//Arrays of Arrays

$product = [
    'paper'=>[
        'copier'=>'copier & Multipurpose','inkjet'=>'Inkjet printer','laser'=>'Laser printer','photo'=>'Photographic paper'
    ],
    'pens'=>[
        'ball'=>'ball point','hillite'=>'Highlighters','marker'=>'Markers'
    ],
    'misc'=>[
        'tape'=>'Sticky tape','glue'=>'Adhesives','clips'=>'Paperclips'
    ]
];

echo "<pre>\n";
print_r($product);
echo "<pre>\n";
var_dump($product);
echo "<pre>\n";

?>

