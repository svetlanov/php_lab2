<?php
// цикл for
$a = 0;
$b = 0;

for ($i = 0; $i <= 5; $i++) {
   $a += 10;
   $b += 5;
   if($i<5) {
   echo "Intermediate value a = $a, b = $b<br>";
   }
}

echo "End of the loop: a = $a, b = $b<br>";

// оператор while
$a = 0;
$b = 0;
$i = 0;

while ($i <= 5) {
    $a += 10;
    $b += 5;
    if($i<5) {
    echo "Intermediate value a = $a, b = $b<br>";
    }
    $i++;
}

echo "End of the loop: a = $a, b = $b<br>";

// оператор do-while
$a = 0;
$b = 0;
$i = 0;

do {
    $a += 10;
    $b += 5;
    if($i<5) {
        echo "Intermediate value a = $a, b = $b<br>";
    }
    $i++;
} while ($i <= 5);

echo "End of the loop: a = $a, b = $b";
