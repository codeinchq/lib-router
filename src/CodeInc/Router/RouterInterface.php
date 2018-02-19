<?php
//
// +---------------------------------------------------------------------+
// | CODE INC. SOURCE CODE                                               |
// +---------------------------------------------------------------------+
// | Copyright (c) 2017 - Code Inc. SAS - All Rights Reserved.           |
// | Visit https://www.codeinc.fr for more information about licensing.  |
// +---------------------------------------------------------------------+
// | NOTICE:  All information contained herein is, and remains the       |
// | property of Code Inc. SAS. The intellectual and technical concepts  |
// | contained herein are proprietary to Code Inc. SAS are protected by  |
// | trade secret or copyright law. Dissemination of this information or |
// | reproduction of this material  is strictly forbidden unless prior   |
// | written permission is obtained from Code Inc. SAS.                  |
// +---------------------------------------------------------------------+
//
// Author:   Joan Fabrégat <joan@codeinc.fr>
// Date:     14/02/2018
// Time:     16:01
// Project:  lib-router
//
namespace CodeInc\Router;
use CodeInc\Router\Exceptions\RouterException;
use CodeInc\Router\Request\RequestInterface;
use CodeInc\Url\Url;


/**
 * Interface RouterInterface
 *
 * @package CodeInc\GUI\Router
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
interface RouterInterface {
	/**
	 * Verifies if a route is mapped.
	 *
	 * @param string $route
	 * @return mixed
	 */
	public function hasRoute(string $route):bool;

	/**
	 * Processes a route.
	 *
	 * @param RequestInterface|null $request
	 */
	public function processRequest(?RequestInterface $request = null):void;

	/**
	 * @param string $pageClass
	 * @param array|null $queryParameters
	 * @return Url
	 * @throws RouterException
	 */
	public function buildPageUrl(string $pageClass, ?array $queryParameters = null):Url;
}