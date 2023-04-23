<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test/slack/error', name: 'test_slack_error')]
    public function testSlackError(): Response
    {
        throw new \RuntimeException('Hello Ghost!');
    }

    #[Route('/test/slack/good', name: 'test_slack_good')]
    public function testSlackGood(LoggerInterface $logger): Response
    {
        $logger->info('It\'s good !');

        return new Response('It\'s good !');
    }

}