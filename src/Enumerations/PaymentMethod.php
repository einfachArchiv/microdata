<?php

namespace einfachArchiv\Microdata\Enumerations;

class PaymentMethod extends Enumeration
{
    /**
     * The members.
     *
     * @var array
     */
    protected $members = [
        'http://purl.org/goodrelations/v1#ByBankTransferInAdvance',
        'http://purl.org/goodrelations/v1#ByInvoice',
        'http://purl.org/goodrelations/v1#Cash',
        'http://purl.org/goodrelations/v1#CheckInAdvance',
        'http://purl.org/goodrelations/v1#COD',
        'http://purl.org/goodrelations/v1#DirectDebit',
        'http://purl.org/goodrelations/v1#GoogleCheckout',
        'http://purl.org/goodrelations/v1#PayPal',
        'http://purl.org/goodrelations/v1#PaySwarm',
    ];
}
