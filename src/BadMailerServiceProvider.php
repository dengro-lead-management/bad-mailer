<?php 

namespace Dengro\Badmailer;

class BadmailerServiceProvider extends \Illuminate\Mail\MailServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app['config']['mail.driver'] != 'badmailer') {
            return;
        }
    }
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(BadmailerProvider::class);
    }
}