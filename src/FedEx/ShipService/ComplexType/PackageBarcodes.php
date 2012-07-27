<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Each instance of this data type represents the set of barcodes (of all types) which are associated with a specific package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PackageBarcodes
    extends AbstractComplexType
{
    protected $_name = 'PackageBarcodes';

    /**
     * Binary-style barcodes for this package.
     *
     * @param array[BinaryBarcode] $BinaryBarcodes
     * return PackageBarcodes
     */
    public function setBinaryBarcodes(array $binaryBarcodes)
    {
        $this->BinaryBarcodes = $binaryBarcodes;
        return $this;
    }
    
    /**
     * String-style barcodes for this package.
     *
     * @param array[StringBarcode] $StringBarcodes
     * return PackageBarcodes
     */
    public function setStringBarcodes(array $stringBarcodes)
    {
        $this->StringBarcodes = $stringBarcodes;
        return $this;
    }
    

    
}