<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The dimensions of this package and the unit type used for the measurements.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 *
 * @property nonNegativeInteger $Length
 * @property nonNegativeInteger $Width
 * @property nonNegativeInteger $Height
 * @property \FedEx\ShipService\SimpleType\LinearUnits|string $Units

 */
class Dimensions extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Dimensions';

    /**
     * Set Length
     *
     * @param nonNegativeInteger $length
     * @return $this
     */
    public function setLength($length)
    {
        $this->values['Length'] = $length;
        return $this;
    }

    /**
     * Set Width
     *
     * @param nonNegativeInteger $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->values['Width'] = $width;
        return $this;
    }

    /**
     * Set Height
     *
     * @param nonNegativeInteger $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->values['Height'] = $height;
        return $this;
    }

    /**
     * Set Units
     *
     * @param \FedEx\ShipService\SimpleType\LinearUnits|string $units
     * @return $this
     */
    public function setUnits($units)
    {
        $this->values['Units'] = $units;
        return $this;
    }

    
}
