<?php

namespace EuBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * EU controller.
 *
 */
class EUController extends Controller {

    public function indexAction(Request $request) {
        return $this->render('EuBundle:Eu:index.html.twig', array("deg" => deg2rad(1), "rad" => rad2deg(1)));
    }

    public function negociosAction(Request $request, $uuid) {
        //llamo al manager de doctrine
        $em = $this->getDoctrine()->getManager();
        //traigo todos los negocios y obtengo el punto de cada uno
        $negocios = $em->getRepository('EuBundle:Negocio')->findAll();
//
//creo un array de respuesta
        $negocioDatos = array();
        $negocioArray = array();
        //recorro el array 
        foreach ($negocios as $nego) {
            //calculo las distancias
//            $latitudNegocio = $nego->getNegocioGpsLatitud();
//            $logitudNegocio = $nego->getNegocioGpsLongitud();
//
//            $latitudDispositivo = $latitud;
//            $logitudDispositivo = $longitud;
//
//            $theta = $logitudNegocio - $logitudDispositivo;
//            $dist = sin(deg2rad($latitudNegocio)) * sin(deg2rad($latitudDispositivo)) +
//                    cos(deg2rad($latitudNegocio)) * cos(deg2rad($latitudDispositivo)) * cos(deg2rad($theta));
//            $dist = acos($dist);
//            $dist = rad2deg($dist);
//            $miles = $dist * 60 * 1.1515;
//
//            //distancia pasada a metro.
//            $distancia = ($miles * 1.609344) * 1000;
////solo para proabar
//            // ----------------
//            $distancia = $distancia - 61;
            // -------------------
//cargo el array con las distancias del dispositivo a los negocios. 
//            $distancias[] = $distancia;
            //si la distancia es muy sercana, agrego los datos de la promo
//            if ($distancia < 15) {

            $promocion = $em->getRepository('EuBundle:Promo')->findOneBy(array('negocio' => $nego));

            if ($promocion) {
                $negocioDatos["negocioNombre"] = $nego->getNegocioNombre();
                $negocioDatos["negocioLogo"] = $nego->getNegocioFoto();
                $negocioDatos["PromoId"] = $promocion->getId();
                $negocioDatos["PromoTitulo"] = $promocion->getPromoTitulo();
                $negocioDatos["PromoDescripcion"] = $promocion->getPromoDescrip();
                $negocioDatos["PromoPrecio"] = $promocion->getPromoPrecio();

                $descuento = $promocion->getPromoDescuento();
                $totalDescuento = $descuento * $promocion->getPromoPrecio() / 100;
                $negocioDatos["PromoDescuento"] = $totalDescuento;
                $negocioDatos["NegocioGpsLatitud"] = $nego->getNegocioGpsLatitud();
                $negocioDatos["NegocioGpsLongitud"] = $nego->getNegocioGpsLongitud();
                $negocioDatos["Distancia"] = "";

// agrego los datos de la promo al array.
                $negocioArray[] = $negocioDatos;
            }
//            }
        }

        //creo una variable axiliar para determinar la menor distancia.
//        $aux = $distancias[0];
//
//        //recorro el array para encontrar la menor distancia.
//        foreach ($distancias as $dist) {
//            if ($aux > $dist) {
//                $aux = $dist;
//            }
//        }
//        $textoRespuesta = "";
        //pregunto por la ubicacion del dispositivo, 
        //si se encuentra serca de algun negocio, paso una bandera de prioridad.
//        switch ($aux) {
//            case ($aux < 50): {
//                    //asigno un tiempo de iteracion dependiendo de la prioridad
//                    //20 segundos
//                    $tiempoDeIteracion = 20000;
//                    $textoRespuesta = "Hay promos serquita";
//                    break;
//                }
//            case ($aux < 100): {
//                    //asigno un tiempo de iteracion dependiendo de la prioridad
//                    //40 segundos
//                    $tiempoDeIteracion = 40000;
//                    $textoRespuesta = "Hay promos algo serca";
//                    break;
//                }
//            case ($aux < 200): {
//                    //asigno un tiempo de iteracion dependiendo de la prioridad
//                    //60 segundos
//                    $tiempoDeIteracion = 60000;
//                    $textoRespuesta = "Hay promos no muy lejos";
//                    break;
//                }
//            default : {
//                    //asigno un tiempo de iteracion dependiendo de la prioridad
//                    //60 segundos
//                    $tiempoDeIteracion = 600000;
//                    $textoRespuesta = "No hay promos sercas";
//                    break;
//                }
//        }
//
//        //retorno los datos obtenidos
//        $respuesta["tiempoDeIteracion"] = $tiempoDeIteracion;
//        $respuesta["textoRespuesta"] = $textoRespuesta;

        $data = array('respuesta' => $negocioArray);
//        $callback = $this->getRequest()->get('callback'); // Check to see if callback parameter is in URL
        $callback = $request->get('callback');
        $response = new JsonResponse(); // Construct a new JSON response
        if (isset($callback))
            $response->setCallback($callback); // Set callback function to variable passed in callback
        $response->setData($data);
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Headers', 'origin, content-type, accept');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Allow-Methods', 'POST, GET, PUT, DELETE, PATCH, OPTIONS');
        return $response;
    }

}

?>
