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

        $this->environment = new Environment($loader, [
            'cache' => false,
            'debug' => true,
            'strict_variables' => true,
            'auto_reload' => true,
            'template_dirs' => [
                FilesystemLoader::MAIN_NAMESPACE => __DIR__ . 'templates',
            ],
        ]);
    }

    public function getEnvironment(): Environment
    {
        return $this->environment;
    }
}
