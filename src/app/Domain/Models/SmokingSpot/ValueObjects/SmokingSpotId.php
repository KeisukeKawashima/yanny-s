<?php

declare(strict_types=1);

namespace App\Domain\Models\SmokingSpot\ValueObjects;

use Exception;

class SmokingSpotId {

    /** @var int $smokingSpotId　喫煙所ID */
    private $smokingSpotId;

    /**
     * Constructor
     * 
     * @var int $value 
     * @throws Exception
     */
    public function __construct(int $value)
    {
        if($value <= 0){
            throw new Exception('IDが正しくありません。');
        }
        $this->smokingSpotId = $value;
    }

    /**
     * Get the value of smokingSpotId
     * 
     * @return $smokingSpotId 喫煙所ID
     */
    public function getValue() : int
    {
        return $this->smokingSpotId;
    }

    /**
     * Compare two SmokingSpotId objects for equality
     * @param SmokingSpotId $smokingSpotId
     * @return bool
     */
    public function equals(SmokingSpotId $smokingSpotId): bool
    {
        return $this->smokingSpotId === $smokingSpotId->getValue();
    }
}
