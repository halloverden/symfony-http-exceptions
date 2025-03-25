<?php

namespace HalloVerden\HttpExceptions;

use HalloVerden\HttpExceptions\Http\NoContentHttpException;

class NoContentException extends NoContentHttpException {

  public function __construct(?\Throwable $previous = null, int $code = 0) {
    parent::__construct(null, $previous, $code);
  }

}
