//************************************************************************
// Author: Misael Cuadrado
// Date: Sep/6/2024.
// Language: PHP
// Assignment: Lab 2 - PHP Array
// Description: This program creates an array of 7 numbers, outputs each
//              number on a separate line, alternating between blue and red,
//              and applies some basic CSS formatting.
//************************************************************************

<?php
// use PHP to display the title of the program
echo "<h1>Using an Array to Add Numbers</h1>";

// use PHP to display your name inside paragraph tags
echo "<p>Name: Misael Cuadrado</p>";

// create an array of 7 numbers
$numbersArray = array(3, 5, 8, 13, 21, 34, 55);

// initialize a counter to alternate colors
$counter = 0;

// use a loop to output each number on a separate line
foreach($numbersArray as $number) {
// alternate colors between blue and red
    if ($counter % 2 == 0) {
        echo "<p style='color: blue;'>Number: $number</p>";
    } else {
        echo "<p style='color: red;'>Number: $number</p>";
    }
    $counter++;
}
?>

<!-- Add CSS styling -->
<style>
    /* styling for the title */
    h1 {
        color: blue;
        font-family: Arial, sans-serif;
        text-align: center;
    }

    /* styling for the name paragraph */
    p {
        font-size: 18px;
        font-family: Verdana, sans-serif;
        text-align: center;
    }

    /* adding background color to the body */
    body {
        background-color: #f0f0f0;
    }
</style>
