<?php

$cipher = "AES-256-CBC";
$ivlen = openssl_cipher_iv_length($cipher);
$raw=openssl_random_pseudo_bytes($ivlen);
var_dump($raw);
