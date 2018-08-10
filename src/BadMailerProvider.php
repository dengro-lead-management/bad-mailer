<?php

namespace DenGroLeadManagement\BadMailer;

use Illuminate\Foundation\Http\Kernel;
use Illuminate\Mail\MailServiceProvider;
use Illuminate\Support\ServiceProvider;
use Swift_Mailer;

class BadMailerProvider extends MailServiceProvider
{
    /**
     * Register the Swift Mailer instance.
     *
     * @return void
     */
    function registerSwiftMailer()
    {
        if ($this->app['config']['mail.driver'] == 'badmailer') {
            $this->registerPreviewSwiftMailer();
        } else {
            parent::registerSwiftMailer();
        }
    }

    /**
     * Register the Preview Swift Mailer instance.
     *
     * @return void
     */
    protected function registerPreviewSwiftMailer()
    {
        $this->app->singleton('swift.mailer', function($app) {
            return new Swift_Mailer(
                new BadMailerTransport()
            );
        });
    }
}