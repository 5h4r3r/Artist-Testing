<?php

namespace Http;

class Http
{
    public static function response($code, array $data,$array = array('Content-type: application/json'))
    {
        header("HTTP/1.1 $code");

        for ($i = 0; $i < count($array); $i++) {
            header($array[$i]);
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}
