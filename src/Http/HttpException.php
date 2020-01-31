<?php


namespace HalloVerden\HttpExceptions\Http;

use HalloVerden\HttpExceptions\DataExceptionInterface;

/**
 * Class HttpException
 *
 * @package HalloVerden\HttpExceptions\Http
 */
class HttpException extends \Symfony\Component\HttpKernel\Exception\HttpException implements DataExceptionInterface {
  /**
   * @var array|null
   */
  protected $data;

  /**
   * @var array|null
   */
  protected $responseData;

  /**
   * @param int        $statusCode
   * @param string     $message The internal exception message
   * @param array|null $data
   * @param \Throwable $previous The previous exception
   * @param array      $headers
   * @param int        $code The internal exception code
   */
  public function __construct( int $statusCode, $message = null, array $data = null, \Throwable $previous = null, array $headers = [], $code = 0 ) {
    $this->data = $data;

    parent::__construct($statusCode, $message, $previous, $headers, $code);
  }

  /**
   * @return array|null
   */
  public function getData(): ?array {
    return $this->data;
  }

  /**
   * @param array|null $data
   * @return HttpException
   */
  public function setData( ?array $data ): self {
    $this->data = $data;
    return $this;
  }

  /**
   * @return array|null
   */
  public function getResponseData(): ?array {
    return $this->responseData;
  }

  /**
   * @param array|null $responseData
   * @return HttpException
   */
  public function setResponseData( ?array $responseData ): self {
    $this->responseData = $responseData;
    return $this;
  }

}
