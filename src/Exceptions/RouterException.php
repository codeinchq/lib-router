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
// Date:     13/02/2018
// Time:     13:06
// Project:  lib-router
//
namespace CodeInc\Router\Exceptions;
use CodeInc\Router\RouterInterface;
use Throwable;


/**
 * Class PagesManagerException
 *
 * @package CodeInc\GUI\PagesManager\Exceptions
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
class RouterException extends \Exception {
	/**
	 * @var RouterInterface|null
	 */
	private $router;

	/**
	 * RouterException constructor.
	 *
	 * @param string $message
	 * @param RouterInterface|null $router
	 * @param null|Throwable $previous
	 */
	public function __construct(string $message, ?RouterInterface $router = null, ?Throwable $previous = null) {
		$this->router = $router;
		parent::__construct($message, null, $previous);
	}

	/**
	 * @return RouterInterface|null
	 */
	public function getRouter():?RouterInterface {
		return $this->router;
	}
}