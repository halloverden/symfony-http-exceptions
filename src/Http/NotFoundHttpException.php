<?php


namespace HalloVerden\HttpExceptions\Http;

/**
 * Class NotFoundHttpException
 *
 * @package HalloVerden\HttpExceptions\Http
 */
class NotFoundHttpException extends HttpException {
  const HTTP_STATUS_CODE = 404;

  /**
   * @param string     $message The internal exception message
   * @param array      $data
   * @param \Throwable $previous The previous exception
   * @param int        $code The internal exception code
   */
  public function __construct( string $message = null, array $data = null, \Throwable $previous = null, int $code = 0 ) {
    parent::__construct( self::HTTP_STATUS_CODE, $message, $data, $previous, array(), $code );
  }
}
