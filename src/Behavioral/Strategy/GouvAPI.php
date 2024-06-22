<?php

require_once __DIR__.'/GeolocAPI.php';

class GouvAPI implements GeolocAPI
{
    public function search(string $address): array
    {
        echo "Searching the address '{$address}' on Gouv API.".PHP_EOL;

        // Call the Gouv API to get the geolocation data.
        return [
            [
                'name' => 'Statue of Liberty',
                'lat' => 40.689247,
                'lng' => -74.044502,
            ],
        ];
    }
}
