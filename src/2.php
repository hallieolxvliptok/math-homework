 <?php

function getRandomNumber($min, $max)
{
    return mt_rand($min, $max);
}

$random = getRandomNumber(1, 10);
echo $random;

?>