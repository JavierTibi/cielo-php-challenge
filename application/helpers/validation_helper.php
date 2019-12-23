<?php

function validate($data) {
    if (validateName($data['name']) && validateEmail($data['email']) && validateDOB($data['date_of_birth']) && validateColor($data['favorite_color'])) {
        return true;
    }
    return false;
}

function validateName($name) {
    if($name) {
        return true;
    }
    return false;
}

function validateEmail($mail) {
    if($mail) {
        if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
    }
    return false;
}

function validateDOB($date) {
    $ar = preg_split('/[- :]/',$date);
    if($date) {
        if(checkdate($ar[1], $ar[2], $ar[0])){
            return true;
        }
    }
    return false;
}

function validateColor($color) {
    if ($color) {
        $arr_color = array("blue", "red", "green", "orange", "black", "white");
        if (in_array($color, $arr_color)) {
            return true;
        }
    }
    return false;
}