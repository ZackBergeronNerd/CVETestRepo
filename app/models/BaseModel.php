<?php

class BaseModel extends Eloquent {

  public function getClass() {
    return get_class($this);
  }

  public function update(array $attributes = []) {
    $class = get_class($this);
    $validatorPath = "CVE\\Services\\Validation\\{$class}Validator";

    if(class_exists($validatorPath)) {
      App::make($validatorPath)->validateForUpdate($attributes);
    }

    return parent::update($attributes);
  }

  public static function create(array $attributes = []) {

    $class = get_called_class();
    $validatorPath = "CVE\\Services\\Validation\\{$class}Validator";

    if(class_exists($validatorPath)) {
      App::make($validatorPath)->validateForCreation($attributes);
    }

    return parent::create($attributes);
  }

}
