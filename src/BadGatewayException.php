<?php


namespace HalloVerden\HttpExceptions;

use HalloVerden\HttpExceptions\Http\BadGatewayHttpException;

/**
 * Class BadGatewayException
 *
 * @package HalloVerden\HttpExceptions
 */
class BadGatewayException extends BadGatewayHttpException {
  const MESSAGE = 'BAD_GATEWAY';

  /**
   * BadGatewayException constructor.
   *
   * @param string $message
   * @param array $data
   * @param \Exception|null $previous
   * @param int $code
   */
  public function __construct(string $message = null, array $data = [], \Exception $previous = null, $code = 0) {
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
