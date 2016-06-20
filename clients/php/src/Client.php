<?php namespace Kuna;


/**
 * Class Client
 * @package Kuna
 * @author   https://github.com/reilag/kuna-api
 * @link     https://github.com/reilag/kuna-api
 *
 * Created by PhpStorm.
 * User: Reilag
 * Date: 20.06.16
 * Time: 14:04
 *
 */
class Client
{
	

	/**
	 * @param $path
	 * @param array $params
	 * @param string $method
	 */
	private function execute($path , array $params = [], $method = "GET")
	{
		$path = trim($path, '/');
		$uri = implode('/', [Config::HOST, Config::BASE_PATH, $path]);

		$http = new \GuzzleHttp\Client([
			'base_uri' => $uri
		]);

	}


}