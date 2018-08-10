<?php

namespace DengroLeadManagement\BadMailer\Transport;

use GuzzleHttp\ClientInterface;
use Illuminate\Mail\Transport\Transport;
use Swift_Mime_Message;

class BadMailerTransport extends Transport
{
    /**
     * Guzzle HTTP client.
     *
     * @var ClientInterface
     */
    protected $client;

    /**
     * Create a new Mailjet transport instance.
     *
     * @param  \GuzzleHttp\ClientInterface $client
     * @param $apiKey
     * @param $secretKey
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * Send the given Message.
     *
     * Recipient/sender data will be retrieved from the Message API.
     * The return value is the number of recipients who were accepted for delivery.
     *
     * @param Swift_Mime_Message $message
     * @param string[] $failedRecipients An array of failures by-reference
     *
     * @return int
     */
    public function send(Swift_Mime_Message $message, &$failedRecipients = null)
    {
        logger()->debug('asdasd');
        
        return 'send error';
        // return $this->client->post($this->endPoint, $payload);
    }
}