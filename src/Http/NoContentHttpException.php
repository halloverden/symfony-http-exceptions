<?php

namespace HalloVerden\HttpExceptions\Http;

/**
 * Class NoContentHttpException
 *
 * @package HalloVerden\HttpExceptions\Http
 */
class NoContentHttpException extends HttpException {
  const HTTP_STATUS_CODE = 204;

  /**
   * @param string|null     $message The internal exception message
   * @param \Throwable|null $previous The previous exception
   * @param int             $code The internal exception code
   */
  public function __construct(string $message = null, \Throwable $previous = null, int $code = 0) {
    parent::__construct( self::HTTP_STATUS_CODE, $message, null, $previous, [], $code);
  }
}
