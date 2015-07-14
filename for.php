<?php
// Make sure you are only allowing users to pass in numbers

// Prompt user for a starting number and ending number
fwrite(STDOUT, 'Please pick a starting number: ' ) . PHP_EOL;
    $start = trim(fgets(STDIN));

while($start != is_numeric($start)){
    fwrite(STDOUT, 'That entry was not a valid number. Please try again: ');
    $start = trim(fgets(STDIN));
}

fwrite(STDOUT, 'Please pick a ending number: ') . PHP_EOL;
    $end = trim(fgets(STDIN));

while($end != is_numeric($end)){
    fwrite(STDOUT, 'That entry was not a valid number. Please try again: ');
    $start = trim(fgets(STDIN));
}
// Refactor to allow user to choose increment (count by 1, 2, 10, ...)
fwrite(STDOUT, 'Please pick an increment: ') . PHP_EOL;
    $increment = trim(fgets(STDIN));

// Default increment to 1 if no input
if ($increment == 0){
    $increment++;
}

// Display all the numbers from the starting to ending using a for loop
for ($a = $start; $a <= $end; $a += $increment){
    echo "$a" . PHP_EOL;
}
?>