<?php
namespace BARNAVI\HTTP;

interface ResponseInterface
{
	public function __construct($data, $code);
	public function getData();
	public function getCode();
}