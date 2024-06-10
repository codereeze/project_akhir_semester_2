<?php

namespace Libraries;

class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }

    public static function redirect(string $url)
    {
        header("Location: $url");
    }
}
