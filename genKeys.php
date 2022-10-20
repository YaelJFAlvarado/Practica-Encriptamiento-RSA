<?php
    $configArgs = array(
        "config" => "C:/xampp/php/extras/openssl/openssl.cnf",
        'private_key_bits' => 2048,
        'default' =>  "sha256"
    );
    $gen = openssl_pkey_new($configArgs);
    openssl_pkey_export($gen,$keypriv, NULL,$configArgs);
    $keyPub = openssl_pkey_get_details($gen);
    file_put_contents('privada.key',$keypriv);
    file_put_contents('publica.key',$keyPub['key']);
?>