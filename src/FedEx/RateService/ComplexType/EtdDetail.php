<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Electronic Trade document references used with the ETD special service.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class EtdDetail
    extends AbstractComplexType
{
    protected $_name = 'EtdDetail';

    /**
     * Indicates the types of shipping documents produced for the shipper by FedEx (see ShippingDocumentSpecification) which should be copied back to the shipper in the shipment result data.
     *
     * @param array[RequestedShippingDocumentType] $RequestedDocumentCopies
     * return EtdDetail
     */
    public function setRequestedDocumentCopies(array $requestedDocumentCopies)
    {
        $this->RequestedDocumentCopies = $requestedDocumentCopies;
        return $this;
    }
    
    /**
     * Currently not supported.
     *
     * @param array[UploadDocumentDetail] $Documents
     * return EtdDetail
     */
    public function setDocuments(array $documents)
    {
        $this->Documents = $documents;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[UploadDocumentReferenceDetail] $DocumentReferences
     * return EtdDetail
     */
    public function setDocumentReferences(array $documentReferences)
    {
        $this->DocumentReferences = $documentReferences;
        return $this;
    }
    

    
}