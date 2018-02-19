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
// Project:  lib-gui
//
namespace CodeInc\GUI\PagesManager;
use CodeInc\GUI\PagesManager\Exceptions\PagesManagerException;


/**
 * Interface NotFoundInterface
 *
 * @package CodeInc\GUI\Services\PagesManager
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
interface NotFoundInterface extends PagesManagerInterface
{
	/**
	 * Registers the not found page.
	 *
	 * @param string $pageClass
	 * @throws PagesManagerException
	 */
	public function registerNotFoundPage(string $pageClass):void;
}