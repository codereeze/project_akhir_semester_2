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
        return new static;
    }

    public function withSuccess(string $message)
    {
        $_SESSION['success'] = $message;
    }

    public function withError(string $message)
    {
        $_SESSION['error'] = $message;
    }

    public function indicatorMessage()
    {
        if (isset($_SESSION['success'])) {
            return 'success';
        } else if (isset($_SESSION['error'])) {
            return 'error';
        } else {
            return false;
        }
    }

    public function displaySuccessMessage()
    {
        if (isset($_SESSION['success'])) {
            echo $_SESSION['success'];
            unset($_SESSION['success']);
        }
    }

    public function displayErrorMessage()
    {
        if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        }
    }
}
