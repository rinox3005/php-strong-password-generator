<?php

function passwordRandomizer($length, $let, $num, $sym, $repeat)
{
    // Define character sets as strings
    $lowLetters = 'abcdefghijklmnopqrstuvwxyz';
    $uppLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()-_=+[]{}|;:,.<>?/';

    // Initialize empty string for merged characters
    $string = '';

    // Merge selected character sets based on input flags
    if ($let == 'on' || $num == 'on' || $sym == 'on') {
        if ($let == 'on') {
            $string .= $lowLetters . $uppLetters;
        }
        if ($num == 'on') {
            $string .= $numbers;
        }
        if ($sym == 'on') {
            $string .= $symbols;
        }
    } else {
        // If no specific sets are selected, use all
        $string .= $lowLetters . $uppLetters . $numbers . $symbols;
    }

    // Initialize password variable
    $password = '';

    // Generate password based on repeat flag
    if ($repeat == 'on') {
        $stringLength = strlen($string);
        for ($i = 0; $i < $length; $i++) {
            $char = $string[rand(0, $stringLength - 1)];
            $password .= $char;
        }
    } else {
        // Non-repeating version: shuffle and slice string to desired length
        $shuffledstring = str_shuffle($string);
        $password = substr($shuffledstring, 0, $length);
    }

    // Return the generated password
    return $password;
}
