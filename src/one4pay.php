<?php

namespace One4payPaymentGateway\Payment;

/**
 *
 */
class one4pay
{
    public function __construct()
    {
    }

    /**
     * @return false|string
     */
    public
    function getAvailableCurrencies(){
        $allCurrencies='https://api.one4pay.com/currency/all_currencies';
        $json = file_get_contents($allCurrencies);
        return $json;

    }

    public function authentication($username,$password){
        $authentication="https://api.one4pay.com/profile/authenticate";

        $postdata = http_build_query(
            array(
                'username' => $username,
                'password' => $password
            )
        );

        $opts = array('http' =>
            array(
                'method' => 'POST',
                'header' => 'Content-type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );
        $context = stream_context_create($opts);
        return file_get_contents($authentication, false, $context);

    }

    public function payment($merchantId,$currencyCode,$cardDetails,$reference,$failureUrl,$returnUrl,$originatingApplicationName
        ,$amount,$paymentMethod,$apiMethod,$sourceType){
        $pay="https://api.one4pay.com/transaction/pay";

        $postdata = http_build_query(
            array(
                'merchantId'=>$merchantId,
                'currencyCode'=>$currencyCode,
                'cardDetails'=>$cardDetails,
                'reference'=>$reference,
                'failureUrl'=>$failureUrl,
                'returnUrl'=>$returnUrl,
                'originatingApplicationName'=>$originatingApplicationName,
                'amount'=>$amount,
                'paymentMethod'=>$paymentMethod,
                'apiMethod'=>$apiMethod,
                'sourceType'=>$sourceType
            )
        );

        $opts = array('http' =>
            array(
                'method' => 'POST',
                'header' => 'Content-type: application/x-www-form-urlencoded',
                'content' => $postdata,
                'redirect' => 'follow'
            )
        );
        $context = stream_context_create($opts);
        return file_get_contents($pay, false, $context);

    }

    /**
     *
     */
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function __get($name)
    {
        // TODO: Implement __get() method.
    }

    /**
     * @param string $name
     * @param $value
     * @return void
     */
    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
    }

    /**
     * @param string $name
     * @return bool
     */
    public function __isset($name)
    {
        // TODO: Implement __isset() method.
    }

    /**
     * @param string $name
     * @return void
     */
    public function __unset($name)
    {
        // TODO: Implement __unset() method.
    }

    /**
     * @return string[]
     */
    public function __sleep()
    {
        // TODO: Implement __sleep() method.
    }

    /**
     * @return void
     */
    public function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    /**
     * @return string
     */
    public function __toString()
    {
        // TODO: Implement __toString() method.
    }

    /**
     * @return mixed
     */
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
    }

    /**
     * @return array|null
     */
    public function __debugInfo()
    {
        // TODO: Implement __debugInfo() method.
    }

    /**
     * @param array $an_array
     * @return object|object
     */
    public static function __set_state($an_array)
    {
        // TODO: Implement __set_state() method.
    }

    /**
     * @return void
     */
    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * @return array|null
     */
    public function __serialize(): ?array
    {
        // TODO: Implement __serialize() method.
        return null;
    }

    /**
     * @param array $data
     * @return void
     */
    public function __unserialize(array $data):void
    {
        // TODO: Implement __unserialize() method.
    }


}