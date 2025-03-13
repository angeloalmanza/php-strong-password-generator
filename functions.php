<?php
function generatePassword($lunghezza, $lowercase, $uppercase, $numbers, $symbols) {
    $characters = [];
    
    if ($lowercase) {
        $characters = array_merge($characters, range('a', 'z'));
    }
    if ($uppercase) {
        $characters = array_merge($characters, range('A', 'Z'));
    }
    if ($numbers) {
        $characters = array_merge($characters, range(0, 9));
    }
    if ($symbols) {
        $characters = array_merge($characters, str_split('!@#$%^&*()-_=+'));
    }
    
    if (empty($characters)) {
        return "Nessun set di caratteri selezionato.";
    }

    // Generazione della password
    $password = '';
    $max = count($characters) - 1;

    for ($i = 0; $i < $lunghezza; $i++) {
        $password .= $characters[rand(0, $max)];
    }

    return $password;
}
?>