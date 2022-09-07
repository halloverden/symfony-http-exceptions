<?php


namespace HalloVerden\HttpExceptions\Http;

/**
 * Class PreconditionRequiredHttpException
 *
 * @package HalloVerden\HttpExceptions\Http
 */
class PreconditionRequiredHttpException extends HttpException {
  const HTTP_STATUS_CODE = 428;

  /**
   * @param string|null     $message The internal exception message
   * @param array|null      $data
   * @param \Throwable|null $previous The previous exception
   * @param int             $code The internal exception code
   */
  public function __construct(string $message = null, array $data = null, \Throwable $previous = null, $code = 0) {
    parent::__construct( self::HTTP_STATUS_CODE, $message, $data, $previous, array(), $code );
  }
}
