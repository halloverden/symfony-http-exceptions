<?php


namespace HalloVerden\HttpExceptions\Utility;


use HalloVerden\HttpExceptions\UnprocessableEntityException;
use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\Validator\ConstraintViolationInterface;
use Symfony\Component\Validator\ConstraintViolationListInterface;

class EntityValidationException extends UnprocessableEntityException {

  public function __construct(ConstraintViolationListInterface $violationList, string $message = "VALIDATION_ERROR", ?\Exception $previous = null, int $code = 0) {
    $v = [];

    foreach ($violationList as $violation) {
      /* @var $violation ConstraintViolationInterface*/
      $d = new ValidationExceptionViolation($violation->getInvalidValue(), $violation->getMessage(), $violation->getPropertyPath());

      if ($violation instanceof ConstraintViolation && null !== ($violationCode = $violation->getCode())) {
        $d->setErrorName($violation->getConstraint()::getErrorName($violationCode));
      }

      $v[] = $d->toArray();
    }

    parent::__construct($message, [
      "violations" => $v
    ], $previous, $code);
  }

  /**
   * @return string
   */
  public function __toString() {
    return __CLASS__ . ": [{$this->code}]: {$this->message} -> " . json_encode($this->data) . ".";
  }

}
