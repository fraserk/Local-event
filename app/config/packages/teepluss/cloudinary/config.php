<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Cloudinary API configuration
    |--------------------------------------------------------------------------
    |
    | Before using Cloudinary you need to register and get some detail
    | to fill in below, please visit cloudinary.com.
    |
    */

    'cloudName'  => 'dwy0cwnyl',
    'baseUrl'    => 'http://res.cloudinary.com/dwy0cwnyl',
    'secureUrl'  => 'https://res.cloudinary.com/dwy0cwnyl',
    'apiBaseUrl' => 'https://api.cloudinary.com/v1_1/dwy0cwnyl',
    'apiKey'     => '161917694633228',
    'apiSecret'  => 'ke32jyb17EFKbFWo217KhyUSM7Q',

    /*
    |--------------------------------------------------------------------------
    | Default image scaling to show.
    |--------------------------------------------------------------------------
    |
    | If you not pass options parameter to Cloudy::show the default
    | will be replaced.
    |
    */

    'scaling'    => array(
        'format' => 'png',
        'with'   => 150,
        'height' => 150,
        'crop'   => 'fit',
        'effect' => null
    )

);