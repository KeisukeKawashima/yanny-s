<?php
declare(strict_types=1);

namespace App\Domain\Services;

use App\Domain\Models\SmokingSpot\Entity\SmokingSpot;
use App\Domain\Models\SmokingSpot\ValueObjects\Location;
use App\Domain\Models\SmokingSpot\ValueObjects\SmokingSpotType;
use App\Domain\Repositories\SmokingSpotRepositoryInterface;

class SmokingSpotSearchService
{
    private $smokingSpotRepository;

    public function __construct(SmokingSpotRepositoryInterface $smokingSpotRepository)
    {
        $this->smokingSpotRepository = $smokingSpotRepository;
    }

    public function searchByLocationAndType(Location $location, SmokingSpotType $type): array
    {
        return $this->smokingSpotRepository->findByLocationAndType($location, $type);
    }
}
