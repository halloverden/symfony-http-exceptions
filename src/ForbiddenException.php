<?php


namespace HalloVerden\HttpExceptions;

use HalloVerden\HttpExceptions\Http\ForbiddenHttpException;

/**
 * Class ForbiddenException
 *
 * @package HalloVerden\HttpExceptions
 */
class ForbiddenException extends ForbiddenHttpException {

  /**
   * ForbiddenException constructor.
   *
   * @param string|null $message
   * @param \Throwable  $previous
   * @param int         $code
   */
  public function __construct(string $message = null, \Throwable $previous = null, $code = 0) {
    if (!$message) {
      $message = 'FORBIDDEN';
    }

    parent::__construct($message, null, $previous, $code);

    $this->setData([
      'error' => $message
    ]);
  }

}
