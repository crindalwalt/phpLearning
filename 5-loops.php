<?php

// echo "loops file is working";

$friends = array(
    "Gulzaib", "Shahzad", "Ahmed", "Adnan", "Habeel", "Bazaid", "Talha"
);
$arr2D = array(
    'name' => 'shahzad',
    'age' => 19,
    'friends' => array("Muhtshim", "Gulzaib", "Zaid"),
);


// echo var_dump($friends);

//============================================
//  FOR Loop
//============================================
// for(let i = 0;i<array.length;i++){
//     console.log(array[i]);
// }
// echo "<div style='background-color:#333333;padding:1rem;border-radius:.5rem'>";
// for ($i = 0; $i < count($friends); $i++) {
//     echo  "<li style='padding:1rem;background-color:gainsboro;border-radius:.5rem;margin:.5rem ; display:inline-block;'>$friends[$i]</li>";
// }

// echo "</div>";


//============================================
//  WHILE Loop
//============================================

// echo "<div style='background-color:#83a0bf;padding:1rem;border-radius:.5rem'>";


$i = 0;
// while($i<count($friends)){
//     echo  "<li style='padding:1rem;background-color:gainsboro;border-radius:.5rem;margin:.5rem ; display:inline-block;'>$friends[$i]</li>";


//     $i++;
// }
// echo "</div>";


//============================================
// DO WHILE Loop
//============================================

// do{
//     echo $friends[$i] . "<br>";

//     $i++;
// }while($i<count($friends));


//============================================
// For Each Loop
//============================================


// foreach($friends as $friend){
//     echo $friend . "<br>";
// }

$arr2D = array(
    'name' => 'shahzad',
    'age' => 19,
    'friend' => "Gulzaib",
    'courses' => array(
        "Urdu", "Islamiyat", "English", "Iqbaliyat", "Science", "Chemistry", "Physics"
    ),
    'marks' => array(
        "Urdu" => 80,
        "Islamiyat" => 90,
        "English" => 70,
        "Iqbaliyat" => 55,
        "Science" => 100,
        "Chemistry" => 98,
        "Physics" => 50
    ),
);

foreach ($arr2D as $key => $value) {
    echo $key . " is " . $value;
    echo '<br><br>';
}

// foreach($arr2D['courses'] as $course){
//     echo '<br><br>';

//     echo $course;
// }

foreach ($arr2D['marks'] as $subject => $marks) {
    echo  "<li style='padding:1rem;background-color:gainsboro;border-radius:.5rem;margin:.5rem ; display:inline-block;'>$subject = $marks</li>";
}
