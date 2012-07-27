<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Return Email Details
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ReturnEMailDetail
    extends AbstractComplexType
{
    protected $_name = 'ReturnEMailDetail';

    /**
     * Phone number of the merchant
     *
     * @param string $MerchantPhoneNumber
     * return ReturnEMailDetail
     */
    public function setMerchantPhoneNumber($merchantPhoneNumber)
    {
        $this->MerchantPhoneNumber = $merchantPhoneNumber;
        return $this;
    }
    
    /**
     * Identifies the allowed (merchant-authorized) special services which may be selected when the subsequent shipment is created. Only services represented in EMailLabelAllowedSpecialServiceType will be controlled by this list.
     *
     * @param array[ReturnEMailAllowedSpecialServiceType] $AllowedSpecialServices
     * return ReturnEMailDetail
     */
    public function setAllowedSpecialServices(array $allowedSpecialServices)
    {
        $this->AllowedSpecialServices = $allowedSpecialServices;
        return $this;
    }
    

    
}