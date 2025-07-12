<?php
// Function to generate a random password
function generatePassword($length = 12) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{}|;:,.<>?';
    $password = '';
    $charsLength = strlen($chars);

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = random_int(0, $charsLength - 1);
        $password .= $chars[$randomIndex];
    }

    return $password;
}

// Example usage:
$num = random_int(7, 16);
$generatedPassword = generatePassword($num);
echo "Generated Password: " . $generatedPassword;
echo "\n";
?>