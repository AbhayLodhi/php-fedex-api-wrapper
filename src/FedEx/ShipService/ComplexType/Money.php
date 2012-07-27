<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for the medium of exchange for FedEx services.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class Money
    extends AbstractComplexType
{
    protected $_name = 'Money';

    /**
     * Identifies the currency of the monetary amount.
     *
     * @param string $Currency
     * return Money
     */
    public function setCurrency($currency)
    {
        $this->Currency = $currency;
        return $this;
    }
    
    /**
     * Identifies the monetary amount.
     *
     * @param decimal $Amount
     * return Money
     */
    public function setAmount($amount)
    {
        $this->Amount = $amount;
        return $this;
    }
    

    
}