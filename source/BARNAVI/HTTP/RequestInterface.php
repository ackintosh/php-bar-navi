<?php
namespace BARNAVI\HTTP;

interface RequestInterface
{
	public function setTimeOut($timeout);
	public function setUserAgent($userAgent);
	public function execute($url, $method);
}