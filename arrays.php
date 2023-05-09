<?php
//creating arrays
$cars = array('BMW','Nissan','Pagani','Skoda','Lotus');
//accessing
print_r($cars);
echo"</br>";
echo"I love " .$cars[0]." alot";
echo"</br>";
//looping arrays
$arrlength=count($cars);
for($x=0 ; $x < $arrlength ; $x++) {
echo $cars[$x];
echo"</br>";
}
//associative array(has a value and a key)
$age = array('Christian'=>'20','Tiff'=>'10','Maru'=>'16','Daisy'=>'19');
print_r($age);
echo"</br>";
//looping associative array use a foreach loop
foreach($age as $key=> $value){
    echo "I am ".$key." and I'm " .$value ." years old";
    echo"</br>";
}
//multidimensional arrays
$multiarray = array(
    array("Mercy","Kinsley","Megan The ","Jed"),
    array("Veronica","Stallion","Roddy","Dave")
);
//accessing the array
print_r($multiarray);
echo"</br>";
echo "My Name is ".$multiarray[0][2] .$multiarray[1][1];
echo"</br>";

$data = [
    'Better Call Saul'=>['Saul Goodman','Lalo','Jimmy McGill'],
    'Breaking Bad'=>['Walter White','Jesse Pinkman','Gustavo Fring','Heisenberg']
];
echo '<h1> BEST TV SHOW AND CAST';
foreach($data as $series => $actors){
    echo "<h2>$series</h2>";
    foreach($actors as $actor){
        echo"<div>$actor</div>";
    }
}
?>