<?php

require_once __DIR__.'/GoogleAPI.php';
require_once __DIR__.'/GouvAPI.php';

class Context
{
    private GeolocAPI $api;

    public function __construct(GeolocAPI $api)
    {
        $this->api = $api;
    }

    public function search(string $address): array
    {
        return $this->api->search($address);
    }
}

$googleAPI = new GoogleAPI();
$gouvAPI = new GouvAPI();

$app = new Context($googleAPI);
$app->search('Statue of Liberty');

$app = new Context($gouvAPI);
$app->search('Statue of Liberty');
