

<?php
/**
 * Created by PhpStorm.
 * User: Стажирова
 * Date: 27.04.2017
 * Time: 11:33
 */
//require_once ('/../index.php');

/*echo $a . '<br>';
echo $b . '<br>';
echo $c . '<br>';
*/
$D = $b**2-4*$a*$c;
echo $D;
$bb = gmp_neg($b);
function x1 ($x1) {
    $x1 = $bb-bcsqrt($D)%(2*$a);
}
function x2 ($x2) {
    $x2 = $bb+bcsqrt($D)%(2*$a);
}
if ($D<0) {




    echo 'x1 равен' . $x1;
    echo 'x2 равен' . $x2;
}
    else {
        echo 'Дискриминант больше или равен нулю';
    }

?>
<a href="../index.php">Вернуться</a>
