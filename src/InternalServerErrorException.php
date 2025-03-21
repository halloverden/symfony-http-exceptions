<?php

namespace HalloVerden\HttpExceptions;

use HalloVerden\HttpExceptions\Http\InternalServerErrorHttpException;


class InternalServerErrorException extends InternalServerErrorHttpException {

  public function __construct(?string $message = null, ?\Throwable $previous = null, int $code = 0) {
    if ( !$message ) {
      $message = 'INTERNAL_SERVER_ERROR';
    }
    parent::__construct( $message, null, $previous, $code );

    $this->setData([
      'error' => $message
    ]);
  }

}
