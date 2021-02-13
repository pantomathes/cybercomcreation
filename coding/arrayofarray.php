<?php
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
echo $product['misc']['glue'];
echo "<pre>\n";
echo $product['pens']['marker'];
echo "<pre>\n";
echo $product['paper']['photo'];
echo "<pre>\n";
echo $product['misc'];//Will throw string conversion error
echo "<pre>\n";
print_r($product['paper']['inkjet']);
echo "<pre>\n";
print_r($product['pens']);

//Array functions
//array_key_exists($key,$ar) - returns True if is set in the array
// isset($ar['key'])- returns True if key is set in the array
// count($ar)-How many elements in an array
// is_array($ar)-returns true if the variable is an array
// sort($ar) -Sorts the array values (loses key)
// ksort($ar) -sorts the array value by key
// asort($ar)- Sorts the array by value, keeping the association
// shuffle($ar)-shuffles the array into random order

//Array exists/isset or not function

if(array_key_exists('pens',$product)){
    echo "pen exists\n";
}
else{
    echo "Pen not exists\n";
}

echo (array_key_exists('paper',$product)) ? "Paper exists\n" : "Paper not exists\n";
echo (isset($product['misc'])) ? "Misc set\n" : "Misc not set\n";
echo (isset($product['misce'])) ? "Misce set\n" : "Misce not set\n";

//equivalent
echo "<pre>\n";
echo $product['pens']['marker'] ??  "got nothing\n";
echo "<pre>\n";
echo $product['pens']['markers'] ??  "got nothing\n";
echo "<pre>\n";
echo $product['pens']['markers'] ?? $product['paper']['copier'] ?? "got nothing\n"; 
//we don't need to use this ':' ternary operator

//exploding Arrays

$word = "We will explode this in array let's see how?";
$explodearray = explode(' ',$word); //syntax $variable = explode('delimeter',$variabletobeexploded);
echo "<pre>";
print_r($explodearray);

?>

