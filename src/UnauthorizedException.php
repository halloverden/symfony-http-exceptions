<?php


namespace HalloVerden\HttpExceptions;

use HalloVerden\HttpExceptions\Http\UnauthorizedHttpException;

/**
 * Class UnauthorizedException
 *
 * @package HalloVerden\HttpExceptions
 */
class UnauthorizedException extends UnauthorizedHttpException {

  /**
   * UnauthorizedException constructor.
   *
   * @param string     $message
   * @param \Throwable $previous
   * @param int        $code
   */
  public function __construct(string $message = 'UNAUTHORIZED', \Throwable $previous = null, $code = 0) {
    parent::__construct($message, null, $previous, $code);

    $this->setData([
      'error' => $message
    ]);
  }

}
