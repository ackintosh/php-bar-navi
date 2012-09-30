<?php
namespace BARNAVI\HTTP;

class RequestTest extends \PHPUnit_Framework_TestCase
{
	public function testSetTimeout()
	{
		$request = new Request();
		$this->assertAttributeSame(10, 'timeout', $request);
		$this->assertSame($request, $request->setTimeout(123));
		$this->assertAttributeSame(123, 'timeout', $request);
	}

	public function testSetUserAgent()
	{
		$request = new Request();
		$this->assertAttributeSame('PHP', 'userAgent', $request);
		$this->assertSame($request, $request->setUserAgent('Hoge'));
		$this->assertAttributeSame('Hoge', 'userAgent', $request);
	}
}