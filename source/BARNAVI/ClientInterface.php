<?php
namespace BARNAVI;

interface ClientInterface
{
	public function __construct($appId);

	public function request(array $query);
}