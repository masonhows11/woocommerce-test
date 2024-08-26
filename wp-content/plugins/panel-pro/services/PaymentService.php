<?php

class PaymentService
{
    private $merchantID;
    private $client;

    /**
     * @throws SoapFault
     */
    public function __construct()
    {
            $this->merchantID = '';
            $this->client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl',['encoding' => 'UTF-8']);
    }

    public function requestPayment($params)
    {
        $amount = $params['amount'];
        $description = new $params['description'];
        $callback = $params['callback'];

        $res = $this->client->PaymentRequest([
            'MerchantID'     => $this->merchantID,
            'Description'    => $description,
            'Amount'         => $amount,
            'CallbackURL'    => $callback,
        ]);

        $_SESSION['upp_amount'] = $amount;
        if($res === 100){
            wp_redirect("https://www.zarinpal.com/pg/StartPay/",$res->Authority);
            exit();
        }
    }

    /**
     * @throws SoapFault
     */
    public function verifyPayment()
    {
        $Authority = $_GET['Authority'];
        if($_GET['Status'] == 'OK')
        {

            $result = $this->client->PaymentVerification([
                'MerchantID'     => $this->merchantID,
                'Authority'      => $Authority,
                'Amount'         =>  $_SESSION['upp_amount'],
            ]);

            if($result->Status == 100){
                echo 'Transaction success. RefID:' . $result->RefID;
            }else{
                echo 'Transaction failed. Status:' . $result->Status;
            }
        }else{
            echo 'عملیات پرداخت توسط کاربر لغو شد';
        }

    }


}