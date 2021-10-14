<?php
function encrypt($data, $key = "1235@")
{
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted = openssl_encrypt($data, "aes-256-cbc", $key, 0, $iv);
    // return the encrypted string with $iv joined 
    return base64_encode($encrypted . "::" . $iv);
}

/**
 * function to decrypt
 * @param string $data  
 * @param string $key
 */
function decrypt($data, $key = "1235@")
{
    list($encrypted_data, $iv) = explode('::', base64_decode($data), 2);
    $result = openssl_decrypt($encrypted_data, 'aes-256-cbc', $key, 0, $iv);
    echo $result;

    return $result;
}
