<?php


namespace HalloVerden\HttpExceptions\Http;


/**
 * Class BadGatewayHttpException
 *
 * @package HalloVerden\HttpExceptions\Http
 */
class BadGatewayHttpException extends HttpException {
  const HTTP_STATUS_CODE = 502;

  /**
   * BadGatewayHttpException constructor.
   *
   * @param null            $message
   * @param array|null      $data
   * @param \Exception|null $previous
   * @param int             $code
   */
  public function __construct( $message = null, array $data = null, \Exception $previous = null, $code = 0 ) {
    parent::__construct( self::HTTP_STATUS_CODE, $message, $data, $previous, [], $code );
  }
}
