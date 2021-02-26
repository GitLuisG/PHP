<?php

class Mcript {
    /*
      Encripta el contenido de la variable, enviada como parametro.
     */
    static public function encriptar($valor) {
        return openssl_encrypt($valor, Server_HASH['METHOD'], Server_HASH['CLAVE'], false, Server_HASH['IV']);
    }

    /*
      Desencripta el texto recibido
     */
    static public function desencriptar($valor) {
        $encrypted_data = base64_decode($valor);
        return openssl_decrypt($valor, Server_HASH['METHOD'], Server_HASH['CLAVE'], false, Server_HASH['IV']);
    }

    /*
      Genera un valor para IV
     */
    static public function getIV() {
        return base64_encode(openssl_random_pseudo_bytes(openssl_cipher_iv_length(Server_HASH['METHOD'])));
    }

}
