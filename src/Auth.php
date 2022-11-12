<?php 

namespace App;

use GuzzleHttp\Client;

define('STRAPI_API_BASE_URL', 'http://localhost:1337/api/');

class Auth
{
	protected $client;

	public function __construct()
	{
        // $token = '3a53597eee51d07a3d5405e6a3f1d4a10137d2d7eab21dfcf075deeb6308cf39af7aecd46f342f5354e50813151da38ce6957b7636ba99e04277fbd8a6a5f33d91ced3f4dafe10f8fab096a7e99daa89a7a1074fe1f46b6662a01559ab1947a32b1205f1cd9cdb2d1e796e507b7b7a5d53d0a2df2d5905ea0d9363db672e23cb';
		$this->client = new Client([
			'base_uri' => 'STRAPI_API_BASE_URL',
			'headers' => [
                //'Authorization' => 'Bearer ' . $token,
				'Accept' => 'application/json',
				'Content-Type' => 'application/json'
			]
		]);
	}

	public function registerUser($username, $email, $password)
	{
		$registration_endpoint = 'registrations';
        return $this->client->POST($registration_endpoint ,[
			'json' => [
                'data' => [
                    'username' => $username,
                    'email' => $email,
                    'password' => $password,
                ], 
            ]
		]);
	}

	public function loginUser($identifier, $password)
	{
		$login_endpoint = ''; // ????
		return $this->client->post($login_endpoint, [
			'json' => [

            ] // supply the data here
		]);
	}
}