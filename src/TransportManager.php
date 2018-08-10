<?php

namespace DenGroLeadManagement\BadMailer;

use DengroLeadManagement\BadMailer\Transport\BadMailerTransport;

class TransportManager extends \Illuminate\Mail\TransportManager
{
    protected function createBadMailerDriver()
    {
        $config = $this->app['config']->get('services.bad-mailer', []);

        return new BadMailerTransport(
            $this->getHttpClient($config)
        );
    }
}