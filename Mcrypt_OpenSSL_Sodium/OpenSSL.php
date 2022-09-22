<?php 
$cipher = "aes-128-gcm";
$data = "This is message to send to crush";
$iv = random_bytes(16);
// var_dump(bin2hex($iv));
$key = sha1('secrectKey', true); // I use Sha1 method to create key !
// var_dump(bin2hex($key));

$ciphertext = openssl_encrypt(
    $data,
    $cipher,
    $key,
    OPENSSL_RAW_DATA,
    $iv,
    $tag
);

if (false == $ciphertext) {
    throw new Exception ('Error on encrypt');
}

var_dump(bin2hex($ciphertext));

$orginal_plaintext = openssl_decrypt(
    $ciphertext, 
    $cipher,
    $key,
    OPENSSL_RAW_DATA,
    $iv, 
    $tag
);

echo "After enscrypt -> ". $orginal_plaintext;

?>
