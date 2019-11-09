<?php
declare(strict_types=1);

namespace Sopsy\HttpMessageInterfaces\Server;

use Sopsy\HttpMessageInterfaces\Message\ResponseInterface;
use Sopsy\HttpMessageInterfaces\Message\ServerRequestInterface;

/**
 * Handles a server request and produces a response.
 *
 * An HTTP request handler process an HTTP request in order to produce an
 * HTTP response.
 */
interface RequestHandlerInterface
{
    /**
     * Handles a request and produces a response.
     *
     * May call other collaborating code to generate the response.
     * @param ServerRequestInterface $request
     * @return ResponseInterface
     */
    public function handle(ServerRequestInterface $request): ResponseInterface;
}