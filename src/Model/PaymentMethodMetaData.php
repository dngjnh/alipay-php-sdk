<?php

namespace Chicv\AlipayPhpSdk\Model;

class PaymentMethodMetaData
{
    public $bankIdentifierCode;

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
}
