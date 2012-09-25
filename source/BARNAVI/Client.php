<?php
namespace BARNAVI;

use \BARNAVI\HTTP\Request;

class Client implements \BARNAVI\ClientInterface
{
	/**
	 * @var string
	 */
	protected $apiId;

	/**
	 * Return new Client object
	 * @param string $apiId
	 */
	public function __construct($apiId)
	{
		$this->apiId = $apiId;
	}

	/**
	 * Request shops to BAR-NAVI
	 */
	public function request(array $query)
	{
		$query = array(
			'key'	=> $this->apiId,
			) + $query;

		$url = 'http://webapi.suntory.co.jp/barnavi/v2/shops?' . http_build_query($query);

		$request = $this->_newHTTPRequest();
		return $request->execute($url, 'GET');
	}

	protected function _newHTTPRequest()
	{
		return new Request();
	}
}