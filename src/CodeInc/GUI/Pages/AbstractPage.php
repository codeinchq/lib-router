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
// Time:     19:13
// Project:  lib-gui
//
namespace CodeInc\GUI\Pages;
use CodeInc\GUI\Pages\Interfaces\PageInterface;
use CodeInc\GUI\PagesManager\PagesManagerInterface;
use CodeInc\GUI\PagesManager\Request\RequestInterface;


/**
 * Class AbstractPage
 *
 * @package CodeInc\GUI\Pages
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
abstract class AbstractPage implements PageInterface {
	/**
	 * @var RequestInterface
	 */
	private $request;

	/**
	 * @var PagesManagerInterface
	 */
	private $pagesManager;

	/**
	 * AbstractPage constructor.
	 *
	 * @param PagesManagerInterface $pagesManager
	 * @param RequestInterface $request
	 */
	public function __construct(PagesManagerInterface $pagesManager, RequestInterface $request) {
		$this->pagesManager = $pagesManager;
		$this->request = $request;
	}

	/**
	 * @inheritdoc
	 * @return RequestInterface
	 */
	public function getRequest():RequestInterface {
		return $this->request;
	}

	/**
	 * @inheritdoc
	 * @return PagesManagerInterface
	 */
	public function getPagesManager():PagesManagerInterface {
		return $this->pagesManager;
	}
}