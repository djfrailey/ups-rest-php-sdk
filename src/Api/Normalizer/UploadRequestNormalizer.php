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
    class UploadRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\UploadRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\UploadRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \ShipStream\Ups\Api\Model\UploadRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data) && $data['Request'] !== null) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\UploadRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            elseif (\array_key_exists('Request', $data) && $data['Request'] === null) {
                $object->setRequest(null);
            }
            if (\array_key_exists('ShipperNumber', $data) && $data['ShipperNumber'] !== null) {
                $object->setShipperNumber($data['ShipperNumber']);
                unset($data['ShipperNumber']);
            }
            elseif (\array_key_exists('ShipperNumber', $data) && $data['ShipperNumber'] === null) {
                $object->setShipperNumber(null);
            }
            if (\array_key_exists('UserCreatedForm', $data) && $data['UserCreatedForm'] !== null) {
                $object->setUserCreatedForm($this->denormalizer->denormalize($data['UserCreatedForm'], 'ShipStream\\Ups\\Api\\Model\\UploadRequestUserCreatedForm', 'json', $context));
                unset($data['UserCreatedForm']);
            }
            elseif (\array_key_exists('UserCreatedForm', $data) && $data['UserCreatedForm'] === null) {
                $object->setUserCreatedForm(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
            $data['ShipperNumber'] = $object->getShipperNumber();
            $data['UserCreatedForm'] = $this->normalizer->normalize($object->getUserCreatedForm(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\UploadRequest' => false];
        }
    }
} else {
    class UploadRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'ShipStream\\Ups\\Api\\Model\\UploadRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'ShipStream\\Ups\\Api\\Model\\UploadRequest';
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
            $object = new \ShipStream\Ups\Api\Model\UploadRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('Request', $data) && $data['Request'] !== null) {
                $object->setRequest($this->denormalizer->denormalize($data['Request'], 'ShipStream\\Ups\\Api\\Model\\UploadRequestRequest', 'json', $context));
                unset($data['Request']);
            }
            elseif (\array_key_exists('Request', $data) && $data['Request'] === null) {
                $object->setRequest(null);
            }
            if (\array_key_exists('ShipperNumber', $data) && $data['ShipperNumber'] !== null) {
                $object->setShipperNumber($data['ShipperNumber']);
                unset($data['ShipperNumber']);
            }
            elseif (\array_key_exists('ShipperNumber', $data) && $data['ShipperNumber'] === null) {
                $object->setShipperNumber(null);
            }
            if (\array_key_exists('UserCreatedForm', $data) && $data['UserCreatedForm'] !== null) {
                $object->setUserCreatedForm($this->denormalizer->denormalize($data['UserCreatedForm'], 'ShipStream\\Ups\\Api\\Model\\UploadRequestUserCreatedForm', 'json', $context));
                unset($data['UserCreatedForm']);
            }
            elseif (\array_key_exists('UserCreatedForm', $data) && $data['UserCreatedForm'] === null) {
                $object->setUserCreatedForm(null);
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
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['Request'] = $this->normalizer->normalize($object->getRequest(), 'json', $context);
            $data['ShipperNumber'] = $object->getShipperNumber();
            $data['UserCreatedForm'] = $this->normalizer->normalize($object->getUserCreatedForm(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['ShipStream\\Ups\\Api\\Model\\UploadRequest' => false];
        }
    }
}