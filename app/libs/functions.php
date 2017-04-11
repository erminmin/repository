<?php

    function P($aa=""){
        if(isset($_GET[$aa])){
            return $_GET[$aa];
        }else if(isset($_POST[$aa])){
            return $_POST[$aa];
        }else{
            return false;
        }
    }





