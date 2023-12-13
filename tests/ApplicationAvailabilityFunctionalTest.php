<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class ApplicationAvailabilityFunctionalTest extends WebTestCase
{
    /**
     * @dataProvider urlProvider
     */
    public function testPageIsSuccessful(string $url): void
    {
        $client = static::createClient();

        $client->request(method: 'GET', uri: $url);

        $this->assertResponseIsSuccessful();
    }

    public static function urlProvider(): iterable
    {
        yield ['/ping'];
    }
}
