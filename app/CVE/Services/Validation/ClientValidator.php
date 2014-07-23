<?php namespace CVE\Services\Validation;

class ClientValidator extends Validator {

  // Rules for creating a new user
  protected $rules = [
    'first_name' => 'required_without_all:last_name,email',
    'last_name' => 'required_without_all:first_name,email',
    'email' => 'email|required_without_all:first_name,last_name',
    'client_type_id' => 'required',
    'client_source_id' => 'required',
    'client_status_id' => 'required',
    'client_temperature_id' => 'required'
  ];

  // Rules for updating a user
  protected $updateRules = [
    'first_name' => 'required_without_all:last_name,email',
    'last_name' => 'required_without_all:first_name,email',
    'email' => 'email|required_without_all:first_name,last_name',
    'client_type_id' => 'required',
    'client_source_id' => 'required',
    'client_status_id' => 'required',
    'client_temperature_id' => 'required'
  ];
}
