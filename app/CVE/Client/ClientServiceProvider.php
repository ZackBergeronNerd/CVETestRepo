<?php namespace CVE\Client;

use Client;
use User_client;
use User;
use Illuminate\Support\ServiceProvider;

class ClientServiceProvider extends ServiceProvider {

    /**
     * Register CVE Client bindings
     *
     * @return void
     */
    public function register() {
        $this->app->bind('CVE\Client\ClientRepositoryInterface', function($app) {
          return new EloquentClientRepository(new Client, new User, new User_client);
        });
    }
}
