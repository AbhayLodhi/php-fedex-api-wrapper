<?php
namespace FedEx\Pickup\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Driving or other transportation distances, distinct from dimension measurements.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class Distance
    extends AbstractComplexType
{
    protected $_name = 'Distance';

    /**
     * Identifies the distance quantity.
     *
     * @param decimal $Value
     * return Distance
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Identifies the unit of measure for the distance value.
     *
     * @param DistanceUnits $Units
     * return Distance
     */
    public function setUnits(\FedEx\Pickup\SimpleType\DistanceUnits $units)
    {
        $this->Units = $units;
        return $this;
    }
    

    
}