<?php

namespace ShipStream\Ups\Api\Model;

class PackageDimensionalWeight extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Container tag for package dimensional weight measurement units.
     *
     * @var DimensionalWeightUnitOfMeasurement
     */
    protected $unitOfMeasurement;
    /**
     * The value of package dimensional weight. A value of zero should be used for letters.
     *
     * @var string
     */
    protected $weight;
    /**
     * Container tag for package dimensional weight measurement units.
     *
     * @return DimensionalWeightUnitOfMeasurement
     */
    public function getUnitOfMeasurement() : DimensionalWeightUnitOfMeasurement
    {
        return $this->unitOfMeasurement;
    }
    /**
     * Container tag for package dimensional weight measurement units.
     *
     * @param DimensionalWeightUnitOfMeasurement $unitOfMeasurement
     *
     * @return self
     */
    public function setUnitOfMeasurement(DimensionalWeightUnitOfMeasurement $unitOfMeasurement) : self
    {
        $this->initialized['unitOfMeasurement'] = true;
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }
    /**
     * The value of package dimensional weight. A value of zero should be used for letters.
     *
     * @return string
     */
    public function getWeight() : string
    {
        return $this->weight;
    }
    /**
     * The value of package dimensional weight. A value of zero should be used for letters.
     *
     * @param string $weight
     *
     * @return self
     */
    public function setWeight(string $weight) : self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;
        return $this;
    }
}