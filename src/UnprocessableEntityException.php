<?php


namespace HalloVerden\HttpExceptions;

use HalloVerden\HttpExceptions\Http\UnprocessableEntityHttpException;


class UnprocessableEntityException extends UnprocessableEntityHttpException {

  public function __construct(string $message, array $data = [], ?\Throwable $previous = null, int $code = 0) {
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
