<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['c']) && isset($_POST['d'])) {
        $c = (int)$_POST['c'];
        $d = (int)$_POST['d'];

        $sum = $c + $d;
        $product = $c * $d;
        $difference = $c - $d;
        $quotient = $d != 0 ? $c / $d : 'Неможливо ділити на нуль';

        echo "<p>Сума: $c + $d = $sum</p>";
        echo "<p>Добуток: $c * $d = $product</p>";
        echo "<p>Різниця: $c - $d = $difference</p>";
        echo "<p>Частка: $c / $d = $quotient</p>";
    } else {
        echo "<p>Будь ласка, введіть значення для 'c' і 'd'.</p>";
    }
} else {
    echo "<p>Будь ласка, використовуйте форму для відправки даних.</p>";
}
?>