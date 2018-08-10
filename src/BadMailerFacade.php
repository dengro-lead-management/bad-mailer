<?php

namespace DenGroLeadManagement\BadMailer;

use Illuminate\Support\Facades\Facade;

class BadMailerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bad-mailer';
    }
}