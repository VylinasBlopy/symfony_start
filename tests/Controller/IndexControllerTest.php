<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class IndexControllerTest extends WebTestCase
{
    public function testPing(): void
    {
        $client = static::createClient();

        $client->request(method: 'GET', uri: '/ping');

        $this->assertResponseIsSuccessful();
        $this->assertResponseStatusCodeSame(204);
    }
}
