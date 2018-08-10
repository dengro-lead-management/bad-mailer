<?php

namespace DenGroLeadManagement\BadMailer;

use Illuminate\Support\Facades\Session;
use Swift_Mime_Message;
use Illuminate\Mail\Transport\Transport;
use Illuminate\Support\Facades\Log;

class BadMailerTransport extends Transport {

    /**
     * {@inheritdoc}
     */
    public function send(Swift_Mime_Message $message, &$failedRecipients = null) {
        return null;
    }
}