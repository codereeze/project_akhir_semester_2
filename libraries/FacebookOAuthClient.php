<?php

namespace Libraries;

use League\OAuth2\Client\Provider\Facebook;

class FacebookOAuthClient
{
    public $provider;

    public function __construct()
    {
        $dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
        $dotenv->load();

        $this->provider = new Facebook([
            'clientId' => $_ENV['FACEBOOK_APP_ID'],
            'clientSecret' => $_ENV['FACEBOOK_APP_SECRET'],
            'redirectUri' => $_ENV['FACEBOOK_REDIRECT_URI'],
            'graphApiVersion' => $_ENV['GRAPH_API_VERSION'],
            'scopes' => ['email', 'public_profile', 'user_phonenumbers']
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
