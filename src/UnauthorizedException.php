<?php


namespace HalloVerden\HttpExceptions;

use HalloVerden\HttpExceptions\Http\UnauthorizedHttpException;

class UnauthorizedException extends UnauthorizedHttpException {

  public function __construct(string $message = 'UNAUTHORIZED', ?\Throwable $previous = null, int $code = 0) {
    parent::__construct($message, null, $previous, $code);

    $this->setData([
      'error' => $message
    ]);
  }

}
