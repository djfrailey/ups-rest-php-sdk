<?php

namespace ShipStream\Ups\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ShipStream\Ups\Api\Runtime\Normalizer\CheckArray;
use ShipStream\Ups\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class FreightPickupRequestShipmentServiceOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequestShipmentServiceOptions';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\FreightPickupRequestShipmentServiceOptions';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ShipStream\Ups\Api\Model\FreightPickupRequestShipmentServiceOptions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('FreezableProtectionIndicator', $data)) {
            $object->setFreezableProtectionIndicator($data['FreezableProtectionIndicator']);
            unset($data['FreezableProtectionIndicator']);
        }
        if (\array_key_exists('LimitedAccessPickupIndicator', $data)) {
            $object->setLimitedAccessPickupIndicator($data['LimitedAccessPickupIndicator']);
            unset($data['LimitedAccessPickupIndicator']);
        }
        if (\array_key_exists('LimitedAccessDeliveryIndicator', $data)) {
            $object->setLimitedAccessDeliveryIndicator($data['LimitedAccessDeliveryIndicator']);
            unset($data['LimitedAccessDeliveryIndicator']);
        }
        if (\array_key_exists('ExtremeLengthIndicator', $data)) {
            $object->setExtremeLengthIndicator($data['ExtremeLengthIndicator']);
            unset($data['ExtremeLengthIndicator']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('freezableProtectionIndicator') && null !== $object->getFreezableProtectionIndicator()) {
            $data['FreezableProtectionIndicator'] = $object->getFreezableProtectionIndicator();
        }
        if ($object->isInitialized('limitedAccessPickupIndicator') && null !== $object->getLimitedAccessPickupIndicator()) {
            $data['LimitedAccessPickupIndicator'] = $object->getLimitedAccessPickupIndicator();
        }
        if ($object->isInitialized('limitedAccessDeliveryIndicator') && null !== $object->getLimitedAccessDeliveryIndicator()) {
            $data['LimitedAccessDeliveryIndicator'] = $object->getLimitedAccessDeliveryIndicator();
        }
        if ($object->isInitialized('extremeLengthIndicator') && null !== $object->getExtremeLengthIndicator()) {
            $data['ExtremeLengthIndicator'] = $object->getExtremeLengthIndicator();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('ShipStream\\Ups\\Api\\Model\\FreightPickupRequestShipmentServiceOptions' => false);
    }
}