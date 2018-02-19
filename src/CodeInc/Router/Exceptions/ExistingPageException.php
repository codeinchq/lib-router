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
// Date:     19/02/2018
// Time:     18:36
// Project:  lib-router
//
namespace CodeInc\Router\Exceptions;
use CodeInc\Router\RouterInterface;
use Throwable;


/**
 * Class ExistingPageException
 *
 * @package CodeInc\GUI\Router\Exceptions
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
class ExistingPageException extends RouterException {
	/**
	 * @var string
	 */
	private $pageClass;

	/**
	 * ExistingPageException constructor.
	 *
	 * @param string $pageClass
	 * @param RouterInterface $router
	 * @param null|Throwable $previous
	 */
	public function __construct(string $pageClass, RouterInterface $router, ?Throwable $previous = null) {
		$this->pageClass = $pageClass;
		parent::__construct("The page \"$pageClass\" is already registered", $router, $previous);
	}

	/**
	 * @return string
	 */
	public function getPageClass():string {
		return $this->pageClass;
	}
}