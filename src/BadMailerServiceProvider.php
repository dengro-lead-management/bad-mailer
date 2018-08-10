<?php 

namespace DenGroLeadManagement\BadMailer;

class BadMailerServiceProvider extends \Illuminate\Mail\MailServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(BadMailer::class, function () {
            return new BadMailer();
        });

        $this->app->alias(BadMailer::class, 'bad-mailer');
    }

    public function registerSwiftTransport()
    {
        $this->app['swift.transport'] = $this->app->share(function ($app) {
            // Note: This is my own implementation of transport manager as shown below
            return new TransportManager($app);
        });
    }
}