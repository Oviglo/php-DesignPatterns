<?php

require_once __DIR__.'/GeolocAPI.php';

class GoogleAPI implements GeolocAPI
{
    public function search(string $address): array
    {
        echo "Searching the address '{$address}' on Google Maps API.".PHP_EOL;

        // Here would be the actual implementation of the Google Maps API.
        // For the sake of this example, let's just return some random data.
        return [
            [
                'name' => 'Statue of Liberty',
                'lat' => 40.712776,
                'lng' => -74.005974,
            ],
        ];
    }
}
