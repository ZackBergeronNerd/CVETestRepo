<?php namespace CVE\User;

use CVE\Repositories\EloquentRepository;

// User interfaces for all Eloquent Database Interactions on User Model
class EloquentUserRepository extends EloquentRepository implements UserRepositoryInterface {

    protected $model;

    public function __construct(\User $model) {
        $this->model = $model;
    }

    // User Specific methods will go here
}