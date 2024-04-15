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
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class DeliveryLocationAddressArtifactFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\DeliveryLocationAddressArtifactFormat';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\DeliveryLocationAddressArtifactFormat';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\DeliveryLocationAddressArtifactFormat();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ConsigneeName', $data) && $data['ConsigneeName'] !== null) {
                $object->setConsigneeName($data['ConsigneeName']);
                unset($data['ConsigneeName']);
            }
            elseif (\array_key_exists('ConsigneeName', $data) && $data['ConsigneeName'] === null) {
                $object->setConsigneeName(null);
            }
            if (\array_key_exists('StreetNumberLow', $data) && $data['StreetNumberLow'] !== null) {
                $object->setStreetNumberLow($data['StreetNumberLow']);
                unset($data['StreetNumberLow']);
            }
            elseif (\array_key_exists('StreetNumberLow', $data) && $data['StreetNumberLow'] === null) {
                $object->setStreetNumberLow(null);
            }
            if (\array_key_exists('StreetPrefix', $data) && $data['StreetPrefix'] !== null) {
                $object->setStreetPrefix($data['StreetPrefix']);
                unset($data['StreetPrefix']);
            }
            elseif (\array_key_exists('StreetPrefix', $data) && $data['StreetPrefix'] === null) {
                $object->setStreetPrefix(null);
            }
            if (\array_key_exists('StreetName', $data) && $data['StreetName'] !== null) {
                $object->setStreetName($data['StreetName']);
                unset($data['StreetName']);
            }
            elseif (\array_key_exists('StreetName', $data) && $data['StreetName'] === null) {
                $object->setStreetName(null);
            }
            if (\array_key_exists('StreetType', $data) && $data['StreetType'] !== null) {
                $object->setStreetType($data['StreetType']);
                unset($data['StreetType']);
            }
            elseif (\array_key_exists('StreetType', $data) && $data['StreetType'] === null) {
                $object->setStreetType(null);
            }
            if (\array_key_exists('StreetSuffix', $data) && $data['StreetSuffix'] !== null) {
                $object->setStreetSuffix($data['StreetSuffix']);
                unset($data['StreetSuffix']);
            }
            elseif (\array_key_exists('StreetSuffix', $data) && $data['StreetSuffix'] === null) {
                $object->setStreetSuffix(null);
            }
            if (\array_key_exists('BuildingName', $data) && $data['BuildingName'] !== null) {
                $object->setBuildingName($data['BuildingName']);
                unset($data['BuildingName']);
            }
            elseif (\array_key_exists('BuildingName', $data) && $data['BuildingName'] === null) {
                $object->setBuildingName(null);
            }
            if (\array_key_exists('AddressExtendedInformation', $data) && $data['AddressExtendedInformation'] !== null) {
                $values = [];
                foreach ($data['AddressExtendedInformation'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\AddressArtifactFormatAddressExtendedInformation', 'json', $context);
                }
                $object->setAddressExtendedInformation($values);
                unset($data['AddressExtendedInformation']);
            }
            elseif (\array_key_exists('AddressExtendedInformation', $data) && $data['AddressExtendedInformation'] === null) {
                $object->setAddressExtendedInformation(null);
            }
            if (\array_key_exists('PoliticalDivision3', $data) && $data['PoliticalDivision3'] !== null) {
                $object->setPoliticalDivision3($data['PoliticalDivision3']);
                unset($data['PoliticalDivision3']);
            }
            elseif (\array_key_exists('PoliticalDivision3', $data) && $data['PoliticalDivision3'] === null) {
                $object->setPoliticalDivision3(null);
            }
            if (\array_key_exists('PoliticalDivision2', $data) && $data['PoliticalDivision2'] !== null) {
                $object->setPoliticalDivision2($data['PoliticalDivision2']);
                unset($data['PoliticalDivision2']);
            }
            elseif (\array_key_exists('PoliticalDivision2', $data) && $data['PoliticalDivision2'] === null) {
                $object->setPoliticalDivision2(null);
            }
            if (\array_key_exists('PoliticalDivision1', $data) && $data['PoliticalDivision1'] !== null) {
                $object->setPoliticalDivision1($data['PoliticalDivision1']);
                unset($data['PoliticalDivision1']);
            }
            elseif (\array_key_exists('PoliticalDivision1', $data) && $data['PoliticalDivision1'] === null) {
                $object->setPoliticalDivision1(null);
            }
            if (\array_key_exists('CountryCode', $data) && $data['CountryCode'] !== null) {
                $object->setCountryCode($data['CountryCode']);
                unset($data['CountryCode']);
            }
            elseif (\array_key_exists('CountryCode', $data) && $data['CountryCode'] === null) {
                $object->setCountryCode(null);
            }
            if (\array_key_exists('PostcodePrimaryLow', $data) && $data['PostcodePrimaryLow'] !== null) {
                $object->setPostcodePrimaryLow($data['PostcodePrimaryLow']);
                unset($data['PostcodePrimaryLow']);
            }
            elseif (\array_key_exists('PostcodePrimaryLow', $data) && $data['PostcodePrimaryLow'] === null) {
                $object->setPostcodePrimaryLow(null);
            }
            if (\array_key_exists('PostcodeExtendedLow', $data) && $data['PostcodeExtendedLow'] !== null) {
                $object->setPostcodeExtendedLow($data['PostcodeExtendedLow']);
                unset($data['PostcodeExtendedLow']);
            }
            elseif (\array_key_exists('PostcodeExtendedLow', $data) && $data['PostcodeExtendedLow'] === null) {
                $object->setPostcodeExtendedLow(null);
            }
            if (\array_key_exists('ResidentialAddressIndicator', $data) && $data['ResidentialAddressIndicator'] !== null) {
                $object->setResidentialAddressIndicator($data['ResidentialAddressIndicator']);
                unset($data['ResidentialAddressIndicator']);
            }
            elseif (\array_key_exists('ResidentialAddressIndicator', $data) && $data['ResidentialAddressIndicator'] === null) {
                $object->setResidentialAddressIndicator(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('consigneeName') && null !== $object->getConsigneeName()) {
                $data['ConsigneeName'] = $object->getConsigneeName();
            }
            if ($object->isInitialized('streetNumberLow') && null !== $object->getStreetNumberLow()) {
                $data['StreetNumberLow'] = $object->getStreetNumberLow();
            }
            if ($object->isInitialized('streetPrefix') && null !== $object->getStreetPrefix()) {
                $data['StreetPrefix'] = $object->getStreetPrefix();
            }
            if ($object->isInitialized('streetName') && null !== $object->getStreetName()) {
                $data['StreetName'] = $object->getStreetName();
            }
            if ($object->isInitialized('streetType') && null !== $object->getStreetType()) {
                $data['StreetType'] = $object->getStreetType();
            }
            if ($object->isInitialized('streetSuffix') && null !== $object->getStreetSuffix()) {
                $data['StreetSuffix'] = $object->getStreetSuffix();
            }
            if ($object->isInitialized('buildingName') && null !== $object->getBuildingName()) {
                $data['BuildingName'] = $object->getBuildingName();
            }
            if ($object->isInitialized('addressExtendedInformation') && null !== $object->getAddressExtendedInformation()) {
                $values = [];
                foreach ($object->getAddressExtendedInformation() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['AddressExtendedInformation'] = $values;
            }
            if ($object->isInitialized('politicalDivision3') && null !== $object->getPoliticalDivision3()) {
                $data['PoliticalDivision3'] = $object->getPoliticalDivision3();
            }
            if ($object->isInitialized('politicalDivision2') && null !== $object->getPoliticalDivision2()) {
                $data['PoliticalDivision2'] = $object->getPoliticalDivision2();
            }
            if ($object->isInitialized('politicalDivision1') && null !== $object->getPoliticalDivision1()) {
                $data['PoliticalDivision1'] = $object->getPoliticalDivision1();
            }
            if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
                $data['CountryCode'] = $object->getCountryCode();
            }
            if ($object->isInitialized('postcodePrimaryLow') && null !== $object->getPostcodePrimaryLow()) {
                $data['PostcodePrimaryLow'] = $object->getPostcodePrimaryLow();
            }
            if ($object->isInitialized('postcodeExtendedLow') && null !== $object->getPostcodeExtendedLow()) {
                $data['PostcodeExtendedLow'] = $object->getPostcodeExtendedLow();
            }
            $data['ResidentialAddressIndicator'] = $object->getResidentialAddressIndicator();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\DeliveryLocationAddressArtifactFormat' => false];
        }
    }
} else {
    class DeliveryLocationAddressArtifactFormatNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\DeliveryLocationAddressArtifactFormat';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\DeliveryLocationAddressArtifactFormat';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\DeliveryLocationAddressArtifactFormat();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ConsigneeName', $data) && $data['ConsigneeName'] !== null) {
                $object->setConsigneeName($data['ConsigneeName']);
                unset($data['ConsigneeName']);
            }
            elseif (\array_key_exists('ConsigneeName', $data) && $data['ConsigneeName'] === null) {
                $object->setConsigneeName(null);
            }
            if (\array_key_exists('StreetNumberLow', $data) && $data['StreetNumberLow'] !== null) {
                $object->setStreetNumberLow($data['StreetNumberLow']);
                unset($data['StreetNumberLow']);
            }
            elseif (\array_key_exists('StreetNumberLow', $data) && $data['StreetNumberLow'] === null) {
                $object->setStreetNumberLow(null);
            }
            if (\array_key_exists('StreetPrefix', $data) && $data['StreetPrefix'] !== null) {
                $object->setStreetPrefix($data['StreetPrefix']);
                unset($data['StreetPrefix']);
            }
            elseif (\array_key_exists('StreetPrefix', $data) && $data['StreetPrefix'] === null) {
                $object->setStreetPrefix(null);
            }
            if (\array_key_exists('StreetName', $data) && $data['StreetName'] !== null) {
                $object->setStreetName($data['StreetName']);
                unset($data['StreetName']);
            }
            elseif (\array_key_exists('StreetName', $data) && $data['StreetName'] === null) {
                $object->setStreetName(null);
            }
            if (\array_key_exists('StreetType', $data) && $data['StreetType'] !== null) {
                $object->setStreetType($data['StreetType']);
                unset($data['StreetType']);
            }
            elseif (\array_key_exists('StreetType', $data) && $data['StreetType'] === null) {
                $object->setStreetType(null);
            }
            if (\array_key_exists('StreetSuffix', $data) && $data['StreetSuffix'] !== null) {
                $object->setStreetSuffix($data['StreetSuffix']);
                unset($data['StreetSuffix']);
            }
            elseif (\array_key_exists('StreetSuffix', $data) && $data['StreetSuffix'] === null) {
                $object->setStreetSuffix(null);
            }
            if (\array_key_exists('BuildingName', $data) && $data['BuildingName'] !== null) {
                $object->setBuildingName($data['BuildingName']);
                unset($data['BuildingName']);
            }
            elseif (\array_key_exists('BuildingName', $data) && $data['BuildingName'] === null) {
                $object->setBuildingName(null);
            }
            if (\array_key_exists('AddressExtendedInformation', $data) && $data['AddressExtendedInformation'] !== null) {
                $values = [];
                foreach ($data['AddressExtendedInformation'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'ShipStream\\Ups\\Api\\Model\\AddressArtifactFormatAddressExtendedInformation', 'json', $context);
                }
                $object->setAddressExtendedInformation($values);
                unset($data['AddressExtendedInformation']);
            }
            elseif (\array_key_exists('AddressExtendedInformation', $data) && $data['AddressExtendedInformation'] === null) {
                $object->setAddressExtendedInformation(null);
            }
            if (\array_key_exists('PoliticalDivision3', $data) && $data['PoliticalDivision3'] !== null) {
                $object->setPoliticalDivision3($data['PoliticalDivision3']);
                unset($data['PoliticalDivision3']);
            }
            elseif (\array_key_exists('PoliticalDivision3', $data) && $data['PoliticalDivision3'] === null) {
                $object->setPoliticalDivision3(null);
            }
            if (\array_key_exists('PoliticalDivision2', $data) && $data['PoliticalDivision2'] !== null) {
                $object->setPoliticalDivision2($data['PoliticalDivision2']);
                unset($data['PoliticalDivision2']);
            }
            elseif (\array_key_exists('PoliticalDivision2', $data) && $data['PoliticalDivision2'] === null) {
                $object->setPoliticalDivision2(null);
            }
            if (\array_key_exists('PoliticalDivision1', $data) && $data['PoliticalDivision1'] !== null) {
                $object->setPoliticalDivision1($data['PoliticalDivision1']);
                unset($data['PoliticalDivision1']);
            }
            elseif (\array_key_exists('PoliticalDivision1', $data) && $data['PoliticalDivision1'] === null) {
                $object->setPoliticalDivision1(null);
            }
            if (\array_key_exists('CountryCode', $data) && $data['CountryCode'] !== null) {
                $object->setCountryCode($data['CountryCode']);
                unset($data['CountryCode']);
            }
            elseif (\array_key_exists('CountryCode', $data) && $data['CountryCode'] === null) {
                $object->setCountryCode(null);
            }
            if (\array_key_exists('PostcodePrimaryLow', $data) && $data['PostcodePrimaryLow'] !== null) {
                $object->setPostcodePrimaryLow($data['PostcodePrimaryLow']);
                unset($data['PostcodePrimaryLow']);
            }
            elseif (\array_key_exists('PostcodePrimaryLow', $data) && $data['PostcodePrimaryLow'] === null) {
                $object->setPostcodePrimaryLow(null);
            }
            if (\array_key_exists('PostcodeExtendedLow', $data) && $data['PostcodeExtendedLow'] !== null) {
                $object->setPostcodeExtendedLow($data['PostcodeExtendedLow']);
                unset($data['PostcodeExtendedLow']);
            }
            elseif (\array_key_exists('PostcodeExtendedLow', $data) && $data['PostcodeExtendedLow'] === null) {
                $object->setPostcodeExtendedLow(null);
            }
            if (\array_key_exists('ResidentialAddressIndicator', $data) && $data['ResidentialAddressIndicator'] !== null) {
                $object->setResidentialAddressIndicator($data['ResidentialAddressIndicator']);
                unset($data['ResidentialAddressIndicator']);
            }
            elseif (\array_key_exists('ResidentialAddressIndicator', $data) && $data['ResidentialAddressIndicator'] === null) {
                $object->setResidentialAddressIndicator(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('consigneeName') && null !== $object->getConsigneeName()) {
                $data['ConsigneeName'] = $object->getConsigneeName();
            }
            if ($object->isInitialized('streetNumberLow') && null !== $object->getStreetNumberLow()) {
                $data['StreetNumberLow'] = $object->getStreetNumberLow();
            }
            if ($object->isInitialized('streetPrefix') && null !== $object->getStreetPrefix()) {
                $data['StreetPrefix'] = $object->getStreetPrefix();
            }
            if ($object->isInitialized('streetName') && null !== $object->getStreetName()) {
                $data['StreetName'] = $object->getStreetName();
            }
            if ($object->isInitialized('streetType') && null !== $object->getStreetType()) {
                $data['StreetType'] = $object->getStreetType();
            }
            if ($object->isInitialized('streetSuffix') && null !== $object->getStreetSuffix()) {
                $data['StreetSuffix'] = $object->getStreetSuffix();
            }
            if ($object->isInitialized('buildingName') && null !== $object->getBuildingName()) {
                $data['BuildingName'] = $object->getBuildingName();
            }
            if ($object->isInitialized('addressExtendedInformation') && null !== $object->getAddressExtendedInformation()) {
                $values = [];
                foreach ($object->getAddressExtendedInformation() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['AddressExtendedInformation'] = $values;
            }
            if ($object->isInitialized('politicalDivision3') && null !== $object->getPoliticalDivision3()) {
                $data['PoliticalDivision3'] = $object->getPoliticalDivision3();
            }
            if ($object->isInitialized('politicalDivision2') && null !== $object->getPoliticalDivision2()) {
                $data['PoliticalDivision2'] = $object->getPoliticalDivision2();
            }
            if ($object->isInitialized('politicalDivision1') && null !== $object->getPoliticalDivision1()) {
                $data['PoliticalDivision1'] = $object->getPoliticalDivision1();
            }
            if ($object->isInitialized('countryCode') && null !== $object->getCountryCode()) {
                $data['CountryCode'] = $object->getCountryCode();
            }
            if ($object->isInitialized('postcodePrimaryLow') && null !== $object->getPostcodePrimaryLow()) {
                $data['PostcodePrimaryLow'] = $object->getPostcodePrimaryLow();
            }
            if ($object->isInitialized('postcodeExtendedLow') && null !== $object->getPostcodeExtendedLow()) {
                $data['PostcodeExtendedLow'] = $object->getPostcodeExtendedLow();
            }
            $data['ResidentialAddressIndicator'] = $object->getResidentialAddressIndicator();
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\DeliveryLocationAddressArtifactFormat' => false];
        }
    }
}