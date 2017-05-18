<?php

namespace EuBundle\Services;

use Firebase\JWT\JWT;

class JwtAuth {

    public $manager;
    public $key = "userPass-secreta";

    public function __construct($manager) {
        $this->manager = $manager;
    }

    public function signup($userName, $userPass, $getHash = NULL) {
        $key = $this->key;
        $user = $this->manager->getRepository("EuBundle:Usuario")->findOneBy(
                array("usuEmail" => $userName,
                    "usuClave" => $userPass));
      
 
        $signup = false;
        if (is_object($user)) {
            $signup = true;
        }

        if ($signup == true) {

            $token = array(
                "id" => $user->getId(),
                "userName" => $user->getUsuEmail(),
                "userPass" => $user->getUsuClave(),
                "userTipo" => $user->getTipoUsuarioId(),
                
                "iat" => time(),
                "exp" => time() + (7 * 24 * 60 * 60)
            );


            $this->manager->persist($user);
            $this->manager->flush();

            $jwt = JWT::encode($token, $key, "HS256");
            $decode = JWT::decode($jwt, $key, array("HS256"));

            if ($getHash != null) {
                return $jwt;
            } else {
                return $decode;
            }
        } else {
            return array("status" => "error", "data" => "Fallo el Login");
        }
    }

    public function checkToken($jwt, $getIdentity = false) {
        $key = $this->key;
        $auth = false;

        try {
            $decode = JWT::decode($jwt, $key, array("HS256"));
        } catch (\UnexpectedValueException $e) {
            $auth = false;
        } catch (\DomainException $e) {
            $auth = false;
        }

        if (isset($decode->id)) {
            $auth = true;
        } else {
            $auth = false;
        }

        if ($getIdentity == true) {
            return $decode;
        } else {
            return $auth;
        }
    }

}
