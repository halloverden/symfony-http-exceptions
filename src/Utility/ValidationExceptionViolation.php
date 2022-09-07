<?php


namespace HalloVerden\HttpExceptions\Utility;

/**
 * Class ValidationExceptionViolation
 *
 * @package HalloVerden\RequestEntityBundle\Exception
 */
class ValidationExceptionViolation {
  private ?string $errorName = null;
  private mixed $invalidValue;
  private string $message;
  private string $propertyPath;

  /**
   * ValidationExceptionViolation constructor.
   *
   * @param mixed  $invalidValue
   * @param string $message
   * @param string $propertyPath
   */
  public function __construct(mixed $invalidValue, string $message, string $propertyPath) {
    $this->invalidValue = $invalidValue;
    $this->message = $message;
    $this->propertyPath = $propertyPath;
  }

  /**
   * @return string|null
   */
  public function getErrorName(): ?string {
    return $this->errorName;
  }

  /**
   * @param string|null $errorName
   */
  public function setErrorName(?string $errorName): void {
    $this->errorName = $errorName;
  }

  /**
   * @return mixed
   */
  public function getInvalidValue() {
    return $this->invalidValue;
  }

  /**
   * @param mixed $invalidValue
   */
  public function setInvalidValue(mixed $invalidValue): void {
    $this->invalidValue = $invalidValue;
  }

  /**
   * @return string|null
   */
  public function getMessage(): ?string {
    return $this->message;
  }

  /**
   * @param string|null $message
   */
  public function setMessage(?string $message): void {
    $this->message = $message;
  }

  /**
   * @return string|null
   */
  public function getPropertyPath(): ?string {
    return $this->propertyPath;
  }

  /**
   * @return array
   */
  public function toArray(): array {
    $a = [
      'invalidValue' => $this->getInvalidValue(),
      'message' => $this->getMessage(),
      'propertyPath' => $this->getPropertyPath()
    ];

    if ($this->getErrorName()) {
      $a['errorName'] = $this->getErrorName();
    }

    return $a;
  }
}
