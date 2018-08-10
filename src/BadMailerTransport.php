<?php

namespace DenGroLeadManagement\BadMailer;

use Illuminate\Support\Facades\Session;
use Swift_Mime_SimpleMessage;
use Illuminate\Mail\Transport\Transport;
use Illuminate\Support\Facades\Log;

class BadMailerTransport extends Transport {

    /**
     * {@inheritdoc}
     */
    public function send(Swift_Mime_SimpleMessage $message, &$failedRecipients = null) {
        Log::debug('sending');

        return null;
    }
}