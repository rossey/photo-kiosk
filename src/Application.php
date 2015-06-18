<?php

namespace PhotoKiosk;

use Silex\Application as SilexApp;
use Symfony\Component\HttpFoundation\Response;

class Application extends SilexApp
{
    /**
     * @param array $values
     */
    public function __construct(array $values = array())
    {
        parent::__construct($values);

        $this->get('/', function () {
            return new Response('Hello World');
        });
    }
}
