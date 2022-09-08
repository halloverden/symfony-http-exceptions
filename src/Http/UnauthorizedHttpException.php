<?php


namespace HalloVerden\HttpExceptions\Http;

/**
 * Class UnauthorizedHttpException
 *
 * @package HalloVerden\HttpExceptions\Http
 */
class UnauthorizedHttpException extends HttpException {
  const HTTP_STATUS_CODE = 401;

  /**
   * @param string|null     $message The internal exception message
   * @param array|null      $data
   * @param \Throwable|null $previous The previous exception
   * @param int             $code The internal exception code
   */
  public function __construct(string $message = null, array $data = null, \Throwable $previous = null, $code = 0) {
    $headers = [
      'WWW-Authenticate' => 'error="'.$message.'"',
    ];
    parent::__construct( self::HTTP_STATUS_CODE, $message, $data, $previous, $headers, $code);
  }
}
