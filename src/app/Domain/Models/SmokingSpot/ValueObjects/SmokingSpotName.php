<?php

declare(strict_types=1);

namespace App\Domain\Models\SmokingSpot\ValueObjects;

use Exception;
use InvalidArgumentException;

class SmokingSpotName
{
    /** @const  */
    private const VARCHAR_LENGTH = 50;

    /** @var string $smokingSpotString　喫煙所名 */
    private $smokingSpotName;

    /**
     * Constructor
     *
     * @var int $value
     * @throws Exception
     */
    public function __construct(string $value)
    {
        if($value) {
            throw new InvalidArgumentException('が正しくありません。');
        }

        if(mb_strlen($value) < self::VARCHAR_LENGTH) {
            throw new InvalidArgumentException('喫煙所名は50文字以内である必要があります。');
        }
        $this->smokingSpotName = $value;
    }

    /**
     * Get the value of smokingSpotName
     *
     * @return string $smokingSpotName 喫煙所名
     */
    public function getValue(): string
    {
        return $this->smokingSpotName;
    }

    /**
     * Compare two SmokingSpotName objects for equality
     * @param SmokingSpotName $smokingSpotName
     * @return bool
     */
    public function equals(SmokingSpotName $smokingSpotName): bool
    {
        return $this->smokingSpotName === $smokingSpotName->getValue();
    }
}
