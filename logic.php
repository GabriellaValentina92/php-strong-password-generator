<?php 
    $passLength = $_GET['pass_number'];
    $letters = range('a', 'z');
    $numbers = [1, 3, 5, 7, 9, 2, 4, 12, 14, 92, 33, 48, 66, 208, 10];
    $symbols = ['@', '_', '&', '#', '*', '-', '/',];

    function GeneratePassword($passLength, $letters, $numbers, $symbols){
        if($passLength){
            $arrMerged = array_merge($letters, $numbers, $symbols);
            shuffle($arrMerged);
            $arrToString = implode($arrMerged);
            return substr($arrToString, 0, $passLength); 
        }

    }