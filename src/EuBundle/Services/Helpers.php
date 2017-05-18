<?php

namespace EuBundle\Services;

use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Response;

class Helpers {

    public $jwt;

    public function __construct($jwt) {
        $this->jwt = $jwt;
    }

    public function authCheck($hash, $getIdentity = false) {
        $jwt = $this->jwt;
        $auth = false;

        if ($hash != null) {
            if ($getIdentity == false) {
                $checkToken = $jwt->checkToken($hash);
                if ($checkToken == true) {
                    $auth = true;
                }
            } else {
                $checkToken = $jwt->checkToken($hash, true);
                if (is_object($checkToken)) {
                    $auth = $checkToken;
                }
            }
        }

        return $auth;
    }

    public function json($data) {
        $normalizers = array(new GetSetMethodNormalizer());
        $encoders = array("json" => new JsonEncode());

        $serializer = new Serializer($normalizers, $encoders);
        $json = $serializer->serialize($data, "json");

        $response = new Response();
        $response->setContent($json);
        $response->headers->set("Content-Type", "application/json");

        return $response;
    }

}
