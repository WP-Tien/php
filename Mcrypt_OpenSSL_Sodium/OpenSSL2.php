<?php 

$key = sha1("secrectCrush", true);
$mess = "This mess to tell crush i luv her < 3 ";
$cipher = "aes-128-cbc";

$ivlen = openssl_cipher_iv_length($cipher);
$iv = openssl_random_pseudo_bytes($ivlen);
$ciphertext_raw = openssl_encrypt(
    $mess,
    $cipher,
    $key, 
    OPENSSL_RAW_DATA,               
    $iv
);
$hmac = hash_hmac('sha256', $ciphertext_raw, $key, true); //32
$ciphertext = base64_encode( $iv.$hmac.$ciphertext_raw );

// a few moments later ..... 
$c = base64_decode($ciphertext);
$iv = substr($c, 0, $ivlen);
$hmac = substr($c, $ivlen, $sha2len = 32);
$ciphertext_raw = substr($c, $ivlen + $sha2len);
$original_plaintext = openssl_decrypt(
    $ciphertext_raw,
    $cipher,
    $key,
    OPENSSL_RAW_DATA,
    $iv
);

$calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);

if(hash_equals($hmac, $calcmac)) { //PHP 5.6+ timing attack safe comparison
    echo $original_plaintext;
}
// var_dump($ciphertext);
// var_dump(bin2hex($c));
// var_dump(bin2hex($iv));
// var_dump($original_plaintext);


?>