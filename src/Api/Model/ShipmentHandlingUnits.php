<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentHandlingUnits extends \ArrayObject
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
     * Handling Unit Quantity for Density based Rating
     *
     * @var string|null
     */
    protected $quantity;
    /**
     * Handling Unit Type for Density based Rating.
     *
     * @var HandlingUnitsType|null
     */
    protected $type;
    /**
     * Dimension of the handling unit for density based pricing.
     *
     * @var HandlingUnitsDimensions|null
     */
    protected $dimensions;
    /**
     * Handling Unit Quantity for Density based Rating
     *
     * @return string|null
     */
    public function getQuantity() : ?string
    {
        return $this->quantity;
    }
    /**
     * Handling Unit Quantity for Density based Rating
     *
     * @param string|null $quantity
     *
     * @return self
     */
    public function setQuantity(?string $quantity) : self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Handling Unit Type for Density based Rating.
     *
     * @return HandlingUnitsType|null
     */
    public function getType() : ?HandlingUnitsType
    {
        return $this->type;
    }
    /**
     * Handling Unit Type for Density based Rating.
     *
     * @param HandlingUnitsType|null $type
     *
     * @return self
     */
    public function setType(?HandlingUnitsType $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Dimension of the handling unit for density based pricing.
     *
     * @return HandlingUnitsDimensions|null
     */
    public function getDimensions() : ?HandlingUnitsDimensions
    {
        return $this->dimensions;
    }
    /**
     * Dimension of the handling unit for density based pricing.
     *
     * @param HandlingUnitsDimensions|null $dimensions
     *
     * @return self
     */
    public function setDimensions(?HandlingUnitsDimensions $dimensions) : self
    {
        $this->initialized['dimensions'] = true;
        $this->dimensions = $dimensions;
        return $this;
    }
}