<?php namespace CVE\Services\Validation;

use Validator as V;

abstract class Validator {

  public function validate($input, $rules) {
    $validation = V::make($input, $rules);

    if($validation->fails()) {
      throw new ValidationException($validation->messages());
    }

    return true;
  }

  // Validate for creations using rules array from Child Class
  public function validateForCreation($input) {
    return $this->validate($input, $this->rules);
  }

  // Validate for update using updateRules array from Child Class
  public function validateForUpdate($input) {
    return $this->validate($input, $this->updateRules);
  }
}
