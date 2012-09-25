<?php
namespace BARNAVI\HTTP;

class Response implements \BARNAVI\HTTP\ResponseInterface
{
	protected $data;
	protected $code;

	public function __construct($data, $code)
	{
		$this->data = $data;
		$this->code = $code;
	}

	public function getData()
	{
		return $this->data;
	}

	public function getCode()
	{
		return $this->code;
	}
}