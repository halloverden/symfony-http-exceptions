<?php

namespace HalloVerden\HttpExceptions;

use HalloVerden\HttpExceptions\Http\NoContentHttpException;

/**
 * Class NoContentException
 *
 * @package HalloVerden\HttpExceptions
 */
class NoContentException extends NoContentHttpException {

  /**
   * NoContentException constructor.
   *
   * @param \Throwable|null $previous
   * @param int             $code
   */
  public function __construct(\Throwable $previous = null, int $code = 0) {
    parent::__construct(null, $previous, $code);
  }

}
