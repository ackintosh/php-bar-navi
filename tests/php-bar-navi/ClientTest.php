<?php
namespace BARNAVI;

class ClientTest extends \PHPUnit_Framework_TestCase
{
	public function test__construct()
	{
		$client = new Client('api-key');
		$this->assertAttributeSame('api-key', 'apiId', $client);
	}

	public function test__newHTTPRequest()
	{
		$ref = new \ReflectionMethod('\BARNAVI\Client', '_newHTTPRequest');
		$ref->setAccessible(true);
		$this->assertInstanceOf('\BARNAVI\HTTP\Request', $ref->invoke(new Client('api-key')));
	}
}