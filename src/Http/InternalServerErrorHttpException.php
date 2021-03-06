<?php


namespace HalloVerden\HttpExceptions\Http;

/**
 * Class InternalServerErrorHttpException
 *
 * @package HalloVerden\HttpExceptions\Http
 */
class InternalServerErrorHttpException extends HttpException {
  const HTTP_STATUS_CODE = 500;

  /**
   * @param string     $message The internal exception message
   * @param array      $data
   * @param \Throwable $previous The previous exception
   * @param int        $code The internal exception code
   */
  public function __construct( $message = null, array $data = null, \Throwable $previous = null, $code = 0 ) {
    parent::__construct( self::HTTP_STATUS_CODE, $message, $data, $previous, array(), $code );
  }
}
