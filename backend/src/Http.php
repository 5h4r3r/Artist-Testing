<?php

namespace Src;

class Http
{
    public static function response($code, array $data,$array = array('Content-type: application/json', 'Access-Control-Allow-Methods" : "GET,POST,PUT,DELETE,OPTIONS'))
    {
        header("HTTP/1.1 $code");

        for ($i = 0; $i < count($array); $i++) {
            header($array[$i]);
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}
