<?php

namespace HalloVerden\HttpExceptions\Http;

class NoContentHttpException extends HttpException {
  const HTTP_STATUS_CODE = 204;

  public function __construct(?string $message = null, ?\Throwable $previous = null, int $code = 0) {
    parent::__construct( self::HTTP_STATUS_CODE, $message, null, $previous, [], $code);
  }
}
