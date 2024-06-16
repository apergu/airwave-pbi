<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Subscriber\Oauth\Oauth1;


class OAuth1Service
{
    protected $client;

    public function __construct()
    {
        $stack = HandlerStack::create();

        $oauth = new Oauth1([
            'consumer_key'    => config('services.oauth.consumer_key'),
            'consumer_secret' => config('services.oauth.consumer_secret'),
            'token'           => config('services.oauth.token'),
            'token_secret'    => config('services.oauth.token_secret'),
            'realm'           => config('services.oauth.realm'),
            'signature_method' => 'HMAC-SHA256',
        ]);

        $stack->push($oauth);

        $this->client = new Client([
            'base_uri' => 'https://8548478-sb1.restlets.api.netsuite.com/app/site/hosting/restlet.nl',
            'handler' => $stack,
            'auth' => 'oauth',
        ]);
    }

    public function get($scriptId, $deployId, $id = null, $name = null)
    {
        $query = [
            'script' => $scriptId,
            'deploy' => $deployId
        ];

        if ($id) {
            $query['id'] = $id;
        }

        if ($name) {
            $query['name'] = $name;
        }

        $response = $this->client->get('', [
            'query' => $query,
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    public function post($endpoint, $params = [])
    {
        $response = $this->client->post($endpoint, [
            'form_params' => $params,
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
