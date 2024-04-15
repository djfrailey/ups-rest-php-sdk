<?php

namespace ShipStream\Ups\Api\Model;

class PackageResultsBaseServiceCharge extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * BaseServiceCharge currency code type. The currency code used in the Shipment request is returned.
     *
     * @var string|null
     */
    protected $currencyCode;
    /**
     * Base Service Charge value amount.  Valid values are from 0 to 99999999999999.99
     *
     * @var string|null
     */
    protected $monetaryValue;
    /**
     * BaseServiceCharge currency code type. The currency code used in the Shipment request is returned.
     *
     * @return string|null
     */
    public function getCurrencyCode() : ?string
    {
        return $this->currencyCode;
    }
    /**
     * BaseServiceCharge currency code type. The currency code used in the Shipment request is returned.
     *
     * @param string|null $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode) : self
    {
        $this->initialized['currencyCode'] = true;
        $this->currencyCode = $currencyCode;
        return $this;
    }
    /**
     * Base Service Charge value amount.  Valid values are from 0 to 99999999999999.99
     *
     * @return string|null
     */
    public function getMonetaryValue() : ?string
    {
        return $this->monetaryValue;
    }
    /**
     * Base Service Charge value amount.  Valid values are from 0 to 99999999999999.99
     *
     * @param string|null $monetaryValue
     *
     * @return self
     */
    public function setMonetaryValue(?string $monetaryValue) : self
    {
        $this->initialized['monetaryValue'] = true;
        $this->monetaryValue = $monetaryValue;
        return $this;
    }
}