<?php

namespace App\Faker;


use Faker\Provider\Base;


class customFakerProvider extends Base
{
    public function indonesianPhoneNumber()
    {
        $prefix = '+62';
        $number = $this->generator->numerify('8##########');
        return $prefix . $number;
    }
}
