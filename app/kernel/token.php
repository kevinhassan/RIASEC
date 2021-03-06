<?php
    use \Firebase\JWT\JWT;

/**
 * Décoder un token passé en paramètre
 * @param $token string contenant un tableau à décrypter
 * @return string
 */
    function decodeToken($token){
        $key = 'maPhraseS3cr3ete';
        $token = (array) JWT::decode($token,$key,array('HS256'));
        $token["data"] = (array) $token["data"];
        return $token;
    }

/**
 * Générer un token à partir d'un tableau associatif
 * @param $data array contenant les données de l'utilisateur à crypter
 * @return string
 */
    function generateToken($data){
        $key = 'maPhraseS3cr3ete';
        $issuedAt   = time();
        $expire     = $issuedAt + (3600 *25);    // 24*3600 secondes
        $serverName = $_SERVER["HTTP_HOST"];     // Récupère le nom du server
        /**
         * Créer le token comme un tableau
         **/
        $token = Array(
            'iat'  => $issuedAt,         // Date de création du token
            'iss'  => $serverName,       // Nom du server qui à délivré le token
            'exp'  => $expire,           // Date d'expiration (24h après la génération)
            'data' => $data              // Donnée sur l'utilisateur
        );
        $token = JWT::encode($token, $key);
        return $token;
    }

/**
 * Verifier que le token est présent et que son rôle est aministrateur
 * @return bool
 */
    function estAdmin(){
        return isset($_COOKIE["token"]) && decodeToken($_COOKIE["token"])["data"]["role"] === 'admin';
    }
/**
 * Verifier que le token est présent et que son rôle est étudiant
 * @return bool
 */
    function estEtudiant(){
        return isset($_COOKIE["token"]) && decodeToken($_COOKIE["token"])["data"]["role"] === 'etudiant';
    }

?>
