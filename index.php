<?php
$b = 0;
$a = rand(-25, 30);

//echo round ($a);
if ($a > $b) {
    echo "<span style = \" color: red;\">Тепло!</span>";
} elseif ($a == $b) {
    echo "Не мороз и не тепло…";
} else {
    echo "<span style = \" color: blue;\">Мороз!</span>";
}
?>