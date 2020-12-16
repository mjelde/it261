<?php

// random and count functions

//$dice = rand(1, 6);
//echo $dice;

//$dice1 = rand(1, 6);
//$dice2 = rand(1, 6);
//echo $dice1;
//echo '<br>';
//echo $dice2;

$dice1 = rand(1, 6);
$dice2 = rand(1, 6);
if($dice1 == $dice2) {
    echo 'You\'ve got a double';
} else {
    echo '<br>';
    echo 'You don\'t';
}

//$photos = array('photo1', 'photo2', 'photo3', 'photo4', 'photo5', 'photo6', 'photo7');
//$photos = ['photo1', 'photo2', 'photo3', 'photo4', 'photo5', 'photo6', 'photo7'];

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';
$photos[5] = 'photo6';
$photos[6] = 'photo7';

$i = rand(0, count($photos)-1);
$selectedImages = 'images/'.$photos[$i].'.jpg';
echo '<img src="'.$selectedImages.'">';

