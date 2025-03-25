<?php


namespace HalloVerden\HttpExceptions;

use HalloVerden\HttpExceptions\Http\ForbiddenHttpException;

class ForbiddenException extends ForbiddenHttpException {

  public function __construct(?string $message = null, ?\Throwable $previous = null, int $code = 0) {
    if (!$message) {
      $message = 'FORBIDDEN';
    }

    parent::__construct($message, null, $previous, $code);

    $this->setData([
      'error' => $message
    ]);
  }

}
