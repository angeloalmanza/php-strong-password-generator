<?php
function generatePassword($lunghezza) {
    $characters = array_merge(range(0, 9), range("a","z"), range("A","Z"), str_split('!@#$%^&*()-_=+'));
    $password = "";
    $max = count($characters) - 1;

    for ($i = 0; $i < $lunghezza; $i++) {
        $password .= $characters[rand(0, $max)];
    }

    return $password;
}
?>