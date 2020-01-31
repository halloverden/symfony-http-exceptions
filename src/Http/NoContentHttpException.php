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
   * @param string     $message The internal exception message
   * @param \Throwable $previous The previous exception
   * @param int        $code The internal exception code
   */
  public function __construct( $message = null, \Throwable $previous = null, $code = 0 ) {
    parent::__construct( self::HTTP_STATUS_CODE, $message, null, $previous, array(), $code );
  }
}
