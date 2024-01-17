<?php

namespace App\Tests;

use ApiPlatform\Symfony\Bundle\Test\ApiTestCase;

class AuthenticationTest extends ApiTestCase
{
    public function testLogin(): void
    {
        $client = self::createClient();

        $response = $client->request('POST', '/login', [
            'headers' => ['Content-Type' => 'application/json'],
            'json' => [
                'username' => 'testUser',
                'password' => 'user',
            ],
        ]);

        $json = $response->toArray();
        $this->assertResponseIsSuccessful();

        $client->request('GET', '/self');
        $this->assertResponseStatusCodeSame(401);

        $client->request('GET', '/self', ['auth_bearer' => $json['token']]);
        $this->assertResponseIsSuccessful();
    }
}
