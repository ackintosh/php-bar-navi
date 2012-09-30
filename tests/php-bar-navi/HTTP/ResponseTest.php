<?php
namespace BARNAVI\HTTP;

class ResponseTest extends \PHPUnit_Framework_TestCase
{
	public function test__construct()
	{
		$response = new Response('Response Data', 123);
		$this->assertAttributeSame('Response Data', 'data', $response);
		$this->assertAttributeSame(123, 'code', $response);
	}

	public function testGetData()
	{
		$response = new Response('Response Data', 123);
		$this->assertSame('Response Data', $response->getData());
	}

	public function testGetCode()
	{
		$response = new Response('Response Data', 123);
		$this->assertSame(123, $response->getCode());
	}
}