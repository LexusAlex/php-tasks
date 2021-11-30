<?php

namespace Test\Tasks\Templates;

use PHPUnit\Framework\TestCase;
use Task\Tasks\Templates\TwigExample;

class TwigExampleTest extends TestCase
{
    public function testSimpleVar()
    {
        $twig = new TwigExample();
        $environment = $twig->getEnvironment();
        $var1 = 'text1';
        self::assertEquals('text1', $environment->render('simple-var.twig', ['var1' => $var1]));
    }

    public function testSelfTemplate()
    {
        $twig = new TwigExample();
        $environment = $twig->getEnvironment();
        self::assertEquals('self.twig', $environment->render('self.twig'));
    }

    public function testVar()
    {
        $twig = new TwigExample();
        $environment = $twig->getEnvironment();
        self::assertEquals('test', $environment->render('var.twig'));
    }

    public function testFiler()
    {
        $twig = new TwigExample();
        $environment = $twig->getEnvironment();
        self::assertEquals('Русск', $environment->render('filter.twig',['name' => '<span>русский тест много букв</span>']));
    }

    public function testFor()
    {
        $twig = new TwigExample();
        $environment = $twig->getEnvironment();
        self::assertEquals('petrvasya', $environment->render('for.twig',['users' => ['petr', 'vasya']]));
    }

}