<?php

namespace FUNK1;

function callme(string $first, string $mid, string $last){
echo "Hello my name is $first $mid $last".PHP_EOL;
}

function CallMyName(string $first, string $mid = "", string $last, string $final){
    echo "Hello my name is $first $mid $last $final".PHP_EOL;
}