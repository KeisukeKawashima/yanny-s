<?php

declare(strict_types=1);

namespace App\Domain\Models\SmokingSpot\ValueObjects;

/**
 *  SmokingSpotType Value Object
 *
 *  このクラスは喫煙所の種類を表します。種類は以下のいずれかになります：
 * - 'outdoor': 喫煙所は屋外にあります。
 * - 'indoor': 喫煙所は屋内にあります。
 * - 'cafe': 喫煙所はカフェ内にあります。
 * - 'restaurant': 喫煙所はレストラン内にあります。
 * - 'general_smoking_area': 喫煙所は一般的な喫煙エリアです。
 */
class SmokingSpotType
{
    private const VALID_TYPES = [
        'outdoor',
        'indoor',
        'cafe',
        'restaurant',
        'general_smoking_area'
    ];

    /**
     * @var string 喫煙所の種類
     */
    private $value;

    /**
     * SmokingSpotType constructor.
     *
     * @param string $value 喫煙所の種類。'outdoor'、'indoor'、'cafe'、'restaurant'、'general_smoking_area'のいずれかでなければなりません。
     * @throws \InvalidArgumentException $valueが有効な種類でない場合に投げられます。
     */
    public function __construct(string $value)
    {
        if ($value === null || !in_array($value, self::VALID_TYPES, true)) {
            throw new \InvalidArgumentException(sprintf('Invalid smoking spot type: %s', $value));
        }

        $this->value = $value;
    }

    /**
     * 喫煙所の種類を取得します。
     *
     * @return string 喫煙所の種類
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Checks whether this type is equal to another type
     *
     * @param SmokingSpotType $other The other type to compare with
     * @return bool True if the types are equal, false otherwise
     */
    public function equals(SmokingSpotType $other): bool
    {
        return $this->value === $other->getValue();
    }
}
