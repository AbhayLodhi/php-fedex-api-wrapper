<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for a FedEx email notification recipient.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class EMailNotificationRecipient
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'EMailNotificationRecipient';

    /**
     * Identifies the relationship this email recipient has to the shipment.
     *
     * @param \FedEx\Pickup\SimpleType\EMailNotificationRecipientType  $eMailNotificationRecipientType
     * return EMailNotificationRecipient
     */
    public function setEMailNotificationRecipientType(\FedEx\Pickup\SimpleType\EMailNotificationRecipientType $eMailNotificationRecipientType)
    {
        $this->EMailNotificationRecipientType = $eMailNotificationRecipientType;
        return $this;
    }
    
    /**
     * The email address to send the notification to
     *
     * @param string $eMailAddress
     * return EMailNotificationRecipient
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->EMailAddress = $eMailAddress;
        return $this;
    }
    
    /**
     * The types of email notifications being requested for this recipient.
     *
     * @param EMailNotificationEventType[] $notificationEventsRequested
     * return EMailNotificationRecipient
     */
    public function setNotificationEventsRequested(array $notificationEventsRequested)
    {
        $this->NotificationEventsRequested = $notificationEventsRequested;
        return $this;
    }
    
    /**
     * The format of the email notification.
     *
     * @param \FedEx\Pickup\SimpleType\EMailNotificationFormatType  $format
     * return EMailNotificationRecipient
     */
    public function setFormat(\FedEx\Pickup\SimpleType\EMailNotificationFormatType $format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * The language/locale to be used in this email notification.
     *
     * @param Localization $localization
     * return EMailNotificationRecipient
     */
    public function setLocalization(Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    

    
}