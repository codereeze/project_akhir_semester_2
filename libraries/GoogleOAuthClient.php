<?php

namespace Libraries;

use App\Models\User;
use League\OAuth2\Client\Provider\Google;

class GoogleOAuthClient
{
    public $provider;

    public function __construct()
    {
        $dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
        $dotenv->load();

        $this->provider = new Google([
            'clientId' => $_ENV['GOOGLE_CLIENT_ID'],
            'clientSecret' => $_ENV['GOOGLE_CLIENT_SECRET'],
            'redirectUri' => $_ENV['GOOGLE_REDIRECT_URI']
        ]);
    }

    public function getCode()
    {
        if (!isset($_GET['code'])) {
            $authorizationUrl = $this->provider->getAuthorizationUrl();
            $_SESSION['oauth2state'] = $this->provider->getState();

            Response::redirect($authorizationUrl);
        } elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {
            unset($_SESSION['oauth2state']);
            exit('Invalid state');
        }
    }
}
