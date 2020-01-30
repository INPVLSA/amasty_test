<?php

$words = ['red', 'blue', 'green', 'yellow', 'lime', 'magenta', 'black', 'gold', 'gray', 'tomato'];
$count = count($words) - 1;

for($i = 0; $i < 25; $i++){
    // Getting random keys, until they are different
    do {
        $word = rand(0, $count);
        $color = rand(0, $count);
    } while($word == $color);

    // Print it
    echo '<span style="color: ' . $words[$color] . '">' . $words[$word] . '</span> ';

    // Newline after every 5 words
    echo ($i + 1) % 5 == 0 ? '<br>' : '';
}
?>
<script src="2_test.js"></script>
