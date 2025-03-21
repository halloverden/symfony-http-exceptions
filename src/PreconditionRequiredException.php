<?php


namespace HalloVerden\HttpExceptions;

use HalloVerden\HttpExceptions\Http\PreconditionRequiredHttpException;

class PreconditionRequiredException extends PreconditionRequiredHttpException {
  const MESSAGE = 'PRECONDITION_REQUIRED';

  public function __construct(?string $message = null, array $data = [], ?\Exception $previous = null, int $code = 0) {
    $message = $message ?: self::MESSAGE;

    parent::__construct($message, $data, $previous, $code);

    $d = [
      "error" => $message
    ];

    if ($data) {
      $this->setData(array_merge_recursive($data, $d));
    } else {
      $this->setData($d);
    }
  }
}
