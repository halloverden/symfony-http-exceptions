<?php


namespace HalloVerden\HttpExceptions\Http;

/**
 * Class HttpException
 *
 * @package HalloVerden\HttpExceptions\Http
 */
class HttpException extends \Symfony\Component\HttpKernel\Exception\HttpException {
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
   * @param string     $message  The internal exception message
   * @param array|null $data
   * @param \Exception $previous The previous exception
   * @param array      $headers
   * @param int        $code     The internal exception code
   */
  public function __construct( int $statusCode, $message = null, array $data = null, \Exception $previous = null, array $headers = [], $code = 0 ) {
    $this->data = $data;

    parent::__construct($statusCode, $message, $previous, $headers, $code);
  }

//  private function checkForErrors() {
//    if (!$this->data || !is_array($this->data) || !array_key_exists('errors', $this->data)) {
//      return;
//    }
//
//    $e = $this->data['errors'];
//    $errors = [];
//
//    if ($e instanceof ConstraintViolationList) {
//      foreach ($e as $constraintViolation) {
//        /* @var $constraintViolation ConstraintViolation */
//        $errors[] = [
//          'code' => $constraintViolation->getCode(),
//          'message' => $constraintViolation->getMessage(),
//          'path' => $constraintViolation->getPropertyPath()
//        ];
//      }
//
//      $this->data['errors'] = $errors;
//    }
//  }

  /**
   * @return array|null
   */
  public function getData(): ?array {
//    $this->checkForErrors();

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
