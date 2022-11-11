<?php

Class Speedometer
{

    public const MILES_CONVERTER = 0.621371;

    private $ingredients;
    private $duration;
    private $tools;
    // (...) etc.

    // (...) getters / setters, méthodes métiers, etc

    public static function convertKmToMiles(int $km): string
    {   
        return $km * self::MILES_CONVERTER;
    }

}