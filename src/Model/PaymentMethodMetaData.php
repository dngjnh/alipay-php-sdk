<?php

namespace Chicv\AlipayPhpSdk\Model;

class PaymentMethodMetaData
{
    public $bankIdentifierCode;

    public $blikCode;

    public $payerEmail;

    /**
     * @return mixed
     */
    public function getBankIdentifierCode()
    {
        return $this->bankIdentifierCode;
    }

    /**
     * @param mixed $paymentMethodType
     */
    public function setBankIdentifierCode($bankIdentifierCode)
    {
        $this->bankIdentifierCode = $bankIdentifierCode;
    }

    /**
     * @return mixed
     */
    public function getBlikCode()
    {
        return $this->blikCode;
    }

    /**
     * @param mixed $blikCode
     * @return void
     */
    public function setBlikCode($blikCode)
    {
        $this->blikCode = $blikCode;
    }

    /**
     * @return mixed
     */
    public function getPayerEmail()
    {
        return $this->payerEmail;
    }

    /**
     * @param mixed $payerEmail
     * @return void
     */
    public function setPayerEmail($payerEmail)
    {
        $this->blikCode = $payerEmail;
    }
}
