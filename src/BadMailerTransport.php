<?php

namespace DenGroLeadManagement\BadMailer;

use Illuminate\Support\Facades\Session;
use Swift_Mime_Message;
use Illuminate\Mail\Transport\Transport;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;

class BadMailerTransport extends Transport {

    /**
     * {@inheritdoc}
     */
    public function send(Swift_Mime_Message $message, &$failedRecipients = null) {
        $client = new Client([
            'handler' => MockHandler::createWithMiddleware([
                new Response(400, [], "[MOCK ERROR] 'to' parameter is not a valid address. please check documentation")
            ]),
        ]);

        $response = $client->post('/messages.mime');

        return $response->getBody();
    }
}