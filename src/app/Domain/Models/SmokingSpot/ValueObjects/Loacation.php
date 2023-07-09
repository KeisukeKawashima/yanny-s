<?php

declare(strict_types=1);

namespace App\Domain\Models\SmokingSpot\ValueObjects;

use Exception;

class Location
{
    /** @var float $latitude　緯度 */
    private $latitude;

    /** @var float $longitude　経度 */
    private $longitude;

    /**
     * Constructor
     *
     * @param float $latitude
     * @param float $longitude
     * @throws Exception
     */
    public function __construct(float $latitude, float $longitude)
    {
        if($latitude < -90.0 || $latitude > 90.0) {
            throw new Exception('緯度が正しくありません。');
        }
        if($longitude < -180.0 || $longitude > 180.0) {
            throw new Exception('経度が正しくありません。');
        }
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    /**
     * Get the value of latitude
     *
     * @return float latitude
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * Get the value of longitude
     *
     * @return float longitude
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * Compare two Location objects for equality
     * @param Location $location
     * @return bool
     */
    public function equals(Location $location): bool
    {
        return $this->latitude === $location->getLatitude() && $this->longitude === $location->getLongitude();
    }
}
