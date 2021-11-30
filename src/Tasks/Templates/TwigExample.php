<?php

namespace Task\Tasks\Templates;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TwigExample
{
    private Environment $environment;

    public function __construct()
    {
        $loader = new FilesystemLoader();

        $loader->addPath(__DIR__ . '/templates', '__main__');

        $this->environment = new Environment($loader, [
            'cache' => false,
            'debug' => false,
            'strict_variables' => true,
            'auto_reload' => true,
        ]);
    }

    public function getEnvironment(): Environment
    {
        return $this->environment;
    }
}
