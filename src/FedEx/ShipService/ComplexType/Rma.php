<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Return Merchant Authorization
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class Rma
    extends AbstractComplexType
{
    protected $_name = 'Rma';

    /**
     * The RMA number.
     *
     * @param string $Number
     * return Rma
     */
    public function setNumber($number)
    {
        $this->Number = $number;
        return $this;
    }
    
    /**
     * The reason for the return.
     *
     * @param string $Reason
     * return Rma
     */
    public function setReason($reason)
    {
        $this->Reason = $reason;
        return $this;
    }
    

    
}