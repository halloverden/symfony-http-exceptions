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
   * @param \Exception|null $previous
   * @param int             $code
   */
  public function __construct(\Exception $previous = null, $code = 0) {
    parent::__construct(null, $previous, $code);
  }

}
