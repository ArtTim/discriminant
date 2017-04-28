

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
?>

Дискриминант равен <?=$D;?><br>

<?PHP if ($D>0) :?>
    <?php
    $x1 = (-$b-bcsqrt($D))/(2*$a);
    $x2 = (-$b+bcsqrt($D))/(2*$a);
    ?>
    <math> <mfrac beveled="true">
            <mi>
                <?=-$b;?> -
                <span class="radical">&radic;<?=$D;?></span>
            </mi>
            <mi>
                2*<?=$a;?>=<?=$x1;?>
            </mi>
        </mfrac>
    </math>
    <br>
    x1 = <?=$x1;?><br>
    x2 = <?=$x2;?><br>
    <? elseif($D<0):?>
        Корней нет<br>
    <?php else : ?>
        d=0
<?php endif;?>
<a href="../index.php">Вернуться</a>
