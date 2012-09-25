<?php
namespace BARNAVI\HTTP;

use \BARNAVI\HTTP\Response;
use \BARNAVI\HTTP\Exception as HTTPException;

class Request implements \BARNAVI\HTTP\RequestInterface
{
	protected $timeout = 10;
	protected $userAgent = 'PHP';

	public function setTimeout($timeout)
	{
		$this->timeout = $timeout;
		return $this;
	}

	public function setUserAgent($userAgent)
	{
		$this->userAgent = $userAgent;
		return $this;
	}

	public function execute($url, $method)
	{
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_USERAGENT, $this->userAgent);
		curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);

		$result = curl_exec($ch);
		$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		if ($result === false) {
			throw HTTPException::connectionError(curl_error($ch));
		}

		curl_close($ch);

		return new Response($result, $statusCode);
	}
}