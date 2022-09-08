<?php


namespace HalloVerden\HttpExceptions;

use HalloVerden\HttpExceptions\Http\NotFoundHttpException;

/**
 * Class NotFoundException
 *
 * @package HalloVerden\HttpExceptions
 */
class NotFoundException extends NotFoundHttpException {

  /**
   * NotFoundException constructor.
   *
   * @param string|null     $subject
   * @param string          $message
   * @param \Throwable|null $previous
   * @param int             $code
   */
  public function __construct(string $subject = null, string $message = "NOT_FOUND", \Throwable $previous = null, int $code = 0) {
    parent::__construct($message, null, $previous, $code);

    $d = [
      'error' => $message
    ];

    if ($subject) {
      $d['subject'] = $subject;
    }

    $this->setData($d);
  }

}
