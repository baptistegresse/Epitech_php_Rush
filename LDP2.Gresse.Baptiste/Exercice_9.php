<?php

$tab0 = ['Goodbye', 'Dennis'];

$tab1 = ['U', 'DUN', 'GOOFED'];

$tab2 = ['name'=>'Glenn','first_name'=>'kenny','pets'=>'dusty','crime'=>'animal abuse','achievement'=>'goofed'];

$tab3 = ['bananas', 'apple','fish'=>'sharktopus', 'lemon', 'pineapple', 'pear', 'cherry'];

$tab4 = ['x-men', 'spiderman','great saiyaman','iron man','superman', 'batman','wolverine', 'hulk'];


function onlyTheBest($array) {
    $str = "";
    foreach($array as $key => $value) {
        if(strlen($value) > strlen($str)) {
            $str = $value;
        }
    }
    echo $str;
}

onlyTheBest($tab0); 