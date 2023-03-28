<?php

echo "file from switch case is working";
echo '<br><br>';

$age = 15;
switch ($age) {
    case 12:
        echo "age is 12 years old";
        break;
    case 15:
        echo "age is 15 years old";
        break;
    case 18:
        echo "age is 18 years old";
        break;
    default:
        echo "<p style='color:red;font-weight:bold;'>invalid choice</p>";
        break;
}
