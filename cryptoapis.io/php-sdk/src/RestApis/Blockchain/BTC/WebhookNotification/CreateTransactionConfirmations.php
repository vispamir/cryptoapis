<?php

namespace RestApis\Blockchain\BTC\WebhookNotification;

use Common\Response;
use RestApis\Blockchain\BTC\Common;
use RestApis\Blockchain\Constants;

class CreateTransactionConfirmations extends Common {

    protected $network;

    /**
     * @param $network string
     * @param $url string
     * @param $address string
     * @param $confirmations integer
     * @return \stdClass
     */

    public function create($network,$url, $address, $confirmations)
    {
        $this->network = $network;

        $params = [
            'event' => Constants::$BTC_WEBHOOK_CONFIRMED_TX_EVENT,
            'url' => $url,
            'address' => $address,
            'confirmations' => $confirmations
        ];
        return (new Response(
            $this->request([
                'method' => 'POST',
                'params' => $params
            ])
        ))->get();
    }

    protected function getEndPoint()
    {
        return $this->endpoint . '/' . $this->network . '/hooks';
    }
}