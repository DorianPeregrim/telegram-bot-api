<?php

declare(strict_types=1);

namespace TelegramBotApi;

use Carbon\Carbon;
use ReflectionClass;
use ReflectionException;
use ReflectionNamedType;
use ReflectionProperty;

/**
 * Class UpdateMapper
 *
 * @package TelegramBotApi
 */
class UpdateMapper
{
    private const TYPE_ARRAY = 'array';
    private const TYPE_NULL  = 'null';

    private const ARRAY_CHARS = '[]';

    /**
     * @param object   $object
     * @param array    $attributes
     *
     * @return object
     * @throws ReflectionException
     */
    public function map(object $object, array $attributes): object
    {
        foreach ($attributes as $key => $value) {
            $reflection = new ReflectionClass($object);
            $propertyName = $this->toCamelCase($key);

            if (property_exists($object, $propertyName)) {
                $property = $reflection->getProperty($propertyName);
                /** @var ReflectionNamedType $type */
                $type = $property->getType();

                if ($type->isBuiltin() && $type->getName() != self::TYPE_ARRAY) {
                    $this->setValue($property, $object, $value);
                } elseif ($type->getName() == self::TYPE_ARRAY) {
                    $docParams = $this->parseDocClass($property, $reflection->getNamespaceName());

                    if ($docParams != null) {
                        $value = $this->mapTypedArray($object, $value, $docParams[0], $docParams[1]);
                    }

                    $this->setValue($property, $object, $value);
                } elseif ($type->getName() == Carbon::class) {
                    $this->setValue($property, $object, Carbon::createFromTimestampUTC($value));
                } else {
                    $nestedType = $type->getName();
                    $this->setValue($property, $object, $this->map(new $nestedType, $value));
                }
            }
        }

        return $object;
    }

    /**
     * @param object $object
     * @param array  $attributes
     * @param int    $arrayDepth
     * @param string $arrayType
     *
     * @return array
     * @throws ReflectionException
     */
    private function mapTypedArray(object $object, array $attributes, string $arrayType, int $arrayDepth): array
    {
        $items = [];

        foreach ($attributes as $item) {
            if ($arrayDepth > 1) {
                $items[] = $this->mapTypedArray($object, $item, $arrayType, $arrayDepth-1);
            } else {
                $items[] = $this->map(new $arrayType, $item);
            }
        }

        return $items;
    }

    /**
     * @param string $attribute
     *
     * @return string
     */
    private function toCamelCase(string $attribute): string
    {
        $parts = explode('_', $attribute);

        foreach ($parts as $k => $part) {
            if ($k == 0) {
                continue;
            }

            $parts[$k] = ucfirst($part);
        }

        return implode('', $parts);
    }

    /**
     * @param ReflectionProperty $property
     * @param object             $object
     * @param mixed              $value
     *
     * @return void
     */
    private function setValue(ReflectionProperty $property, object $object, $value): void
    {
        $property->setAccessible(true);
        $property->setValue($object, $value);
    }

    /**
     * @param ReflectionProperty $property
     * @param string             $namespace
     *
     * @return array|null
     */
    private function parseDocClass(ReflectionProperty $property, string $namespace): ?array
    {
        $doc = trim($property->getDocComment(), " \t\n\r \v*/");
        $parts = explode(' ', $doc);

        if (isset($parts[1]) && $parts[1] != self::TYPE_ARRAY) {
            $types = explode('|', $parts[1]);

            foreach ($types as $type) {
                if ($type != self::TYPE_NULL) {
                    $count = substr_count($type, self::ARRAY_CHARS);
                    $type = trim($type, self::ARRAY_CHARS);

                    return [sprintf('%s\%s', $namespace, $type), $count];
                }
            }
        }

        return null;
    }
}
