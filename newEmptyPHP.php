<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $n);

$bloco = "";
$space = " ";

$noOfSpaces = 0;
$charCount = 0;

for ($i = 0; $i < $n; $i++) {
    printf("%* ", $n-$i, "#");
    for ($j = 0; $j < $i; $j++) {
        printf("#");
    }
    printf("\n");
}




#
##
###
####
##### 