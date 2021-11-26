<?php

namespace Test\Tasks\Templates;

use PHPUnit\Framework\TestCase;
use Task\Tasks\Templates\TwigExample;

class TwigExampleTest extends TestCase
{
    public function testCreateObject()
    {
        $twig = new TwigExample();
        $environment = $twig->getEnvironment();
        echo $environment->render('index', ['name' => 'Fabien']);

    }
}