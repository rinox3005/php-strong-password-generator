<?php

function passwordRandomizer($length, $let, $num, $sym)
{
    // Utilizzo 4 stringhe di caratteri e uso str_split per traformarli in array
    $lowLetters = str_split('abcdefghijklmnopqrstuvwxyz');
    $uppLetters = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    $numbers = str_split('0123456789');
    $symbols = str_split('!@#$%^&*()-_=+[]{}|;:,.<>?/');

    // Creo un nuovo array unendo i 4 array generati precedentemente
    $arrayOfChar = [];

    if ($let == 'on' || $num == 'on' || $sym == 'on') {
        if ($let == 'on') {
            $arrayOfChar = array_merge($lowLetters, $uppLetters);
        }
        if ($num == 'on') {
            $arrayOfChar = array_merge($arrayOfChar, $numbers);
        }
        if ($sym == 'on') {
            $arrayOfChar = array_merge($arrayOfChar, $symbols);
        }
    } else {
        $arrayOfChar = array_merge($lowLetters, $uppLetters, $numbers, $symbols);
    }

    // Mescolo i caratteri del nuovo array
    shuffle($arrayOfChar);

    // Utilizzo un ciclo for per generare la password randomizzando il carattere da concatenare alla password
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $arrayOfChar[array_rand($arrayOfChar)];
    }
    // Restituisco la password generata
    return $password;
}
