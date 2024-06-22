<?php

interface GeolocAPI
{
    public function search(string $address): array;
}