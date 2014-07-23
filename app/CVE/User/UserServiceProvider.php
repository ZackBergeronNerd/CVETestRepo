<?php namespace CVE\User;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider {

    /**
     * Register CVE User bindings
     *
     * @return void
     */
    public function register() {
        $this->app->bind('CVE\User\UserRepositoryInterface', function($app) {
          return new EloquentUserRepository(new \User);
        });
    }
}
