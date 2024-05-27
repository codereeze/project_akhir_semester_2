<?php

namespace Framework;

use League\OAuth2\Client\Provider\GenericProvider;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;

class OAuthClient
{
    private $provider;

    public function __construct()
    {
        $this->provider = new GenericProvider([
            'clientId'                => $_ENV['GOOGLE_CLIENT_ID'],  
            'clientSecret'            => $_ENV['GOOGLE_CLIENT_SECRET'],
            'redirectUri'             => $_ENV['GOOGLE_REDIRECT_URI'], 
            'urlAuthorize'            => 'https://accounts.google.com/o/oauth2/auth',
            'urlAccessToken'          => 'https://oauth2.googleapis.com/token',  
            'urlResourceOwnerDetails' => 'https://www.googleapis.com/oauth2/v1/userinfo'  
        ]);
    }

    public function getAuthorizationUrl()
    {
        return $this->provider->getAuthorizationUrl();
    }

    public function getState()
    {
        return $this->provider->getState();
    }

    public function getAccessToken($code)
    {
        try {
            return $this->provider->getAccessToken('authorization_code', [
                'code' => $code
            ]);
        } catch (IdentityProviderException $e) {
            exit('Gagal mendapatkan token akses: ' . $e->getMessage());
        }
    }

    public function getResourceOwner($accessToken)
    {
        try {
            return $this->provider->getResourceOwner($accessToken);
        } catch (IdentityProviderException $e) {
            exit('Gagal mendapatkan detail sumber daya: ' . $e->getMessage());
        }
    }
}
