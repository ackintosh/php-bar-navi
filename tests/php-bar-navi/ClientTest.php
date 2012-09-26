<?php
namespace BARNAVI;

class ClientTest extends \PHPUnit_Framework_TestCase
{
	public function test__construct()
	{
		$client = new Client('api-key');
		$this->assertAttributeSame('api-key', 'apiId', $client);
	}
}