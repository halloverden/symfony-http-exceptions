<?php


namespace HalloVerden\HttpExceptions;

use HalloVerden\HttpExceptions\Http\BadRequestHttpException;

class BadRequestException extends BadRequestHttpException {

  /**
   * BadRequestException constructor.
   *
   * @param string          $message
   * @param array           $data
   * @param \Throwable|null $previous
   * @param int             $code
   */
  public function __construct(string $message, array $data = [], ?\Throwable $previous = null, $code = 0) {
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
