

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
echo 'Дискриминант равен '. $D . '<br>';

if ($D>0) {
    $x1 = (-$b-bcsqrt($D))/(2*$a);
    $x2 = (-$b+bcsqrt($D))/(2*$a);
    echo '<math>' . '<mfrac beveled="true">' . '<mi>' . -$b . '-' . '<span class="radical">' . '&radic;' . $D . '</span>' . '</mi>' . '<mi>' . '2' . '*' . $a . '=' . $x1 . '</mi>' . '</mfrac>' . '</math>';


    echo 'x1 = ' . $x1 . '<br>';
    echo 'x2 = ' . $x2 . '<br>';
}
    elseif ($D<0) {
        echo 'Корней нет' . '<br>';
    }
        elseif ($D=0) {

        }

?>
<a href="../index.php">Вернуться</a>
