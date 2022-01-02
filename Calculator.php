<?php
const PATTERN = "/[A-Za-z]/";

function calc($input){
    if (preg_match(PATTERN,$input)){
        return "<br>Please enter a valid math phrase!";
    } else{
        $output = eval('return '.$input.';');
        return "<br>". $output;
    }
}