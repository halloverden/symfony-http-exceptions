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
   * @param \Exception|null $previous
   * @param int             $code
   */
  public function __construct( string $message = null, \Exception $previous = null, $code = 0 ) {
    if ( !$message ) {
      $message = 'INTERNAL_SERVER_ERROR';
    }
    parent::__construct( $message, null, $previous, $code );

    $this->setData([
      'error' => $message
    ]);
  }

}
