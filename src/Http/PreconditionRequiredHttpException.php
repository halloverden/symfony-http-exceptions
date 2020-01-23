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
   * @param string     $message  The internal exception message
   * @param array      $data
   * @param \Exception $previous The previous exception
   * @param int        $code     The internal exception code
   */
  public function __construct( $message = null, array $data = null, \Exception $previous = null, $code = 0 ) {
    parent::__construct( self::HTTP_STATUS_CODE, $message, $data, $previous, array(), $code );
  }
}
