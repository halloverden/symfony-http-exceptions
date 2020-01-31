<?php


namespace HalloVerden\HttpExceptions;


interface DataExceptionInterface {

  /**
   * @return array|null
   */
  public function getData(): ?array;
}
