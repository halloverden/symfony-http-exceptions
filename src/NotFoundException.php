<?php


namespace HalloVerden\HttpExceptions;

use HalloVerden\HttpExceptions\Http\NotFoundHttpException;

class NotFoundException extends NotFoundHttpException {

  public function __construct(?string $subject = null, string $message = "NOT_FOUND", ?\Throwable $previous = null, int $code = 0) {
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
