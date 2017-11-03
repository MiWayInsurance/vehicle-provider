<?php
/*
* This file is part of the MiWay Insurance Vehicle Provider.
*
* @author      MiWay Development Team
* @copyright   Copyright (c) 2017 MiWay Insurance Ltd
*/

namespace Faker\Provider\en_ZA;

class VehicleProvider extends \MiWay\Faker\VehicleProvider
{
    protected static $consonants = array('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z');

    protected static $regionFormat = array(
        'gauteng' => '%s%s%d%s%sGP',
    );

    /**
     * @param string $region
     *
     * @return string
     */
    public function licencePlate($region = null)
    {
        if (!array_key_exists($region, static::$regionFormat)) {
            $region = static::randomKey(static::$regionFormat);
        }

        switch ($region) {
            case 'gauteng':
                return $this->gautengLicencePlate();
        }

        return null;
    }

    /**
     * @return string
     */
    private function gautengLicencePlate()
    {
        $plate = sprintf(
            static::$regionFormat['gauteng'],
            static::randomElement(static::$consonants),
            static::randomElement(static::$consonants),
            static::randomNumber(2),
            static::randomElement(static::$consonants),
            static::randomElement(static::$consonants)
        );

        return strtoupper($plate);
    }
}
