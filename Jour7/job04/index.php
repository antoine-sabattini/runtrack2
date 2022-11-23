
<?php

function calcul($a, $b)
{
    $add = $a+$b;
    $sous = $a-$b;
    $multi = $a*$b;
    $div = $a/$b;
    return array($add, $sous, $multi, $div);
}
//entrez les chiffres a calculer//
list($add, $sous, $multi, $div) = calcul(40, 2);

echo 'Résultat d\'adition : '.$add.'<br />';
echo 'Résultat de soustraction : '.$sous.'<br />';
echo 'Résultat de multiplication : '.$multi.'<br />';
echo 'Résultat division : '.$div.'<br /> ';
?>
