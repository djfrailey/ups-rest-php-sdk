<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentResultsDocuments extends \ArrayObject
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
     * 
     *
     * @var DocumentsImage[]
     */
    protected $image;
    /**
     * 
     *
     * @var DocumentsForms[]
     */
    protected $forms;
    /**
     * 
     *
     * @return DocumentsImage[]
     */
    public function getImage() : array
    {
        return $this->image;
    }
    /**
     * 
     *
     * @param DocumentsImage[] $image
     *
     * @return self
     */
    public function setImage(array $image) : self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    /**
     * 
     *
     * @return DocumentsForms[]
     */
    public function getForms() : array
    {
        return $this->forms;
    }
    /**
     * 
     *
     * @param DocumentsForms[] $forms
     *
     * @return self
     */
    public function setForms(array $forms) : self
    {
        $this->initialized['forms'] = true;
        $this->forms = $forms;
        return $this;
    }
}