<?php
//
// +---------------------------------------------------------------------+
// | CODE INC. SOURCE CODE                                               |
// +---------------------------------------------------------------------+
// | Copyright (c) 2018 - Code Inc. SAS - All Rights Reserved.           |
// | Visit https://www.codeinc.fr for more information about licensing.  |
// +---------------------------------------------------------------------+
// | NOTICE:  All information contained herein is, and remains the       |
// | property of Code Inc. SAS. The intellectual and technical concepts  |
// | contained herein are proprietary to Code Inc. SAS are protected by  |
// | trade secret or copyright law. Dissemination of this information or |
// | reproduction of this material is strictly forbidden unless prior    |
// | written permission is obtained from Code Inc. SAS.                  |
// +---------------------------------------------------------------------+
//
// Author:   Joan Fabrégat <joan@codeinc.fr>
// Date:     28/09/2018
// Project:  Router
//
declare(strict_types=1);
namespace CodeInc\Router\Exceptions;
use Throwable;


/**
 * Class NotWithinNamespaceException
 *
 * @package CodeInc\Router\Exceptions
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
final class NotWithinNamespaceException extends \LogicException implements RouterException
{
    /**
     * @var string
     */
    private $handlerClass;

    /**
     * @var string
     */
    private $handlersNamespace;

    /**
     * NotWithinNamespaceException constructor.
     *
     * @param string $controllerClass
     * @param string $handlersNamespace
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $controllerClass, string $handlersNamespace, int $code = 0, Throwable $previous = null)
    {
        $this->handlerClass = $controllerClass;
        $this->handlersNamespace = $handlersNamespace;
        parent::__construct(
            sprintf("The handler '%s' is not within the namespace '%s'.",
                $controllerClass, $handlersNamespace),
            $code,
            $previous
        );
    }

    /**
     * @return string
     */
    public function getHandlerClass():string
    {
        return $this->handlerClass;
    }

    /**
     * @return string
     */
    public function getHandlersNamespace():string
    {
        return $this->handlersNamespace;
    }
}