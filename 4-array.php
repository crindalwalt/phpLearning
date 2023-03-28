<?php
// array
$arr = array("Shahzad","Gulzaib","Farooq","Adil","Asad","Ali Imran");

echo var_dump($arr);
echo '<br><br>';

// array_push($arr,"Yaseen");
// echo var_dump($arr);

// echo '<br><br>';
// array_pop($arr);
// echo var_dump($arr);

// echo '<br><br>';
// array_pop($arr);
// echo var_dump($arr);
// echo $arr[2];


$arr2D = array(
   'name' => 'shahzad',
   'age' => 19,
   'friends' => array("Muhtshim","Gulzaib","Zaid"),
);
// echo var_dump($arr2D);

echo $arr2D['friends'][1];

