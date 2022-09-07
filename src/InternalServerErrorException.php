<?php

namespace HalloVerden\HttpExceptions;

use HalloVerden\HttpExceptions\Http\InternalServerErrorHttpException;

/**
 * Class InternalServerErrorException
 *
 * @package HalloVerden\HttpExceptions
 */
class InternalServerErrorException extends InternalServerErrorHttpException {

  /**
   * InternalServerErrorException constructor.
   *
   * @param string|null     $message
   * @param \Throwable|null $previous
   * @param int             $code
   */
  public function __construct( string $message = null, \Throwable $previous = null, int $code = 0 ) {
    if ( !$message ) {
      $message = 'INTERNAL_SERVER_ERROR';
    }
    parent::__construct( $message, null, $previous, $code );

    $this->setData([
      'error' => $message
    ]);
  }

}
