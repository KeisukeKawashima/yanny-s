<?php

declare(strict_types=1);

namespace App\Domain\Repositories;

use App\Domain\Models\SmokingSpot\Entity\SmokingSpot;
use App\Domain\Models\SmokingSpot\ValueObjects\Location;
use App\Domain\Models\SmokingSpot\ValueObjects\SmokingSpotType;

interface SmokingSpotRepositoryInterface
{
    public function findByLocationAndType(Location $location, SmokingSpotType $type): array;
}
