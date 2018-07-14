<?php
/**
 * Created by PhpStorm.
 * User: freud
 * Date: 6/23/2018
 * Time: 1:19 PM
 */

namespace AppBundle\Services;


use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class CustomSerializer
{
    public function serializeJson($data)
    {
//        if (isset($data)) {
//        var_dump($data);
            $encoders = array(new JsonEncoder());
            $normalizers = array(new ObjectNormalizer());
            $serializer = new Serializer($normalizers, $encoders);

            $jsonContent = $serializer->serialize($data, 'json');
//            var_dump($jsonContent);
            $jsonContent = json_decode($jsonContent, true);
//        } else {
//            $jsonContent = "No data to display";
//        }

        return $jsonContent;
    }
}