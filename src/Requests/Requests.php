<?php

namespace g4t\Chooch\Requests;
use GuzzleHttp\Client;

abstract class Requests
{

    /**
     * api token
     * The Identifier of your api.chooch.ai account
     * @var string
     */
    protected $api_token;


    /**
     * Endpoint Host
     * @var string
     */
    protected $url = 'https://api.chooch.ai/';
    public function __construct()
    {
        $this->api_token = config("chooch.api_token");
    }


    /**
     * @param $url
     * @param $image = nullable
     * @throws GuzzleHttp
     */
    protected static function callApi($url, $image = null)
    {
        $client = new client();
        $response = $client->post($url,[
            'multipart' => [
                [
                    'Content-type' => 'multipart/form-data',
                    'name' => 'image',
                    'contents' => fopen($image, 'r'),
                ]
            ]
        ]);
        return json_decode($response->getBody(), true);
    }


    /**
     * @param $url
     * @throws GuzzleHttp
     */
    public static function SearchMethod($url)
    {
        $client = new client();
        $response = $client->request('POST', $url);
        return json_decode($response->getBody(), true);
    }


    /**
     * @param $url
     * @param $name
     * @throws GuzzleHttp
     */
    public static function Post($url, $name)
    {
        $client = new client();
        $response = $client->request('POST', $url, [
            'form_params' => [
                'name' => $name,
            ]
        ]);
        return json_decode($response->getBody(), true);
    }



}
