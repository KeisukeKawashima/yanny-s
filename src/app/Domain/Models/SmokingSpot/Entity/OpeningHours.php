<?php
declare(strict_types=1);

namespace App\Domain\Models\SmokingSpot\Entity;

class OpeningHours
{
    private $id;
    private $smokingSpotId;
    private $dayOfWeek;
    private $openingTime;
    private $closingTime;
    private $createdAt;
    private $updatedAt;

    public function __construct(
        int $id,
        int $smokingSpotId,
        string $dayOfWeek,
        string $openingTime,
        string $closingTime,
        string $createdAt,
        string $updatedAt
    ) {
        $this->id = $id;
        $this->smokingSpotId = $smokingSpotId;
        $this->dayOfWeek = $dayOfWeek;
        $this->openingTime = $openingTime;
        $this->closingTime = $closingTime;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSmokingSpotId(): int
    {
        return $this->smokingSpotId;
    }

    public function getDayOfWeek(): string
    {
        return $this->dayOfWeek;
    }

    public function getOpeningTime(): string
    {
        return $this->openingTime;
    }

    public function getClosingTime(): string
    {
        return $this->closingTime;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
}
