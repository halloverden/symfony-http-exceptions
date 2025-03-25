<?php


namespace HalloVerden\HttpExceptions\Http;

class InternalServerErrorHttpException extends HttpException {
  const HTTP_STATUS_CODE = 500;

  public function __construct(?string $message = null, ?array $data = null, ?\Throwable $previous = null, int $code = 0) {
    parent::__construct( self::HTTP_STATUS_CODE, $message, $data, $previous, [], $code );
  }
}
