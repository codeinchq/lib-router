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
// Date:     16/02/2018
// Time:     10:54
// Project:  lib-router
//
namespace CodeInc\Router\Request;
use CodeInc\Router\Request\Components\HttpHeaders;
use CodeInc\Router\Request\Components\RequestQuery;
use CodeInc\Router\RouterInterface;
use CodeInc\Url\Url;


/**
 * Interface RequestInterface
 *
 * @package CodeInc\GUI\PagesManager\Request
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
interface RequestInterface {
	/**
	 * @return RouterInterface
	 */
	public function getRouter():RouterInterface;

	/**
	 * Returns the HTTP headers iterator.
	 *
	 * @return HttpHeaders
	 */
	public function httpHeaders():HttpHeaders;

	/**
	 * Returns the get variables iterator.
	 *
	 * @return RequestQuery
	 */
	public function get():RequestQuery;

	/**
	 * Returs the post variables iterator.
	 *
	 * @return RequestQuery
	 */
	public function post():RequestQuery;

	/**
	 * Returns the cookies iterator.
	 *
	 * @return RequestQuery
	 */
	public function cookies():RequestQuery;

	/**
	 * Returns the request URL.
	 *
	 * @return Url
	 */
	public function getUrl():Url;

	/**
	 * Returns the method type ('GET' or 'POST').
	 *
	 * @return null|string
	 */
	public function getMethod():?string;

	/**
	 * Verifies if the method is POST.
	 *
	 * @return bool
	 */
	public function isMethodPost():bool;

	/**
	 * Verifies if the method is GET.
	 *
	 * @return bool
	 */
	public function isMethodGet():bool;

	/**
	 * Returns the remote IP address.
	 *
	 * @return null|string
	 */
	public function getRemoteAddr():?string;

	/**
	 * Returns the remote port waiting for the response.
	 *
	 * @return int|null
	 */
	public function getRemotePort():?int;

	/**
	 * Verifies if the request went trough a secure connection.
	 *
	 * @return bool
	 */
	public function isSecure():bool;

	/**
	 * Returns the request content or null if the request has no content.
	 *
	 * @return null|string
	 */
	public function getContent():?string;
}