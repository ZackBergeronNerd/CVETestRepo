<?php namespace CVE\Clearview;

use Illuminate\Support\ServiceProvider;

class ClearviewServiceProvider extends ServiceProvider {

    /**
     * Register CVE User bindings
     *
     * @return void
     */
    public function register() {
        $this->app->bind('clearview', function($app) {
            return new \CVE\Clearview\ClearviewRepository( new \User,
                                            new \Client,
                                            new \UserWebsite,
                                            new \UserWebsiteSend,
                                            new \UserWebsiteOpen,
                                            new \UserWebsitePageOpen);
        });
    }
}
