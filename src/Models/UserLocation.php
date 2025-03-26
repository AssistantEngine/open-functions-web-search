<?php

namespace AssistantEngine\OpenFunctions\WebSearch\Models;

class UserLocation
{
    /**
     * Free text input for the city of the user, e.g. "San Francisco".
     */
    public ?string $city = null;

    /**
     * The two-letter ISO country code of the user, e.g. "US".
     */
    public ?string $country = null;

    /**
     * Free text input for the region of the user, e.g. "California".
     */
    public ?string $region = null;

    /**
     * The IANA timezone of the user, e.g. "America/Los_Angeles".
     */
    public ?string $timezone = null;


    public function toArray(): array
    {
        return [
            'type' => 'approximate',
            'city' => $this->city,
            'country' => $this->country,
            'region' => $this->region,
            'timezone' => $this->timezone,
        ];
    }
}